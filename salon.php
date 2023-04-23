<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    //POST
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    //$message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@lashesbyabie.shop';
    $mail->Password = 'Arabella@15'; //Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //SETTING Email
    $mail->setFrom('contact@lashesbyabie.shop', 'Lashes by Abie'); //Senders Email
    $mail->addAddress($email); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Lashes by Abie";
    $mail->Body = "<hr>" . "Good Day " ."<b>$name</b>" . "! " . "<br>  Hi, thanks for contacting us. We've received your message and appreciate you reaching out.
    ";
    $mail->send();
    header('Location: index.php');
}
?>