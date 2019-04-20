<?php 

require_once 'database/config.php';

class Database {
	protected $conn;

	function __construct()
	{
		$this->conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
		$this->conn->set_charset("utf8");
	}
}
?>