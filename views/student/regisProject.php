<?php 

$count = 1;
$listProj = $studentCtrler->getListProject($_GET['idSubj']);

?>
<?php if ($listProj == false) { ?>
  <h4>Chưa có đề bài từ giảng viên hoặc từ đề xuất của sinh viên</h4>
<?php } else { ?>
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
        <?php while ($rowLprj = $listProj->fetch_assoc() ) { ?>
        <tr>
            <th scope="row"><?= $count ?></th>
            <td><?= $rowLprj['name'] ?></td>
            <td><?= nl2br($rowLprj['goal']) ?></td>
            <td><?= $rowLprj['numofstudent'] ?></td>
            <td>
                <form method="post">
                    <input type="text" name="projectID" value="<?= $rowLprj['id'] ?>" hidden>
                    <input type="submit" class="btn btn-primary" name="regisProject" id="regisProject" value="Đăng kí" /><br/>
                </form>
            </td>
        </tr>
        <?php $count++; } ?>
    </tbody>
</table>
<?php } ?>