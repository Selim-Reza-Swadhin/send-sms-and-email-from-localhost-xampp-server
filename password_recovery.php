<form action="" method="post">
    Recover password : <input type="email" name="email" id="" placeholder="Enter your email">
    <input type="submit" name="rec_submit" value="Recover">
</form>

<?php
if (isset($_POST['rec_submit'])){
    $to_mail = $_POST['email'];
    $conn = mysqli_connect('localhost', 'root', '', 'localhost_send_mail');
    $query = "select * from send_mail_from_all_database_user where email= '$to_mail'";
    $result  = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);

    if ($count > 0){
        while ($rows = mysqli_fetch_assoc($result)){
            //$pass_recovery = $rows['password'];
            
            $pass_recovery = $rows['password'];

            $subject = "Password Recovery. ";
            $body = "Your password is $pass_recovery";
            $headers = "From: selimrezaswadhin@gmail.com";
            //$headers = "From: selimrezaswadhinndfr@gmail.com";//server default set email

            if (mail($to_mail, $subject, $body, $headers)) {
                echo " Email successfully sent to " . $to_mail . "<br>";
            } else {
                echo " Email sending failed " . $to_mail . "<br>";
            }
        }
    }

}
