# DataHub GPU Cloud Landing Page (YetiCloud.AI)

Welcome to the **DataHub GPU Cloud** landing page project! This is a premium, high-performance, responsive single-page website designed for DataHub Nepal. It aims to showcase their enterprise-grade NVIDIA GPU offerings for AI builders, researchers, and production teams.

## 🚀 Features

- **Dynamic Theme Switching:** Seamlessly toggle between Light and Dark modes without a page reload. Both themes are fully unified within a single `index.php` and `landing.css` file for easy maintainability.
- **Modern & Premium UI/UX:** Built with a professional, enterprise-grade aesthetic including floating glassmorphism elements, subtle micro-interactions, smooth hover transitions, and gorgeous abstract SVG orbs.
- **Fully Responsive Design:** Carefully crafted to look perfect on all devices, from ultra-wide 4K desktop monitors down to mobile phones.
- **Hardware Grid Showcase:** A sleek 3-column grid layout detailing specifications for top-tier NVIDIA GPUs (H100, A100, RTX 6000 Ada, L40S, and RTX 4090).
- **Interactive Cost Comparison:** A side-by-side comparison of buying GPUs vs renting via DataHub GPU Cloud, complete with interactive hover effects.
- **Secure Contact Form:** Integrated with PHP (`contact.php`) and Google reCAPTCHA (`captcha.php`) to safely process user inquiries and prevent spam.

## 📂 Project Structure

```
├── index.php         # Main unified landing page (HTML/PHP structure)
├── css/
│   └── landing.css   # Unified stylesheet for both light & dark themes
├── js/
│   └── landing.js    # Logic for theme switching and interactive elements
├── images/           # Contains all static image assets (GPUs, flags, etc.)
├── contact.php       # Form processing logic for the "Get in Touch" section
├── captcha.php       # reCAPTCHA verification logic
└── .env              # Environment file (used for storing secure API keys)
```

## 🎨 Theming & Customization

All styling is managed via CSS variables in `css/landing.css`. The system uses a clean `data-theme="dark"` attribute on the `<html>` or `<body>` tag to toggle color palettes.

### Light Mode (Default)
Clean, professional white and light slate-blue backgrounds `var(--bg-section-light)` optimized for high legibility and contrast.

### Dark Mode
Deep, immersive navy and slate backgrounds `var(--bg-section-dark)` with neon-blue accents, perfect for late-night coding sessions.

### Customizing Colors
To change the primary brand colors or backgrounds, simply modify the `:root` variables in `landing.css`.

## 🛠️ Setup & Local Development

This project uses PHP to handle form submissions and reCAPTCHA. To run it locally:

1. Ensure you have a local server environment installed (such as **UniServerZ**, XAMPP, or MAMP).
2. Clone or place this repository into your local server's root directory (e.g., `www/` or `htdocs/`).
3. If necessary, configure your `.env` file with the correct SMTP details and reCAPTCHA Site/Secret keys for `contact.php` to function properly.
4. Open your browser and navigate to `http://localhost/your-folder-name/index.php`.

## 📝 Editing Content
- **Text & Copy:** Open `index.php` and edit the HTML directly.
- **Hardware Specs:** GPU specifications are located in the `#hardware` section of `index.php`.
- **Styling:** Open `css/landing.css` to adjust layouts, breakpoints, or SVG abstract backgrounds.

---
*Designed & Built for DataHub Nepal.*
