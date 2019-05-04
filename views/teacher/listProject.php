<?php
$count = 1;
$listProject = $teacherCtrler->getListProject($_SESSION['user_id'], $_GET['subj_id'], 1);
?>
<div class="lstProject">
	<div class="createProject">
		<a href="?p=createProject&id=<?=$_GET['subj_id']?>&name=<?=$_GET['subj_name']?>"><input type="button" class="btn btn-primary" name="create_project" value="Tạo đề bài mới"></a>
	</div>
	
	<?php if ($listProject == false) { ?>
		<h4>Chưa có đề bài được tạo</h4>
	<?php } else { ?>
		<div class="listProject">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">STT</th>
						<th scope="col">Tên đồ án</th>
						<th scope="col">Mục tiêu</th>
						<th scope="col">Số lượng</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($rowPj = $listProject->fetch_assoc() ) { ?>
						<tr>
							<th scope="row"><?= $count ?></th>
							<td><?= $rowPj['name'] ?></td>
							<td><?= nl2br($rowPj['goal']) ?></td>
							<td><?= $rowPj['numofstudent'] ?></td>
							<td><a class="btn btn-info" href="?p=editProject&id=<?=$rowPj['id']?>&name=<?=$rowPj['name']?>&goal=<?=$rowPj['goal']?>&num=<?=$rowPj['numofstudent']?>">Chỉnh sửa</a></td>
							<td><a class="btn btn-outline-danger" href="?p=deleteProject&id=<?=$rowPj['id']?>">Xóa</a></td>
						</tr>
					<?php $count++; }?>	
				</tbody>
			</table>
		</div>
	<?php } ?>
</div>