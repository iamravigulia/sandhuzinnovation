<?php

require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 0;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "tarun@sportswizzleague.com";
$mail->Password = "Humtumtarun@1";
//If SMTP requires TLS encryption then set it
// Sandhusandhu_1
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "tarun@sportswizzleague.com";


$mail->FromName = "Contact Form";
// sandhuzinnovation@gmail.com
$mail->addAddress("increadibletarun07@gmail.com", "Sandhuz");

$mail->isHTML(true);
function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}


    
$fullname = $_POST["fname"];
$tel = $_POST["tel"];
$email =  $_POST["email"];
$message =  $_POST["message"];

$email_message = "<h2>Form details below.</h2>\n\n";
$email_message .= "<table><tr><td><strong>Full Name:</strong> ".clean_string($fullname)."</td></tr><br>";
$email_message .= "<tr><td><strong>Telephone Number:</strong> ".clean_string($tel)."</td></tr><br>";
$email_message .= "<tr><td><strong>Email:</strong> ".clean_string($email)."</td></tr><br>";
$email_message .= "<tr><td><strong>Message:</strong> ".clean_string($message)."</td></tr><br>";
    

error_reporting(0);
//$mail->SMTPDebug = 2;
$mail->Subject = "Form Content";
$mail->Body = $email_message;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo json_encode(array('status' => 1,'response' =>"Message has been sent successfully" ));
    //echo ["status" => 1,];
}