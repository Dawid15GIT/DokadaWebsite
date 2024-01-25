<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try{
    
    //Server settings
    $mail->isSMTP();
<<<<<<< HEAD
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'Dokada.WEBSITE@gmail.com';
    $mail->Password = 'remd jwqi syvg wypm';
=======
    $mail->HOST = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'Dokada.WEBSITE@gmail.com';
    $mail->Password = 'wgzh lakl amlj mdmo';
>>>>>>> 2408a808c82f24fd05a12796f3227db9244a519e
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
<<<<<<< HEAD
    $mail->setFrom("dawid.ciesielski15@gmail.com", "dawid Ciesielski");
=======
    $mail->setFrom($email, $name);
>>>>>>> 2408a808c82f24fd05a12796f3227db9244a519e
    $mail->addAddress('Dokada.WEBSITE@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'xyz';
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Message has been sent";
}   catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// $mail ->isSMTP();
// $mail -> SMTPAuth = true;

// $mail ->SMTPDebug = SMTP::DEBUG_SERVER;

// $mail ->Host = "http://smtp.brevo.io";
// $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTTLS;
// $mail ->Port = 587;

// $mail ->Username = "Dokada.WEBSITE@gmail.com;
// $mail ->Password = "wgzh lakl amlj mdmo";

// $mail ->setFrom($email, $name);
// $mail ->addAddress("strona@dokada.com", "Ciesiel");

// $mail ->Body = $message;

// $mail ->send();

?>