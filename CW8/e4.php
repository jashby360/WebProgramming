<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP, Example 4</title>
</head>
<body>
<h1>Word Count</h1>
	<p><h3>Letter appearance: </h3>
		<?php
		//counts the number of times a certain letter appears in a string
		function count_words($str){
			$str = str_replace(' ','', $str);
			$arr = str_split($str);
			
			$rep = array_count_values($arr);
			
			foreach ($rep as $key => $value){
				echo $key." appears ".$value.' times '.'<br>';
			}
		}
		
		count_words("hello, how how are you?");
		?>
	</p>
	<p>
		<h3>Count specific number of word occurence irrespective of upper and lower:</h3>
		<?php
		//counts the number of words that appear in the string ignoring the distinction between upper and lower case
		function count_words2($word,$string){
			preg_match_all("/$word/i",$string,$matches);
			
			return count($matches, COUNT_RECURSIVE) -1;
		}
		$string = 'Today, is a good day ToDay.';
		$word ='today';
		echo count_words2('is', 'Today, is a good day ToDay.');
		?>
	</p>
</body>
</html>