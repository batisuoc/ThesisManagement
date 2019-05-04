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
		$userid = $this->conn->escape_string($userid);
		settype($proj_id, "int");
		$sql = "INSERT INTO student_project VALUES ('$userid',$proj_id)";
		if($this->conn->query($sql) == true)
		{
			return true;
		} 
		else
		{
			return false;
		}
		$this->conn->close();
	}

}

?>