<?php
$conn = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');
if (!$conn) {
    die("Do not connected" . mysqli_error());
}

if (isset($_POST['sent_ck_submit'])){
    $recv_array = $_POST['check_data'];
    $all_select_id = implode(',', $recv_array);

    //echo  $all_select_id;
    //$query = "select * from send_mail_from_all_database_user where id = '$all_select_id'";// for single string
    $query = "select * from send_mail_from_all_database_user where id in ($all_select_id)";//for multi data or array
    $final_mail_query  = mysqli_query($conn, $query);
    $to = '';
    if ($final_mail_query == true){
        while ($rows = mysqli_fetch_assoc($final_mail_query)){
            //echo $rows['phone'];
            $number = $rows["phone"];
            $to = "$number,$to";

            //only email
            $final_email_selected_sent_to = $rows['email'];
            $subject = "Check mail Composer dependencies for the";
            $body = "as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer!as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer!as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer! ";
            $headers = "From: selimrezaswadhin@gmail.com";


            if (mail($final_email_selected_sent_to, $subject, $body, $headers)) {
                echo " Email successfully sent to " . $final_email_selected_sent_to . "<br>";
            } else {
                echo " Email sending failed " . $final_email_selected_sent_to . "<br>";
            }
        }

        //only phone number
        $token = "925ab503af9227129c14e86e210bac46";
        $message = "Test SMS From Using API Hi Dosto kemon aso, my name is swadhin";

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



    }else{
        echo "Query not true";
    }
}
