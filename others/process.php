<?php
	//Get values passs from form in login.php
	$username = $_POST['username'];
	$password = $_POST['password'];
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'project_management');
 
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($link,$username);
	$password = mysqli_real_escape_string($link,$password);

	//Query the databse for user

	$result = mysqli_query($link,"select * from account where id = '$username' and 
		password = '$password'") or die("Failed to query database".mysql_error());
	$row = mysqli_fetch_array($result);
	if($row['id'] == $username && $row['password'] == $password)
	{
		header('Location: index.php');
		exit;
	}else{
		header('Location: index.html');
	}
?>
 