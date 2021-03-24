<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>mail send</title>
</head>
<body style='margin-left:200px; margin-top:100px'>
<br />
	<form action="send-code.php" method="POST">
	To:
	<input type="email" name="mail_to" /> <br />
	Subject:
	<input type="text" name="mail_sub" /> <br />
	Message:
	<input type="text" name="mail_msg" /> <br />
	Send:
	<input type="submit" name="Send" />
	</form>
</body>
</html>