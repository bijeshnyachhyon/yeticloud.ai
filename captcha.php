<?php
session_start();
$code = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, 5);
$_SESSION['captcha'] = $code;

$w = 150;
$h = 50;
$img = imagecreatetruecolor($w, $h);

$bg = imagecolorallocate($img, 240, 245, 250);
imagefill($img, 0, 0, $bg);

$lines = imagecolorallocate($img, 180, 200, 220);
for ($i = 0; $i < 5; $i++) {
  imageline($img, rand(0, $w), rand(0, $h), rand(0, $w), rand(0, $h), $lines);
}

for ($i = 0; $i < 80; $i++) {
  $dot = imagecolorallocate($img, rand(160, 220), rand(160, 220), rand(180, 230));
  imagesetpixel($img, rand(0, $w), rand(0, $h), $dot);
}

$colors = [
  imagecolorallocate($img, 20, 41, 88),
  imagecolorallocate($img, 37, 99, 235),
  imagecolorallocate($img, 139, 92, 246),
];

for ($i = 0; $i < strlen($code); $i++) {
  $x = 15 + $i * 26;
  $y = rand(30, 38);
  $angle = rand(-18, 18);
  $c = $colors[$i % 3];
  imagestring($img, 5, $x, $y - 12, $code[$i], $c);
}

header('Content-Type: image/png');
header('Cache-Control: no-store, no-cache, must-revalidate');
imagepng($img);
imagedestroy($img);
