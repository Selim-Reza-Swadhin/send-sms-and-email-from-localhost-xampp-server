<?php
/*প্রথমে আপনার সুবিধে মত করে ডেটাবেজ হতে ডেটা নিন এখানে mysqli ব্যবহার করে mysql/mariadb ডেটাবেজ হতে ডেটা
 নিয়ে দেখানো হলো তবে চাইলে লুপের মধ্যে সেন্ড এর কোড দিয়ে একাধিক অথবা ডাইনামিক ভাবেও এসএমএস প্রেরন করা যাবে ।
 তবে এভাবে ডাইনামিক প্রেরন না করে many to many পদ্ধতি ব্যবহার করুন যা এর পরবর্তি মেনুতে দেখানো হয়েছে । এটি
 স্ট্যাটিক
 এসএমএস এর জন্য বেস্ট যেমন আপনার ডেটাবেজে ১০০ নাম্বার আছে তাদের সবাইকে একটি সেম ম্যাসেজ (নোটিশ, মার্কেটিং
 ইত্যাদি) দিতে চান এক্ষেত্রে ডেটাবেজ থেকে আপনি সব নাম্বার একবারে নিয়ে কমা সেপারেট ফরম্যাটে সাজিয়ে একটি রিকোয়েস্টের
 মাধ্যমে সব এসএমএস প্রেরন করা যাবে ।*/

$dblink = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');

/* If connection fails throw an error */
if (mysqli_connect_errno()) {
    echo "Could  not connect to database: Error: ".mysqli_connect_error();
    exit();
}
$sqlquery = "SELECT phone FROM send_mail_from_all_database_user";
$to = '';//null
if ($result = mysqli_query($dblink, $sqlquery)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        $number = $row["phone"];
        $to = "$number,$to";
    }
}

// আমরা $to তে সব নাম্বার কমা সেপারেট করা অবস্থায় পেয়েছি এবার এসএমএস প্রেরন করুন
$token = "925ab503af9227129c14e86e210bac46";
$message = "Test SMS From Using API Hi Dosto kemon aso, my name swadhin";

$url = "http://api.greenweb.com.bd/api2.php";

$data= array(
    'to'=>"$to",
    'message'=>"$message",
    'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
echo $smsresult;

//Error Display
echo curl_error($ch);




