<?php

class Student extends Database
{
	function __construct()
	{
		parent::__construct();
	}

	function getStudentInfo($userid)
	{
		$username = $this->conn->escape_string($userid);
		$sql= "SELECT * FROM student WHERE id='$username'";
		$result = $this->conn->query($sql);
		$this->conn->close();
		if ($result->num_rows == 0) return FALSE;
		else return $result->fetch_assoc();
	}

	function insertStudentProject($userid, $proj_id)
	{
		settype($proj_id, "int");
		$sql = "INSERT INTO student_project VALUES ('$userid',$proj_id)";
		if($this->conn->query($sql) == true)
		{
			// echo "Records inserted successfully.";
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. ";
		}
		$this->conn->close();
	}
}

?>