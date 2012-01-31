<?php
include 'includes/class.phpmailer.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$businessname = $_POST['businessname'];
$businesstype = $_POST['businesstype'];
$title = $_POST['title'];
$besttime1 = $_POST['1_call'];
$besttime2 = $_POST['2_call'];
$besttime3 = $_POST['3_call'];
$questions = $_POST['message']

// Sending an email to the client.
$mail = new PHPMailer();

$mail->From = "webresponseteam@ns-email.com";
$mail->FromName = "NetServices Web-Response Team";

$mail->Subject = "Your Consultation Request Was Submitted";
$body = "Dear Valued Client,\n\n";
$body .= "Your consultation request has been sent. Someone should be contacting you soon.\n";
$body .= "If this is urgent, you can always call us at 1-724-NET-SERV (1-724-638-7378)\n\n";
$body .= "Regards,\nThe NetServices Web-Response Team";

$mail->Body = $body;
$mail->AddAddress($email, $name);
$mail->Send();

// Sending an email to the response team.
$mail = new PHPMailer();

$mail->From = $email;
$mail->FromName = $name;

$mail->Subject = "TheNetServices.com Form - Request Consultation (Landing Page)";
$body = "Dear Representative,\n\n";
$body .= "The following visitor has requested a consultation from the Landing page.\n\n";
$body .= "Please call:\n\n";
$body .= "Title:                 " . $title . "\n";
$body .= "Name:                  " . $firstname . " " . $lastname . "\n";
$body .= "Telephone Number:      " . $phonenumber . "\n";
$body .= "Email:                 " . $email . "\n";
$body .= "Business Name:         " . $businessname . "\n";
$body .= "Business Type:         " . $businesstype . "\n";
$body .= "1st Best Time:         " . $besttime1 . "\n";
$body .= "2nd Best Time:         " . $besttime2 . "\n";
$body .= "3rd Best Time:         " . $besttime3 . "\n";
$body .= "Questions:             " . $questions . "\n\n";
$body .= "-\n\n";
$body .= "Request Date & Time:   " . date('F jS Y h:i:s A') . "\n";
$body .= "IP Address of Visitor: " . $_SERVER['REMOTE_ADDR'];

$mail->Body = $body;
$mail->AddAddress("webresponseteam@ns-email.com", "NetServices Web-Response Team");
$mail->Send();
?>
