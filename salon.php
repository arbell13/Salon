<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
if(isset($_POST["send"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mail = new PHPMailer(true);
 
    $mail->isSMTP();
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = true;
    $mail->Username = "contact@lashesbyabie.shop";
    $mail->Password = "Arabella@15";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
 
    $mail->setFrom("contact@lashesbyabie.shop");
 
   
    $mail->addAddress('contact@lashesbyabie.shop');

 
    $mail->isHTML(true);
 
    $mail->Subject = $_POST["subject"];
    $mail->Body = "<hr>" . "Good Day " ."<b>$name</b>" . "! " . "<br> Thank you for contacting us. We've received your message and appreciate you reaching out.
    <br><br>        
         Regards, <br>
        <b>Lashes by Abie </b>";
   $mail->send();
 
    $mail->send();
 
    echo "Feedback Successful!";
 
 
}
?>