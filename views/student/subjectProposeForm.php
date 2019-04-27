<?php $subject_id = $_GET['idSubj']; ?>
<div id="formDeXuat">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
      <h3><?=$_GET['nameSubj']?></h3>
    </div>
    <div class="form-group">
      <label for="name">Tên Đồ Án</label>
      <input type="name" class="form-control" name="projectName" id="name">
    </div>
    <div class="form-group">
      <label for="goal">Mục tiêu</label>
      <textarea class="form-control" rows="6" name="projecGoals" id="goal"></textarea>
    </div>
    <div class="form-group">
      <label for="number">Số lượng</label>
      <input type="number" class="form-control" name="projecQuantity" id="number">
    </div>
    <div class="form-group">
      <label><input type="checkbox"> Bạn có thật sự muốn đề xuất đồ án ?</label>
    </div>
    <input type="hidden" name="subject_id" value="<?=$subject_id?>">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>