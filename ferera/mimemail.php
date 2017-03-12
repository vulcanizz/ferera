<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
</head>
<body>
<?php

	require_once("mimemail.inc.php");

	$mail = new MIMEMAIL("HTML"); // HTML Format

	$mail->senderName = "Mr.Weerachai Nukitram";
	$mail->senderMail = "webmaster@thaicreate.com";
	$mail->cc = "Mr.Surachai Sirisart<srachai@thaicreate.com>";
	$mail->bcc = "webmaster@thaicreate.com";

	$mail->subject = "Test Send Mail";

	$mail->body = "My Body & <b>My Description</b>"; // OR: $mail->body = "path_to_file/filename";

	$mail->attachment[] = "thaicreate1.txt";
	$mail->attachment[] = "thaicreate2.txt";

	$mail->create();
	//*** To ***//
	$mail->send("yulgang_864@hotmail.com");
	$mail->send("yulgang_864@hotmail.com,constubb1412@gmail.com,yulgang_864@hotmail.com");
	echo "Email Sending.";
?>
</body>
</html>
