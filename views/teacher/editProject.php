<h2>Chỉnh sửa đề bài</h2>
<form action="#" method="post">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Tên đề bài</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="subj_name" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Mục tiêu đề bài</label>
		<div class="col-sm-10">
			<textarea class="form-control" id="subj_goal" cols="7" required></textarea>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Số lượng đăng kí cho phép</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="subj_numstu" required>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label"></label>
		<div class="col-sm-10">
			<input type="button" class="btn btn-primary" value="Cập nhật">
			<span></span>
			<input type="reset" class="btn btn-default" value="Hủy bỏ">
		</div>
	</div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
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
</script>