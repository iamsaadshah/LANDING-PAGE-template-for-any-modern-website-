<?php
/**
 * Simple PHP Form Handler Template
 * -------------------------------
 * Handles form submissions via POST
 * Sends an email using SMTP (PEAR Mail)
 * Customize $config array below for your project
 */

require_once "Mail.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // --- CONFIGURATION --- //
    $config = [
        'smtp_host' => 'ssl://smtp.example.com', // e.g., ssl://smtp.gmail.com
        'smtp_port' => 465,
        'smtp_username' => 'your_email@example.com',
        'smtp_password' => 'your_password',
        'from_email' => 'your_email@example.com',
        'to_email' => 'recipient@example.com',
        'subject_prefix' => 'Form Submission from Website',
    ];

    // --- SANITIZE FORM INPUTS --- //
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $phone = trim($_POST["phone"] ?? '');
    $city = trim($_POST["city"] ?? '');
    $property = trim($_POST["property"] ?? '');
    $message = htmlspecialchars($_POST["message"] ?? '', ENT_QUOTES, 'UTF-8');
    $referrer = $_SERVER['HTTP_REFERER'] ?? 'No referrer available';

    // --- VALIDATION --- //
    $errors = [];
    if (empty($name))
        $errors[] = "Name is required.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "A valid email is required.";
    if (empty($phone) || !preg_match('/^[+]*[0-9]{10,15}$/', $phone))
        $errors[] = "A valid phone number is required.";

    if (!empty($errors)) {
        $error_message = urlencode(implode(", ", $errors));
        header("Location: " . $referrer . "?mail-sent=false&errors=" . $error_message);
        exit();
    }

    // --- EMAIL BODY --- //
    $subject = $config['subject_prefix'] . ": " . $name;
    $body = <<<EOT
Name: $name
Email: $email
Phone: $phone
City: $city
Property: $property
Message: $message
Referrer URL: $referrer
EOT;

    // --- EMAIL HEADERS --- //
    $headers = [
        'From' => $config['from_email'],
        'To' => $config['to_email'],
        'Subject' => $subject
    ];

    // --- SEND EMAIL VIA SMTP --- //
    $smtp = Mail::factory('smtp', [
        'host' => $config['smtp_host'],
        'port' => $config['smtp_port'],
        'auth' => true,
        'username' => $config['smtp_username'],
        'password' => $config['smtp_password']
    ]);

    $mail = $smtp->send($config['to_email'], $headers, $body);

    // --- RESULT HANDLING --- //
    if (PEAR::isError($mail)) {
        // Redirect back with failure
        $error = urlencode($mail->getMessage());
        header("Location: " . $referrer . "?mail-sent=false&error=" . $error);
        exit();
    } else {
        // Redirect to thank you page (update as needed)
        header("Location: thank-you.html");
        exit();
    }
}
?>