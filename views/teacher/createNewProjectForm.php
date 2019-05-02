<div id="tao_do_an">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
      <h3>Tạo đồ án <b><?=$_GET['name']?></b></h3>
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
      <label>Số lượng đăng kí cho phép</label>
      <input type="number" class="form-control" name="numberPeople" id="num_people">
    </div>
    <input type="hidden" name="subject_id" value="<?=$_GET['id']?>">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>