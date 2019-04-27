<?php

include 'Database.php';

class Subject extends Database
{
	function __construct()
	{
		parent::__construct();
	}

	function getListSubject($userid)
	{
		$username = $this->conn->escape_string($userid);
		$sql= "SELECT student.id, subject.id AS subj_id, subject.name FROM ((student INNER JOIN student_subject ON student.id = student_subject.student_id)INNER JOIN subject ON student_subject.subject_id = subject.id) WHERE student.id = '$username'";
		$kq = $this->conn->query($sql);
		$this->conn->close();
		if (!$kq) echo "Query Error";
		else return $kq;
	}
}

?>