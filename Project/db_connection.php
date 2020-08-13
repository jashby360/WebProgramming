<?php
	//Change the connection to whatever is necessary for your system. This is just a local databasse to test the project.
	//ex: $user =jashby3, $pass=jashby3, $db=jashby3
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