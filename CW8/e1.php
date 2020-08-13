<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 1</title>
</head>
<body>
<h1>Hello World using PHP</h1>
	<p> Say hello world: 
		<?php
		function hello_world() {
			$text = "Hello World";
			echo $text;
		}
		
		hello_world();
		?>
	</p>
</body>
</html>