<?php
if (isset($_REQUEST['email_submit'])) //if email is filled out, send email
{
    //send email
    $email = $_REQUEST['email'];
    $me = $_REQUEST['me_send'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    mail("$email", "Subject: $subject", $message, "From : $me");
    echo "<h3 style='background-color: green; color: aliceblue; text-align: center'>Thank you for using our mail form <span style='color: greenyellow'>$me</span></h3>";

} else{
    //if email is filled out, send email
    echo "<h3 style='background-color: green; color: red; text-align: center'>not send</h3>";
}
?>

<form action='' method='post'>
    To : <input type='email' name='email'/><br><br>
    From : <input type='email' name='me_send'/><br><br>
    Subject : <input type='text' name='subject'/><br><br>
    Message :<br>
    <textarea name='message' id='' cols='30' rows='10'></textarea><br><br>
    <input name='email_submit' type='submit'/>

</form>
