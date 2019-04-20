<?php

include 'Database.php';

class Account extends Database
{
	protected $db;

	function __construct()
	{
		parent::__construct();
	}

	function printTest()
	{
		echo "Print duoc kia may";
	}

	function getUserInfo($userid, $pass)
	{
		$username = $this->conn->escape_string($userid);
		$password = $this->conn->escape_string($pass);
		$sql= "SELECT * FROM account WHERE id='$username' AND password ='$password'";
		$kq = $this->conn->query($sql);
		if ($kq->num_rows == 0) return FALSE;
		else return $kq->fetch_assoc();
	}
}

?>