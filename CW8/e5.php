<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 5</title>
</head>
<body>
<p>
Welcome, 
<?php
	echo $_POST["name"];
?><br>
Your age is:
<?php
	echo $_POST["age"];
?><br>
Your education background includes: 
<?php
	echo $_POST["edu"];
?><br>
Your email is:
<?php
	echo $_POST["email"];
?><br>
Your phone number is:
<?php
	echo $_POST["phone"];
?><br>
Your address is:
<?php
	echo $_POST["address"];
?>
</p>
</body>
</html>