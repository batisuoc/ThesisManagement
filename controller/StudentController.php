<?php

require_once ('model/Subject.php');
require_once ('model/Project.php');
require_once ('model/Student.php');

class StudentController
{
	private $subject;
	private $project;
	private $student;

	function __construct()
	{
		$this->subject = new Subject;
		$this->project = new Project;
		$this->student = new Student;
	}

	function getListSubjectUser($userid)
	{
		return $this->subject->getListSubject($userid);
	}

	function addStudentProject($userid, $subj_id, $proj_name, $goal, $quantity, $status)
	{
		$this->project->insertProject($subj_id, $proj_name, $goal, $quantity, $status);
		$result = $this->project->getProjectId($proj_name, $subj_id);
		$this->student->insertStudentProject($userid, $result['id']);
	}

	function getProjectInfo($userid, $subj_id)
	{
		return $this->project->getStudentProjectInfo($userid, $subj_id);
	}

	function getListProject($subj_id)
	{
		return $this->project->getListProject($subj_id);
	}

	function regisProject($student_id, $project_id)
	{
		return $this->student->insertStudentProject($student_id, $project_id);
	}
}

?>