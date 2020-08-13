<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dice Game Comments and Complaints</title>
	<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$comment = $_POST["comment"];
	
	$email_from = "$email";
	$email_subject = "Dice Game Comments and Complaints";
	$email_body = "$comment";
	
	$to = "jashby3@student.gsu.edu";
	$headers = "From: $email_from \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
?>
<h1>Send Email to Developer</h1>
<p><b>This is the page that will display after you submit your comment to the developer, it is currently being sent to the
 developer's email at this moment. Thank you for being patient with us while you are waiting for a reply!</b><br>
</p>
<a href = "dice.html"> Go Back to Original Page</a>
</body>
</html>