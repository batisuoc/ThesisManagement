<div class="container">
	<h3>Môn <b><?= $_GET['name'] ?></b></h3>
	<div class="row">
		<div class="col-md-4" id="container1">
			<div class="write">
				<a href="?p=listDoAn">
					<img src="images\hinh1.png" class="topdev">
					<p class="write-text">Danh sách đề bài</p>
				</a>
			</div>
		</div>
		<div class="col-md-4" id="container1">
			<div class="write">
				<a href="?p=listDoAnDeXuat&subj_id=<?=$_GET['id']?>">
					<img src="images\hinh1.png" class="topdev">
					<p class="write-text">Danh sách đồ án được đề xuất</p>
				</a>
			</div>
		</div>
		<div class="col-md-4" id="container1">
			<div class="write">
				<a href="?p=listDoAnDangKi">
					<img src="images\hinh1.png" class="topdev">
					<p class="write-text">Danh sách đồ án đã đăng kí</p>
				</a>
			</div>
		</div>
	</div>
</div>