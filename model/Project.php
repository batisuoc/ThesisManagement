<?php

class Project extends Database
{
	function __construct()
	{
		parent::__construct();
	}

	function insertProject($subj_id, $proj_name, $goal, $quantity)
	{
		settype($quantity, "int");
		$sql = "INSERT INTO project(name,goal,numofstudent,status,subject_id) VALUES ('$proj_name','$goal',$quantity,0,'$subj_id')";
		if($this->conn->query($sql) == true)
		{
			// echo "Records inserted successfully.";
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. ";
		}
		// $this->conn->close();
	}

	function getProjectId($proj_name, $subj_id)
	{
		$proj_name = $this->conn->escape_string($proj_name);
		$subj_id = $this->conn->escape_string($subj_id);
		$sql= "SELECT id FROM project WHERE name='$proj_name' and subject_id='$subj_id'";
		$result = $this->conn->query($sql);
		$this->conn->close();
		if ($result->num_rows == 0) return FALSE;
		else return $result->fetch_assoc();
	}
}

?>