<?php
// session_start();
require_once 'model/Account.php';
/**
 * 
 */
class LoginController extends Account
{
	function __construct()
	{
		
	}

	function loginFunction($username, $password)
	{
		$acc = new Account;
		$result = $acc->getUserInfo($username, $password);
		if($result['id'] == $username && $result['password'] == $password)
		{
			if($result['role'] == 'GV')
			{
				$_SESSION['user_id'] = $result['id'];
				$_SESSION['user_role'] = $result['role'];
				header('location: ./views/teacher.php');
				exit();
			}
			else if ($result['role'] == 'HS') {
				$_SESSION['user_id'] = $result['id'];
				$_SESSION['user_role'] = $result['role'];
				header('location: ./views/student.php');
				exit();
			}
		}
		else
		{
			header('location: index.php');
			exit();
		}
	}

	function checkLogin()
	{
		if (!empty($_SESSION['user_id']))
		{
			if ($_SESSION['user_role'] == 'GV')
			{
				header('location: ./views/teacher.php');
				die();
			}
			else if ($_SESSION['user_role'] == 'HS') {
				header('location: ./views/student.php');
				die();
			}
		}
	}
}

?>



