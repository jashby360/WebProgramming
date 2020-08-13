<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 6</title>
</head>
<body>
<?php
	$name = $_POST["name"];
	$age = $_POST["age"];
	$edu = $_POST["edu"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	
	$email_from = "WPSummer@cs.gsu.edu";
	$email_subject = "Exercise 6: Form Submission";
	$email_body = "Name: $name\n Age: $age\n Education Background: $edu\n Email: $email\n Phone Number: $phone\n Address: $address";
	
	$to = "jashby3@student.gsu.edu";
	$headers = "From: $email_from \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
?>
<h1>Send Email of Form Information</h1>
<p><b>This is the page that will display after you submit your form, it is currently being sent to your email of choice.</b><br>
<b>Thank you for being patient with us while you are waiting!</b>
</p>
</form>
</body>
</html>