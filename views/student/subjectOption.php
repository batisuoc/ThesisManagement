<?php 

$idSubject = $_GET['idSubject'];
$nameSubject = $_GET['subjectName'];

?>
<div class="container" id="optionMonHoc">
  <h3><?= $nameSubject ?></h3>
  <div class="row">
    <div class="col-md-4" id="container1">
      <div class = "write">
        <a href="?p=dangkiDoAn&idSubj=<?=$idSubject?>&nameSubj=<?=$nameSubject?>">
          <img src="images/hinh1.png" class="topdev" >
          <p class = "write-text">Đăng Ký Đồ Án</p>
        </a>
      </div>
    </div>
    <div class="col-md-4" id="container1">
      <div class="write">
        <a href="?p=dsDoAnDK&idSubj=<?=$idSubject?>&nameSubj=<?=$nameSubject?>">
          <img src="images/hinh1.png" class="topdev" >
          <p class = "write-text">Đồ Án Đã Đăng Ký</p>
        </a>
      </div>
    </div>
    <div class="col-md-4" id="container1">
      <div class="write">
        <a href="?p=dexuatDoAn&idSubj=<?=$idSubject?>&nameSubj=<?=$nameSubject?>">
          <img src="images/hinh1.png"class = "topdev" >
          <p class = "write-text">Đề xuất đồ án</p>
        </a>
      </div>
    </div>
  </div>
</div>