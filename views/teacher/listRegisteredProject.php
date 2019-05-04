<?php 
$listRegistedProj = $teacherCtrler->getListProject($_SESSION['user_id'], $_GET['subj_id'], 1);
$status = 0;
?>

<?php if ($listRegistedProj == false) { ?>
	<h3 class="nopropose">Chưa có sinh viên đề xuất</h3>
<?php } else { ?>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Tên Đồ Án</th>
					<th scope="col">Yêu cầu</th>
					<th scope="col">Số sinh viên cho phép thực hiện</th>
					<th scope="col">Sinh viên thực hiện</th>
				</tr>
			</thead>
			<tbody>
				<?php while ( $rowPP = $listRegistedProj->fetch_assoc() ) { ?>
					<?php 
					$student_id = $rowPP['std_id'];
					?>
					<tr>
						<th scope="row"><?= $rowPP['name'] ?></th>
						<td><?= nl2br($rowPP['goal']) ?></td>
						<td><?= $rowPP['numofstudent'] ?></td>
						<td><?= $rowPP['std_name'] ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>