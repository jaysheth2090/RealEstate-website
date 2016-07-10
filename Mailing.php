<?php

/**
 * @author Boomer
 * @copyright 2013
 */

include("Mailer/class.phpmailer.php");

define('GUSER', 'sladani141@gmail.com'); // Gmail username  
define('GPWD', 'panchnath'); // Gmail password  


function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587; 
	$mail->Username = 'sladani141@gmail.com';
	$mail->Password = 'panchnath';
$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

smtpmailer('jaysheth2090@gmail.com', '', 'sladani141@mail.com', 'yourName', 'test mail message', 'Hello World!');
?>