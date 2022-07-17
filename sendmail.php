<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // $phpmailer = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    // $mail->Port = 2525;
    $mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587; 
    $mail->Username = 'tarun@sportswizzleague.com';
    $mail->Password = 'Humtumtarun@1';

    // printf($_POST["email"]);
    // die();





    //Recipients
    $mail->setFrom('increadibletarun07@gmail.com', 'Mailer');
    // $mail->addAddress('sandhuzinnovation@gmail.com', 'Sandhuz Innovation');     //Add a recipient
    $mail->addAddress('increadibletarun07@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';










} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}