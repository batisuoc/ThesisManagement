<h2>Chỉnh sửa đề bài</h2>
<form class="editProject" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	<input type="text" name="project_id" value="<?=$_GET['id']?>" hidden>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Tên đề bài</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="project_name" value="<?=$_GET['name']?>" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Mục tiêu đề bài</label>
		<div class="col-sm-10">
			<textarea class="form-control" name="project_goal" rows="6" required><?= $_GET['goal'] ?></textarea>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Số lượng đăng kí cho phép</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="project_numstudent" value="<?=$_GET['num']?>" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label"></label>
		<div class="col-sm-10">
			<input type="submit" name="updateProj" class="btn btn-primary" value="Cập nhật">
			<span></span>
			<!-- <input type="reset" class="btn btn-default" value="Hủy bỏ"> -->
		</div>
	</div>
</form>

<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('editProject');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->