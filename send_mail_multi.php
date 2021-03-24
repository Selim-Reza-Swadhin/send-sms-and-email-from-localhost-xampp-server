<?php
$to_email = ["selimrezaswadhim@gmail.com","selimrezaswadhinm@gmail.com","selimrezaswadhin89@gmail.com"];
$subject = "Swadhin Simple Email Email successfully sent to";
$body = "Hi Reza, This is test Email successfully sent to Email successfully sent to Email successfully sent to";
$headers = "From: selimrezaswadhin@gmail.com";

for ($i=0; $i < 3; $i++){


if (mail($to_email[$i], $subject, $body, $headers)) {
    echo $i ." Email successfully sent to ".$to_email[$i]."<br>";
} else {
    echo $i ." Email sending failed ".$to_email[$i]."<br>";
}
}

?>





