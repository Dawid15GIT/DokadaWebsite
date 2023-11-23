<?php

$name = $_POST["name"];
$email = $_POST["email"];
// $subject = $_POST["subject"];
$message = $_POST["message"];

require"vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail ->isSMTP();
$mail -> SMTPAuth = true;

$mail ->SMTPDebug = SMTP::DEBUG_SERVER;

$mail ->Host = "http://smtp.brevo.io";
$mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTTLS;
$mail ->Port = 587;

$mail ->Username = "dawid.ciesielski15@gmail.com";
$mail ->Password = "AgatkaiDawidek160121"

$mail ->setFrom($email, $name);
$mail ->addAddress("strona@dokada.com", "Ciesiel");

$mail ->Body = $message;

$mail ->send();

echo "email sent";