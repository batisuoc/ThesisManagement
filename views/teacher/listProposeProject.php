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
        <th scope="col">Số lượng người thực hiện</th>
        <th scope="col">Tình trạng</th>
      </tr>
    </thead>
    <tbody>
      <?php while ( $rowPP = $listProposeProj->fetch_assoc() ) { ?>
        <?php $status = ($rowPP['status'] == 1) ? "Đã duyệt" : "Chưa duyệt" ?>
        <tr>
          <th scope="row"><?= $rowPP['name'] ?></th>
          <td><?= $rowPP['numofstudent'] ?></td>
          <td><?= $status ?></td>
          <td><a href="#">Chi tiết</a></td>
          <td><button class="btn btn-default">Phê duyệt</button></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php } ?>