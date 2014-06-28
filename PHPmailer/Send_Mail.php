<?php
function Send_Mail($to,$subject,$body)
{
require_once ('class.phpmailer.php');
$from 				= "453ankitapalekar@gmail.com";
$mail 				= new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   	= true;  // SMTP authentication
$mail->Mailer 		= "smtp";
$mail->Host       	= "tls://smtp.gmail.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       	= 465;                    // set the SMTP port
$mail->Username  	= "piyakp2@gmail.com";  // SES SMTP  username
$mail->Password   	= "piyakapoor";  // SES SMTP password

$mail->SetFrom($from, 'Piya');
$mail->AddReplyTo($from,'Piya');
$mail->Subject 		= $subject;
$mail->MsgHTML($body);
$address 			= $to;
$mail->AddAddress($address, $to);

if(!$mail->Send())
return false;
else
return true;

}
?>