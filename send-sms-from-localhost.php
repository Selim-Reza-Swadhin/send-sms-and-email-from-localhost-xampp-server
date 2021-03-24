<?php

//$to = "017xxxxxxx,+88016xxxxxxx";
$to = "+8801724063642";
$token = "925ab503af9227129c14e86e210bac46";
$message = "Test SMS From Using API Selim";

$url = "http://api.greenweb.com.bd/api.php?json";


$data = array(
    'to' => "$to",
    'message' => "$message",
    'token' => "$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
echo $smsresult;
//[ { "to": "+8801724063642", "message": "Test SMS From Using API Selim", "status": "SENT", "statusmsg": "SMS Sent Successfully To +8801724063642" } ]

//Error Display
echo curl_error($ch);




