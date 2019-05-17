<?php 
$listProposeProj = $teacherCtrler->getListProject($_SESSION['user_id'], $_GET['subj_id'], 0);
$status = 0;
?>

<?php if ($listProposeProj == false) { ?>
	<h3 class="nopropose">Chưa có sinh viên đề xuất</h3>
<?php } else { ?>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Tên Đồ Án</th>
					<th scope="col">Yêu cầu tự đề ra</th>
					<th scope="col">Số sinh viên cho phép thực hiện</th>
					<th scope="col">Sinh viên thực hiện</th>
					<th scope="col">Tình trạng</th>
				</tr>
			</thead>
			<tbody>
				<?php while ( $rowPP = $listProposeProj->fetch_assoc() ) { ?>
					<?php 
					$status = ($rowPP['status'] == 1) ? "Đã duyệt" : "Chưa duyệt";
					$student_id = $rowPP['std_id'];
					?>
					<tr>
						<th scope="row"><?= $rowPP['name'] ?></th>
						<td><?= nl2br($rowPP['goal']) ?></td>
						<td><?= $rowPP['numofstudent'] ?></td>
						<td><?= $rowPP['std_name'] ?></td>
						<td><?= $status ?></td>
						<td>
							<form method="post">
								<input type="text" name="projectID" value="<?= $rowPP['id'] ?>" hidden>
								<input type="submit" class="btn btn-primary" name="verifyProject" id="verifyProject" value="Phê duyệt" /><br/>
							</form>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php } ?>