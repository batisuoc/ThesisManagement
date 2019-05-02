<?php
session_start();

$p = $_GET['p'];

require_once ('controller/TeacherController.php');
$teacherCtrler = new TeacherController;

if(empty($_SESSION))
{
  header("location: index.php");
  die();
}

if (isset($_POST['projectName']) && isset($_POST['projecGoals']) && isset($_POST['numberPeople'])) 
{
  $teacherCtrler->addProject($_POST['subject_id'], $_POST['projectName'], $_POST['projecGoals'], $_POST['numberPeople'], 1);
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
      <a class="navbar-brand" href="index.php">Trang Chủ</a>
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
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <!-- .row -->
    <div class="row">
      <!-- .col-lg-3 -->
      <div class="col-lg-3">
        <h1 class="my-4">Giảng Viên</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Thông Tin Giảng Viên</a>
          <a href="?p=listDSMonHoc" class="list-group-item">Danh Sách Môn Học</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <?php

        switch ($p) {
          case 'listDSMonHoc':
            require 'views/teacher/listTeachingSubject.php';
            break;
          case 'menuMonHoc':
            require 'views/teacher/subjectOption.php';
            break;
          case 'listDoAnDeXuat':
            require 'views/teacher/listProposeProject.php';
            break;
          case 'listDoAnDangKi':
            require 'views/teacher/listRegisteredProject.php';
            break;
          case 'listDoAn':
            require 'views/teacher/listProject.php';
            break;
          case 'createProject':
            require 'views/teacher/createNewProjectForm.php';
            break;
          default:
            require 'views/teacher/dashboard.php';
            break;
        }

        ?>
      </div>
      <!-- /.col-lg-9 -->
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
  <script type="text/javascript">
    $('.click').click(function() {
      // get the contents of the link that was clicked
      var linkText = $(this).text();
      // replace the contents of the div with the link text
      $('#content-container').html(linkText);
      // cancel the default action of the link by returning false
      return false;
    });
  </script>

</body>

</html>