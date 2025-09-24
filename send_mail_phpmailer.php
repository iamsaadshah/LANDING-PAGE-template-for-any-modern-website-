<?php
/**
 * send_mail_phpmailer.php
 * Safer replacement for send_mail.php using PHPMailer (included in PHPMailer/src).
 * Requires SMTP credentials to be provided via environment variables (or set on the server).
 *
 * Add variables to a .env (never commit .env) or add to server environment:
 *  - SMTP_HOST, SMTP_PORT, SMTP_USER, SMTP_PASS, FROM_EMAIL, MAIL_TO
 */

require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';
require_once __DIR__ . '/PHPMailer/src/Exception.php';

use PHPMailer\\PHPMailer\\PHPMailer;
use PHPMailer\\PHPMailer\\Exception;

function env($k, $default = '') {
    $v = getenv($k);
    return $v === false ? $default : $v;
}

$smtpHost = env('SMTP_HOST', 'smtp.example.com');
$smtpPort = intval(env('SMTP_PORT', 465));
$smtpUser = env('SMTP_USER', 'user@example.com');
$smtpPass = env('SMTP_PASS', 'password');
$fromEmail = env('FROM_EMAIL', 'noreply@example.com');
$toEmail = env('MAIL_TO', 'recipient@example.com');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $property = trim($_POST['property'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');
    $referrer = $_SERVER['HTTP_REFERER'] ?? '';

    // Basic validation
    $errors = [];
    if (empty($name)) $errors[] = 'Name required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email required';
    if (empty($phone) || !preg_match('/^[+]*[0-9]{7,20}$/', $phone)) $errors[] = 'Valid phone required';

    if (!empty($errors)) {
        $qs = http_build_query(['mail-sent' => 'false', 'errors' => implode(', ', $errors)]);
        header('Location: ' . ($referrer ?: 'index.php') . '?' . $qs);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUser;
        $mail->Password = $smtpPass;
        $mail->SMTPSecure = ($smtpPort == 465) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $smtpPort;

        // Recipients
        $mail->setFrom($fromEmail, 'Website Contact');
        $mail->addAddress($toEmail);
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Website Contact: ' . $name;
        $body = \"Name: {$name}\\nEmail: {$email}\\nPhone: {$phone}\\nCity: {$city}\\nProperty: {$property}\\n\\nMessage:\\n{$message}\\n\";
        $mail->Body = $body;

        $mail->send();
        header('Location: thank-you.php');
        exit;
    } catch (Exception $e) {
        $err = urlencode($mail->ErrorInfo ?: $e->getMessage());
        header('Location: ' . ($referrer ?: 'index.php') . '?mail-sent=false&error=' . $err);
        exit;
    }
}
