<div class="container">
  <div class="row">
    <?php $result = $teacherCtrler->getListSubject($_SESSION['user_id']); ?>
    <?php while ( $rowLT = $result->fetch_assoc() ) { ?>
      <div class="col-md-4" id="container1">
        <div class="write">
          <a href="?p=menuMonHoc&id=<?= $rowLT['id'] ?>&name=<?= $rowLT['name'] ?>">
            <img src="images\hinh1.png" class="topdev" >
            <p class="write-text"><?= $rowLT['name'] ?></p>
          </a>
        </div>
      </div>
    <?php } ?> 
  </div>
</div>