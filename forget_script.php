<?php
include 'common.php';
$con=mysqli_connect("localhost", "root", "", "final");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// with out composer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptionsa
$email= mysqli_real_escape_string($con,$_POST['email']);
$mail = new PHPMailer;

try {
    //Server setting
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'girlystores';                     // SMTP username
    $mail->Password   = 'girlystores';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('girlystores@gmail.com', 'GirlyStores');
    $mail->addAddress('$email', 'user');     // Add a recipient
    $mail->addAddress('$email');               // Name is optional
    $mail->addReplyTo('girlystores@gmail.com', 'Information');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "your request to receive the password";
    $mail->Body    = "reset your password here";
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $mail->send();
    echo "Message has been sent to your registered email id";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>





