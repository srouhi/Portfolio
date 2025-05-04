<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $subject = htmlspecialchars(strip_tags(trim($_POST['subject'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'Shaghayegh.rouhi.sr@gmail.com'; // Your Gmail address
        $mail->Password   = 'espwvqcriksizcbh'; // Your Gmail App Password (NOT your Gmail password!)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('Shaghayegh.rouhi.sr@gmail.com', 'Portfolio Contact Form');
        $mail->addAddress('Shaghayegh.rouhi.sr@gmail.com'); // Your receiving email

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject ?: "New Contact Form Submission";
        $mail->Body    = "
            <h2>New Message</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();
        echo "<p style='color:green;'>Your message was sent successfully. Thank you!</p>";
    } catch (Exception $e) {
        echo "<p style='color:red;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
    }
} else {
    echo "<p style='color:red;'>Something went wrong. Please submit the form properly.</p>";
}
?>
