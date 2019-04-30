<?php

require_once ('model/Subject.php');
require_once ('model/Project.php');

class TeacherController
{
	private $subject;
	private $project;

	function __construct()
	{
		$this->subject = new Subject;
		$this->project = new Project;
	}

	function getListSubject($teacher_id)
	{
		return $this->subject->getTeacherListSubject($teacher_id);
	}

	function getListProject($teacher_id, $subject_id)
	{
		return $this->project->getTeacherProjects($teacher_id, $subject_id);
	}
}

?>