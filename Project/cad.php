<?php
	function ExecuteQuery($sql, $name){
		$conn = OpenCon();
		
		if($conn->query($sql) === TRUE){
			return $name;
		} else {
			$error = "Error creating table: ".$conn ->error;
			CloseCon($conn);
			return $error;
		}
	}
	
	function ModifyColumn($table,$columnname,$datatype) {
	$query = "ALTER TABLE ". $table."
	MODIFY COLUMN ". $columnname ." ".$datatype;
	
	$result = ExecuteQuery($query,"Column successfully modified");
	return $result;
	
	}
	
	function AddColumn($table,$columnname,$datatype) {
	$query = "ALTER TABLE ". $table."
	ADD ". $columnname ." ".$datatype;
	
	$result = ExecuteQuery($query,"Column Added successfully");
	return $result;
	
	}
	
	function DropColumn($table,$columnname) {
	$query = "ALTER TABLE ". $table."
	DROP COLUMN ". $columnname;
  
	$result = ExecuteQuery($query,"Column deleted successfully");
	return $result;
  
	}
  
	function DropTable($table) {
	$query = "DROP TABLE ". $table;
  
	$result = ExecuteQuery($query,"Table deleted successfully");
	return $result;
	}
?>