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

	function getProjectInfo($userid, $subj_id)
	{
		$userid = $this->conn->escape_string($userid);
		$subj_id = $this->conn->escape_string($subj_id);
		$sql = "SELECT project.name, project.goal, project.status
				FROM project, student_project
				WHERE project.id = student_project.project_id AND project.subject_id = '$subj_id' AND student_project.student_id = '$userid'";
		$result = $this->conn->query($sql);
		$this->conn->close();
		if ($result->num_rows == 0) return FALSE;
		else return $result->fetch_assoc();
	}

	function getTeacherProjects($teacher_id, $subject_id)
	{
		$teacher_id = $this->conn->escape_string($teacher_id);
		$subject_id = $this->conn->escape_string($subject_id);
		$sql = "SELECT project.name, project.goal, project.numofstudent, project.status 
				FROM (project INNER JOIN subject ON project.subject_id = subject.id) INNER JOIN teacher ON subject.teacher_id = teacher.id 
				WHERE subject.id = '$subject_id' AND teacher.id = '$teacher_id'";
		$result = $this->conn->query($sql);
		if ($result->num_rows == 0) return FALSE;
		else return $result;
	}
}

?>