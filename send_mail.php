<?php
$to_email = "selimrezaswadhim@gmail.com";
$subject = "Swadhin Simple Email Test via PHP";
$body = "Hi Reza, This is test email send by PHP Script";
$headers = "From: selimrezaswadhin@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed $to_email...";
}

?>





