<?php
require_once 'db_connection.php';

function SingleQuery($queri)
{
	$conn = OpenCon();
	
	
	if($conn->query($queri) === TRUE)
	{
		CloseCon($conn);
		return true;
	}
	else
	{
		return $conn->error;
	}

}

function selectdata($sql)
{
  $conn = OpenCon();
  
  $result = $conn->query($sql);
  if($result)
  {
    if($result->num_rows > 0)
    {
      return $result;
    }
    else
    {
      return "zero";
    }
  }
  else
  {
    return $result->error;
  }
}

function UpdateQuery($column,$value,$id)
{
$conn = OpenCon();
$query = $conn->prepare("UPDATE AddressBook SET $column = ? WHERE id = ?");
$query->bind_param("si",$value,$id);
if($query->execute())
{
CloseCon($conn);
return true;
}
else
{
return $conn->error;
}
}

?>