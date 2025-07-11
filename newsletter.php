<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['subscriber_email'])) {
    $email = filter_var(trim($_POST['subscriber_email']), FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid";
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Setup (use your credentials)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'prostatecarekenya@gmail.com';
        $mail->Password = 'ugwv hfng qoge kuvz';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Message
        $mail->clearAddresses(); // clear previous address
        $mail->addAddress($email); // send to subscriber now
        $mail->Subject = 'ProstateCare Kenya Newsletter!';

        // Load HTML template content
        $newsletterTemplate = file_get_contents("newsletter-template.html");

        $mail->isHTML(true);
        $mail->Body = $newsletterTemplate;

        $mail->send();
        echo "success";

    } catch (Exception $e) {
        echo "error";
    }
}
?>
