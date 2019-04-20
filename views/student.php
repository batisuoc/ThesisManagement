<?php
session_start();
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

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Sinh Viên</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Thông Tin Sinh Viên</a>
          <a href="#" class="list-group-item" onclick="document.getElementById('carouselExampleIndicators').innerHTML=document.getElementById('listMonHoc').innerHTML;">Danh Sách Môn Học</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/hinh5.png" style=" width : 900px;
              height:350px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/hinh7.png" style=" width : 900px;
              height:350px;" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/hinh3.png" style=" width : 900px;
              height:350px;" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- /.col-lg-9 -->
      
      <!-- List mon hoc -->
      <div id="listMonHoc" class="container" style="visibility:hidden;">
        <div class="row">
          <!-- card -->
          <div class="col-md-4" id="container1">
            <div class="write">
              <a href="#" onclick="document.getElementById('carouselExampleIndicators').innerHTML=document.getElementById('optionMonHoc').innerHTML;">
                <img src="../images/hinh1.png" class="topdev">
                <p class="write-text" >Môn Học</p>
              </a>
            </div>
          </div>
          <!-- card -->
        </div>
      </div>
      <!-- / List mon hoc -->

      <!-- Option mon hoc -->
      <div class="container" id="optionMonHoc" style="visibility:hidden;">
        <div class="row">
          <div class="col-md-4" id="container1">
            <div class = "write">
              <a href="Luachon.php"><img src="../images/hinh1.png" class="topdev" >
                <p class = "write-text">Đăng Ký Đồ Án</p>
              </a>
            </div>
          </div>
          <div class="col-md-4" id="container1">
            <div class = "write">
              <a href="DanhSach.php"><img src="../images/hinh1.png"class = "topdev" >
                <p class = "write-text">Xem Danh Sách Đồ Án Đã Đăng Ký</p>
              </a>
            </div>
          </div>
          <div class="col-md-4" id="container1">
            <div class = "write">
              <a href="Dexuat.php"><img src="../images/hinh1.png"class = "topdev" >
                <p class = "write-text">Đề xuất đồ án</p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- / Option mon hoc -->

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