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
      <?php $result = $teacherCtrler->getListProject($_SESSION['user_id'], $_GET['subj_id']); ?>
      <?php while ( $rowLT = $result->fetch_assoc() ) { ?>
        <?php $status = ($rowLT['status'] == 1) ? "Đã duyệt" : "Chưa duyệt" ?>
        <tr>
          <th scope="row"><?= $rowLT['name'] ?></th>
          <td><?= $rowLT['numofstudent'] ?></td>
          <td><?= $status ?></td>
          <td><a href="#">Chi Tiết</a></td>
          <td><button class="btn btn-default">Phê duyệt</button></td>
        </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>