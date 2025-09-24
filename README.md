# Landing Page Template

A modern, responsive landing page template built with **PHP**, **Tailwind CSS**, and **Alpine.js**, featuring a ready-to-use **contact form** powered by PHPMailer.  
This project was developed as a **real world project at my internship** and can be adapted for any brand, product, or portfolio website.

---

## 🚀 Features
- Responsive layout with Tailwind CSS
- Dynamic UI behavior with Alpine.js
- Contact form with SMTP support (PHPMailer)
- Organized folder structure (assets, components, CSS, JS)
- Ready for deployment on Apache / XAMPP / shared hosting
- Node.js build setup with Tailwind + PostCSS

---

## 🛠️ Tech Stack
- **Languages**: PHP, HTML5, CSS3, JavaScript (ES6)
- **Styling**: Tailwind CSS, PostCSS, Autoprefixer
- **Frontend Behavior**: Alpine.js
- **Backend**: PHP (simple form handler with PHPMailer)
- **Mail**: PHPMailer (SMTP email support)
- **Build Tools**: Node.js (via package.json scripts)

---

## 📂 Project Structure

Template LP/  
 ├── assets/             → Images, icons, etc.  
 ├── components/         → Reusable HTML components  
 ├── css/                → Tailwind generated CSS  
 ├── js/                 → Custom JS scripts  
 ├── PHPMailer/          → PHPMailer library (LGPL licensed)  
 ├── index.php           → Main landing page  
 ├── send_mail.php       → Contact form (PEAR Mail version - optional)  
 ├── send_mail_phpmailer.php → Contact form (PHPMailer version - recommended)  
 ├── thank-you.php       → Redirect after successful submission  
 ├── package.json        → Node dependencies (Tailwind, PostCSS)  
 └── tailwind.config.js  → Tailwind configuration  

---

## ⚡ Getting Started

1. Clone the repo  
   git clone https://github.com/iamsaadshah/LANDING-PAGE-template-for-any-modern-website-.git  
   cd LANDING-PAGE-template-for-any-modern-website-  

2. Install dependencies  
   npm install  

3. Build CSS  
   npx tailwindcss -i ./css/input.css -o ./css/output.css --watch  

4. Configure environment  
   Create a `.env` file in the project root (never commit this file). Example:  

   SMTP_HOST=smtp.yourdomain.com  
   SMTP_PORT=587  
   SMTP_USERNAME=your@email.com  
   SMTP_PASSWORD=yourpassword  
   SMTP_SECURE=tls  

---

## ▶️ How to Run / Execute

### Option A: Run with XAMPP (Recommended for Windows)
1. Copy the project folder (Template LP/) into your htdocs directory.  
   Example: C:\xampp\htdocs\Template LP  
2. Start Apache from the XAMPP control panel.  
3. Visit in browser: http://localhost/Template%20LP  

### Option B: Run with PHP Built-in Server
1. From the project folder, run:  
   php -S localhost:8000  
2. Visit: http://localhost:8000  

### Option C: Deploy on Hosting
- Upload the project to your hosting provider.  
- Ensure PHP 7.4+ is supported.  
- Configure your `.env` file with real SMTP credentials.  

---

## 📧 Contact Form
Two implementations are provided:  
- send_mail.php → uses PEAR Mail (requires PEAR installed)  
- send_mail_phpmailer.php → uses PHPMailer (**recommended**)  

Switch to PHPMailer version for production.

---

## 📜 License
This project is licensed under the MIT License.  
See LICENSE for details.  

PHPMailer is included under its own LGPL License in the PHPMailer/ directory.  

---

## 🛡️ Security
- Do not expose `.env` or phpinfo() files in production.  
- Never commit real SMTP credentials to GitHub.  
- Report issues via SECURITY.md  

---

## 👤 Author
**Saad Shah**  
© 2025 Saad Shah. Released under the MIT License.
