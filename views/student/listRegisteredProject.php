<?php 

$projectInfo = $studentCtrler->getProjectInfo($_SESSION['user_id'], $_GET['idSubj']);
$status = ($projectInfo['status'] == 1) ? "Đã duyệt" : "Chưa duyệt"

?>

<div id="DoAnDaDangKi">
  <form>
    <div class="form-group">
      <h3><?=$_GET['nameSubj']?></h3>
    </div>
    <div class="form-group">
      <label for="name">Tên Đồ Án</label>
      <input type="name" class="form-control" name="projectName" id="name" value="<?= $projectInfo['name'] ?>" readonly>
    </div>
    <div class="form-group">
      <label for="goal">Mục tiêu</label>
      <textarea class="form-control" rows="6" name="projecGoals" id="goal" readonly><?= $projectInfo['goal'] ?></textarea>
    </div>
    <div class="form-group">
      <label>Tình trạng</label>
      <input type="text" class="form-control" name="projectStatus" id="status" value="<?= $status ?>" readonly>
    </div>
    <div class="form-group">
      <label>Những sinh viên cùng đề tài</label>
    </div>
    <input type="hidden" name="subject_id" value="<?=$subject_id?>">
  </form>
</div>