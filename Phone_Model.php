<?php
require_once ("Database.php");
class Phone_Model{
	private $dt;
	public function Phone_Model(){
		$this -> dt = new Database();
	}
	public function getList(){
		$sql = "select * from product";
		return $this -> dt -> select($sql);
	}

}
?>