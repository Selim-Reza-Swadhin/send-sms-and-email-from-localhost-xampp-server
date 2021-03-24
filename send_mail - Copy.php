First turn on from your gmail >>
>> Security
>> Less secure app access pane

Then 2nd Step

C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:

SMTP=smtp.gmail.com
smtp_port=587
//sendmail_from = YourGmailId@gmail.com
sendmail_from = selimrezaswadhin@gmail.com

sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
or
sendmail_path = "\"H:\xampp7.4\sendmail\sendmail.exe\" -t"


Then 3rd Step

C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values

smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
//auth_username=YourGmailId@gmail.com
auth_username=selimrezaswadhin@gmail.com
//auth_password=Your-Gmail-Password
auth_password=1234567

//force_sender=YourGmailId@gmail.com(optional)
force_sender=selimrezaswadhin@gmail.com



################
PHP Source Code
################

<?php
$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>





<?php

require_once('PHPMailer/PHPMailerAutoload.php');
 
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'YOUR EMAIL ADDRESS';

//Password to use for SMTP authentication
$mail->Password = 'YOUR EMAIL PASSWORD'; 

//Set who the message is to be sent from
$mail->setFrom('YOUR EMAIL ADDRESS', 'YOUR NAME (OPTIONAL)');

//Set who the message is to be sent to
$mail->addAddress('THE RECIPIENTS EMAIL ADDRESS ', 'RECIPIENTS NAME');

//Set the subject line
$mail->Subject = 'YOUR SUBJECT';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Replace the plain text body with one created manually
$mail->Body = 'THE BODY OF THE EMAIL';
  
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>