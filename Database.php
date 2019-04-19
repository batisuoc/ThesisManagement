<?php 
class Database{
	private $conn;
	private $result;
	public function Database(){
		$this -> conn = new MySQLi('localhost','root','','qlsp');
	}
	public function select($sql){
		$this -> result = $this -> conn -> query($sql);
		return $this -> result;
	}
	public function exec($sql){
		$this -> result = $this -> conn -> query($sql);
	}
}
?>