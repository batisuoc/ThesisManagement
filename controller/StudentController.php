<?php

require_once ('model/Subject.php');
require_once ('model/Project.php');
require_once ('model/Student.php');

class StudentController extends Subject
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

	function addStudentProject($userid, $subj_id, $proj_name, $goal, $quantity)
	{
		$this->project->insertProject($subj_id, $proj_name, $goal, $quantity);
		$result = $this->project->getProjectId($proj_name, $subj_id);
		$this->student->insertStudentProject($userid, $result['id']);
	}

	function getProjectInfo($userid, $subj_id)
	{
		return $this->project->getProjectInfo($userid, $subj_id);
	}
}

?>