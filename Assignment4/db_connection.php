<?php

	function OpenCon(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "practice";
	
	$conn = new mysqli($host, $user, $pass, $db) or die("Connection failed: %s\n". 
	$conn -> error);
	
	return $conn;
	}
	
	function CloseCon($conn){
			$conn -> close();
	}
	
?>