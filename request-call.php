<?php
include 'includes/class.phpmailer.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Sending an email to the client.
$mail = new PHPMailer();

$mail->From = "webresponseteam@ns-email.com";
$mail->FromName = "NetServices Web-Response Team";

$mail->Subject = "Your Call Request Was Submitted";
$body = "Dear Valued Client,\n\n";
$body .= "Your call request has been sent. Someone should be contacting you soon.\n";
$body .= "If this is urgent, you can always call us at 1-724-NET-SERV (1-724-638-7378)\n\n";
$body .= "Regards,\nThe NetServices Web-Response Team";

$mail->Body = $body;
$mail->AddAddress($email, $name);
$mail->Send();

// Sending an email to the response team.
$mail = new PHPMailer();

$mail->From = $email;
$mail->FromName = $name;

$mail->Subject = "TheNetServices.com Form - Request a Call (From Header)";
$body = "Dear Representative,\n\n";
$body .= "The following visitor has requested a call from the Web site header.\n\n";
$body .= "Please call:\n\n";
$body .= "Name:                  " . $name . "\n";
$body .= "Telephone Number:      " . $phone . "\n\n";
$body .= "-\n\n";
$body .= "Request Date & Time:   " . date('F jS Y h:i:s A') . "\n";
$body .= "IP Address of Visitor: " . $_SERVER['REMOTE_ADDR'];

$mail->Body = $body;
$mail->AddAddress("webresponseteam@ns-email.com", "NetServices Web-Response Team");
$mail->Send();
?>
