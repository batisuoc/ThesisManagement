<?php

class Project extends Database
{
	function __construct()
	{
		parent::__construct();
	}

	function insertProject($subj_id, $proj_name, $goal, $quantity, $status)
	{
		$status = ($status == 1) ? 1 : 0;
		settype($quantity, "int");
		settype($status, "int");
		$sql = "INSERT INTO project(name,goal,numofstudent,status,subject_id) VALUES ('$proj_name','$goal',$quantity,$status,'$subj_id')";
		if($this->conn->query($sql) == true)
		{
			return true;
		} 
		else
		{
			return false;
		}
	}

	function updateProjectStatus($proj_id)
	{
		settype($proj_id, "int");
		$sql = "UPDATE project
				SET project.status = 1
				WHERE project.id = $proj_id";
		if ($this->conn->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function updateProject($proj_id, $proj_name, $proj_goal, $proj_num)
	{
		// echo $proj_id;
		settype($proj_id, "int");
		settype($proj_num, "int");
		$sql = "UPDATE project
				SET project.name = '$proj_name', project.goal = '$proj_goal', project.numofstudent = $proj_num
				WHERE project.id = $proj_id";
		if ($this->conn->query($sql)) 
		{
			return true;
		}
		else
		{
			return false;
		}
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

	function getListProject($subj_id)
	{
		$subj_id = $this->conn->escape_string($subj_id);
		$sql = "SELECT project.id, project.name, project.goal, project.numofstudent
				FROM project
				WHERE project.subject_id = '$subj_id' AND project.status = 1";
		$result = $this->conn->query($sql);
		if ($result->num_rows == 0) return FALSE;
		else return $result;
	}

	function getStudentProjectInfo($userid, $subj_id)
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

	function getTeacherProjects($teacher_id, $subject_id, $status)
	{
		$status = ($status == 1) ? 1 : 0;
		$teacher_id = $this->conn->escape_string($teacher_id);
		$subject_id = $this->conn->escape_string($subject_id);
		$sql = "SELECT project.id, project.name, project.goal, project.numofstudent, project.status, student.id AS std_id, student.name AS std_name
				FROM (((student INNER JOIN student_project ON student.id = student_project.student_id)
				INNER JOIN project ON student_project.project_id = project.id) 
				INNER JOIN subject ON project.subject_id = subject.id)
				INNER JOIN teacher ON subject.teacher_id = teacher.id
				WHERE subject.id = '$subject_id' AND teacher.id = '$teacher_id' AND project.status = $status";
		$result = $this->conn->query($sql);
		if ($result->num_rows == 0) return FALSE;
		else return $result;
	}
}

?>