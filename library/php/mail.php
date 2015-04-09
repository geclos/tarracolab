<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->AddAddress('clos.gerard@gmail.com', 'Ignasi Clos');  // Add a recipient
$mail->AddReplyTo($_POST['email']);

$mail->Subject = 'Tarracolab: ' . $_POST['subject'];
$mail->Body    = $_POST['message'];

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo "Message has been send!";

?>
