<!--Creates table for the AddressBook-->
<?php
	include 'db_connection.php';
	include 'cad.php';
	
	$sql = "CREATE TABLE IF NOT EXISTS AddressBook(id INT AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL, 
	address VARCHAR(30) NOT NULL,
	phonenumber VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	alt_address VARCHAR(30) NOT NULL)";
	
	$result = ExecuteQuery($sql,"Table Created Successfully");
	echo $result;
	
?>
<!--Insert addresses into the address book-->
<?php
	include 'crud.php';
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$address = $_POST["address"];
	$pnumber = $_POST["pnumber"];
	$email = $_POST["email"];
	$altaddress = $_POST["altaddress"];
	
	$sql = "INSERT INTO AddressBook(firstname,lastname,address,phonenumber,email,alt_address) VALUES ('$fname','$lname','$address',
	'$pnumber','$email','$altaddress')";
	$result2 = SingleQuery($sql);
	if($result2 === true)
	{
		echo '<br>'.'Successfully Stored Address'.'<br>';
  
	}
	else
	{
		echo $result2;
	}
?>
<a href ="index.html">GO HOME</a>