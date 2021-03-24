<?php
$conn = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');
if (!$conn) {
    die("Do not connected" . mysqli_error());
}

if (isset($_POST['sent_ck_submit'])){
    $recv_array = $_POST['check_data'];
    $all_select_id = implode(',', $recv_array);

    //echo  $all_select_id;
    //$query = "select * from send_mail_from_all_database_user where id = $all_select_id";// for single string
    $query = "select * from send_mail_from_all_database_user where id in ($all_select_id)";//for multi data or array
    $final_mail_query  = mysqli_query($conn, $query);
    if ($final_mail_query == true){
        while ($rows = mysqli_fetch_assoc($final_mail_query)){
            //echo $rows['email'];

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
    }else{
        echo "Query not true";
    }
}
