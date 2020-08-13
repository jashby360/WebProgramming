<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 3</title>
</head>
<body>
<h1>Word Count</h1>
	<p> Number of words: 
		<?php
		
		function wordCount($str){
			echo str_word_count($str);
		}
		
		wordCount("hello, how are you?");
		?>
	</p>
</body>
</html>