<?php
$conn = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');
if (!$conn) {
    die("Do not connected" . mysqli_error());
}
$query = "select * from send_mail_from_all_database_user";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        //echo $rows['email'];
        //exit();

        $to_email = $rows['email'];
        $subject = "Swadhin Composer dependencies for the";
        $body = "as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer!as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer!as well as the Composer dependencies for the services you wish to authenticate with. Really, it's much easier to use Composer! ";
        $headers = "From: selimrezaswadhin@gmail.com";


        if (mail($to_email, $subject, $body, $headers)) {
            echo " Email successfully sent to " . $to_email . "<br>";
        } else {
            echo " Email sending failed " . $to_email . "<br>";
        }

    }
}


?>





