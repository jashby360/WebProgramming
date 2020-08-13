<!DOCTYPE html>
<html>
<head> 
	<title>Address Book Entries</title>
	<style type ="text/css">
		table, th, td {
			border: 1px solid black;
		}
		table {
			border-collapse:collapse;
		}
	</style>
</head>
<body>
<br>
<a href ="index.html">GO HOME</a>
<br>
<br>
<table>
 <tr>
  <td> id</td>
 <td> First Name</td>
 <td> Last Name</td>
  <td> Address</td>
  <td> Phone Number</td>
  <td> Email</td>
  <td> Alt_Address</td>
 </tr>
<?php
include 'crud.php';

$sql = "SELECT * FROM `AddressBook`";

$result = selectdata($sql);

if($result != "zero")
{
 
 while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['id']. "</td>";
 echo "<td>" . $row['firstname']. "</td>";
 echo "<td>" . $row['lastname']. "</td>"; 
 echo "<td>" . $row['address']. "</td>";
 echo "<td>" . $row['phonenumber']. "</td>";
 echo "<td>" . $row['email']. "</td>";
 echo "<td>" . $row['alt_address']. "</td>";
 echo "</tr>";

 }
}
else
{
 echo $result;
}
?>
</table>
</body>
</html>