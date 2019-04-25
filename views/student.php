<?php
session_start();
$p = $_GET['p'];

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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">
  <link href="../css/row.css" rel="stylesheet">

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
            <a class="nav-link" href="../controller/logout.php">Đăng xuất</a>
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
            require 'student/listSubject.php';
            break;
          case 'menuMonHoc':
            require 'student/subjectOption.php';
            break;
          case 'dexuatDoAn':
            require 'student/subjectProposeForm.php';
            break;
          case 'dangkiDoAn':
            require 'student/regisProject.php';
            break;
          case 'dsDoAnDK':
            require 'student/listRegisteredProject.php';
            break;
          default:
            require 'student/dashboard.php';
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
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DoNgocKhaiTrinhHangUoc 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>