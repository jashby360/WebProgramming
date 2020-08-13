<?php
	include 'crud.php';
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$fname2 = $_POST["fname2"];
	$lname2 = $_POST["lname2"];
	$address2 = $_POST["address2"];
	$pnum2 = $_POST["pnum2"];
	$email2 = $_POST["email2"];
	$altad2 = $_POST["altad2"];
	
	$sql = "UPDATE AddressBook SET firstname = '$fname2', lastname = '$lname2',
	address = '$address2' ,phonenumber = '$pnum2',email='$email2', alt_address='$altad2' WHERE firstname = '$fname' AND lastname = '$lname'";
	$result2 = SingleQuery($sql);
	if($result2 === true)
	{
		echo '<br>'.'Successfully Updated Information'.'<br>';
  
	}
	else
	{
		echo $result2;
	}
?>
<a href ="index.html">GO HOME</a>