<?php

require '../model/Account.php';
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
		session_start();
		$acc = new Account;
		$result = $acc->getUserInfo($username, $password);
		if($result['id'] == $username && $result['password'] == $password)
		{
			if($result['role'] == 'GV')
			{
				$_SESSION['user_id'] = $result['id'];
				$_SESSION['user_role'] = $result['role'];
				header('location: ./views/teacher/teacher.php');
				exit();
			}
			elseif ($result['role'] == 'HS') {
				$_SESSION['user_id'] = $result['id'];
				$_SESSION['user_role'] = $result['role'];
				header('location: ./views/student/student.php');
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
		if (!empty($_SESSION))
		{
			if ($_SESSION['user_role'] == 'GV')
			{
				header('location: ../views/student/student.php');
				die();
			}
			elseif ($_SESSION['user_role'] == 'HS') {
				header('location: ../views/teacher/teacher.php');
				die();
			}
		}
		// else
		// {
		// 	header('location: index.php'); 
		// 	die();
		// }
		
		
		
	}
}

?>



