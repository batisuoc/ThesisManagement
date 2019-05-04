<?php
session_start();

// error_reporting(0);
$p = $_GET['p'];

require_once ('controller/StudentController.php');
$studentCtrler = new StudentController;

if (isset($_POST['submit'])) 
{
	$studentCtrler->addStudentProject($_SESSION['user_id'], $_POST['subject_id'], $_POST['projectName'], $_POST['projecGoals'], $_POST['projecQuantity'], 0);
}

if (isset($_POST['regisProject'])) 
{
	$resutlInsert = $studentCtrler->regisProject($_SESSION['user_id'], $_POST['projectID']);
	if ($resutlInsert) 
	{
		echo '<script language="javascript">';
		echo 'alert("Đăng kí đồ án thành công !!!")';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Đăng kí thất bại .")';
		echo '</script>';
	}
}

if(empty($_SESSION))
{
	header("location: index.php");
	die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Đăng ký Đồ Án</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/row.css" rel="stylesheet">
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="student.php">Trang Chủ</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"><?= $_SESSION['user_id'] ?></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="controller/logout.php">Đăng xuất</a>
					</li>
				</ul>
			</div>
			<!-- collapse navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<!-- .container -->
	<div class="container">
		<!-- .row -->
		<div class="row">
			<div class="col-lg-3">
				<h1 class="my-4">Sinh Viên</h1>
				<div class="list-group">
					<a href="#" class="list-group-item">Thông Tin Sinh Viên</a>
					<a href="?p=listDSMonHoc" class="list-group-item">Danh Sách Môn Học</a>
				</div>
			</div>
			<!-- /.col-lg-3 -->

			<!-- .col-lg-9 -->
			<div class="col-lg-9">
				<?php
				switch ($p) {
					case 'listDSMonHoc':
						require 'views/student/listSubject.php';
						break;
					case 'menuMonHoc':
						require 'views/student/subjectOption.php';
						break;
					case 'dexuatDoAn':
						require 'views/student/subjectProposeForm.php';
						break;
					case 'dangkiDoAn':
						require 'views/student/regisProject.php';
						break;
					case 'dsDoAnDK':
						require 'views/student/RegisteredProject.php';
						break;
					default:
						require 'views/student/dashboard.php';
						break;
				}
				?>
			</div>
			<!-- / .col-lg-9 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="footer py-3 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; DoNgocKhaiTrinhHangUoc 2019</p>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>