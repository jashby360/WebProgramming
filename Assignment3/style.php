<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Assignment 3</title>
</head>
<body>
<?php
	$color = $_POST["color"];
	if($_POST["font"] == "times"){
		$font = "Times New Roman";
	} else if($_POST["font"] == "courier"){
		$font = "Courier New";
	} else if($_POST["font"] == "arial") {
		$font = "Arial Verdana";
	}
	//Include more else if statements if more options are being added to font types
	//Include '||' symbols in the else if when taking into acount specific nicknames
	//of font types
	
	$size = $_POST["size"];
	$align = $_POST["align"];
	
	
	
?>
	<p style="color:<?=$color?>;font-family:<?=$font?>; text-align:<?=$align?>; font-size:<?=$size?>">
	<?php
		$text = $_POST["text"];
		echo $text;
	?>
	</p>
	<br>
</body>
</html>