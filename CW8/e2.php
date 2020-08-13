<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 2</title>
</head>
<body>
<h1>Special Loops, Triangle Pattern</h1>
	<p>
		<?php
		
		function triangle($int){
			for($x = 1;$x<=$int;$x++){
				for($y = 1; $y <= $x;$y++){
					echo "*";
				}
				echo "<br/>";
			}
		}
		
		triangle(5);
		?>
	</p>
</body>
</html>