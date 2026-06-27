<?php
session_start();
header('Content-Type: application/json');

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
  exit;
}

// Rate limiting: max 1 submission per 30 seconds
$now = time();
$lastSubmit = $_SESSION['last_contact_submit'] ?? 0;
if ($now - $lastSubmit < 30) {
  http_response_code(429);
  echo json_encode(['success' => false, 'message' => 'Please wait at least 30 seconds before sending another message.']);
  exit;
}

// CSRF check
$submittedToken = $_POST['csrf_token'] ?? '';
if (!hash_equals($_SESSION['csrf_token'] ?? '', $submittedToken)) {
  http_response_code(403);
  echo json_encode(['success' => false, 'message' => 'Invalid session. Please reload the page and try again.']);
  exit;
}

// CAPTCHA check
$captcha = strtoupper(trim($_POST['captcha'] ?? ''));
$expectedCaptcha = $_SESSION['captcha'] ?? '';
unset($_SESSION['captcha']);
if (!$expectedCaptcha || $captcha !== $expectedCaptcha) {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => 'Incorrect CAPTCHA code. Please try again.']);
  exit;
}

// Sanitize & validate inputs
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$msgBody = trim($_POST['message'] ?? '');

if (!$name || !$email || !$phone || !$msgBody) {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
  exit;
}

// Strip tags from text fields to prevent HTML/header injection
$name    = strip_tags($name);
$email   = strip_tags($email);
$phone   = strip_tags($phone);
$company = strip_tags($company);
$msgBody = strip_tags($msgBody);

// Remove any line breaks from name/email to prevent header injection
$name  = str_replace(["\r", "\n"], '', $name);
$email = str_replace(["\r", "\n"], '', $email);

// Load .env file
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
  foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    if (str_starts_with(trim($line), '#')) continue;
    putenv(trim($line));
  }
}

// SMTP config from .env
$smtpHost = getenv('SMTP_HOST');
$smtpUser = getenv('SMTP_USER');
$smtpPass = getenv('SMTP_PASS');

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host       = $smtpHost;
  $mail->SMTPAuth   = true;
  $mail->Username   = $smtpUser;
  $mail->Password   = $smtpPass;
  $mail->SMTPSecure = getenv('SMTP_SECURE') ?: PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = getenv('SMTP_PORT') ? (int) getenv('SMTP_PORT') : 587;

  $mail->setFrom($smtpUser, $name);
  $mail->addReplyTo($email, $name);
  $mail->addAddress('gpu-admin@datahub.com.np');

  $mail->isHTML(false);
  $mail->Subject = "DataHub GPU Website: $name";
  $mail->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\n\nMessage:\n$msgBody";

  $mail->send();

  $_SESSION['last_contact_submit'] = $now;
  echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully. We will get back to you soon.']);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(['success' => false, 'message' => 'Sorry, something went wrong. Please try again.']);
}
