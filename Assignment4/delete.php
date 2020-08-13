<!--Creates table for the AddressBook-->
<?php
	include 'db_connection.php';
	include 'cad.php';
	
	$sql = "CREATE TABLE IF NOT EXISTS AddressBook(id INT AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL, 
	address VARCHAR(30) NOT NULL,
	phonenumber VARCHAR(8) NOT NULL,
	email VARCHAR(30) NOT NULL,
	alt_address VARCHAR(30) NOT NULL)";
	
	$result = ExecuteQuery($sql,"Table Created Successfully");
	echo $result;
	
?>

<!--Deletes a query based on provided first name-->
<?php
	include 'crud.php';
	$fname = $_POST["fname"];

	$sql = "DELETE FROM AddressBook WHERE firstname = '$fname'";
	$result2 = SingleQuery($sql);
	if($result2 === true)
	{
		echo '<br>'.'Successfully Deleted Address'.'<br>';
  
	}
	else
	{
		echo $result2;
	}

?>
<a href ="index.html">GO HOME</a>