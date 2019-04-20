<?php
	require_once("Phone_Model.php");
	class phone_controller{
		private $model;
		public function phone_controller(){
			$this -> model = new Phone_Model();
		}
		public function getAllRow(){
			return $this->model->getList();
		}
	}
?>