<div id="listMonHoc" class="container">
  <div class="row">
    <?php $result = $studentCtrler->getListSubjectUser($_SESSION['user_id']); ?>
    <!-- card -->
    <?php while ( $rowLT = $result->fetch_assoc() ) { ?>
      <div class="col-md-4" id="container1">
        <div class="write">
          <a href="?p=menuMonHoc&idSubject=<?= $rowLT['subj_id'] ?>&subjectName=<?= $rowLT['name'] ?>">
            <img src="images/hinh1.png" class="topdev">
            <p class="write-text"><?= $rowLT['name'] ?></p>
          </a>
        </div>
      </div>
    <?php } ?>
    <!-- card -->
  </div>
</div>
