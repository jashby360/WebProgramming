<h1>List of players who played this game!</h1>
<?php
	include 'db_connection.php';
	include 'cad.php';
	
	$sql = "CREATE TABLE IF NOT EXISTS DiceVisitors(id INT AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL)";
	
	$result = ExecuteQuery($sql,"Table Created Successfully");
	echo $result;
	
?>
<!--Works in my local host and codd. Now add some HTML AND CSS to this page-->
<?php
	include 'crud.php';
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	
	$sql = "INSERT INTO DiceVisitors(firstname,lastname) VALUES ('$fname','$lname')";
	$result2 = SingleQuery($sql);
	if($result2 === true)
	{
		echo '<br>'.'Successfully Stored Player';
  
	}
	else
	{
		echo $result2;
	}
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Simple Dice Games</title>
	<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
<table>
 <tr>
 <td> id</td>
 <td> First Name</td>
 <td> Last Name</td>
 </tr>
<?php

$sql = "SELECT * FROM `DiceVisitors`";

$result = selectdata($sql);

if($result != "zero")
{
 
 while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['id']. "</td>";
 echo "<td>" . $row['firstname']. "</td>"; 
 echo "<td>" . $row['lastname']. "</td>"; 
 echo "</tr>";

 }
 
 
}
else
{
 echo $result;
}
?>
</table>
<br>
<a href = "dice.html"> Go Back to Original Page</a>
</body>
</html>