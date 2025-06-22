<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Require PHPMailer classes
require 'vendor\phpmailer\phpmailer\src\Exception.php';
require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'vendor\phpmailer\phpmailer\src\SMTP.php';

// Collect and sanitize form data
$name = htmlspecialchars(trim($_POST['contact-name']));
$email = filter_var(trim($_POST['contact-email']), FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars(trim($_POST['contact-subject']));
$message = htmlspecialchars(trim($_POST['contact-message']));

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP Settings (You can use your hosting SMTP or Gmail for testing)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'muriithialvin06@gmail.com';
    $mail->Password = 'ioxv pffb wgdv sotd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email settings
    $mail->setFrom($email, $name);
    $mail->addAddress('support@prostatecarekenya.org', 'ProstateCare Kenya');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "Contact Form: $subject";
    $mail->Body = "
        <h2>New Message from Website</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $mail->send();
    header("Location: success.php");
} catch (Exception $e) {
    echo "Message could not be sent. {$mail->ErrorInfo}";
}
?>
