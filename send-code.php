<?php
use PHPMailer/PHPMailer;
use PHPMailer/Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;

$mailto=$_POST['mail_to'];
$mailsub=$_POST['mail_sub'];
$mailmsg=$_POST['mail_msg'];


$mail->isSMTP();                           
$mail->Host = 'smtp.gmail.com';           
$mail->SMTPAuth = true;                    
$mail->Username = 'selimrezaswadhin@gmail.com';         
$mail->Password = '12101989';
$mail->SMTPSecure = 'tls';              
$mail->Port = 587; 
$mail->IsHTML(true);
//$mail ->SetFrom("shahin.mm@gmail.com");
$mail ->Subject = $mailsub;
$mail ->Body =$mailmsg ;
$mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }

?>