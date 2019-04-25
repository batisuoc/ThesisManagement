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
		if ($result->num_rows == 0) return FALSE;
		else return $result->fetch_assoc();
	}
}

?>