<?php

$deleteResult = $teacherCtrler->removeProject($_GET['id']);
if ($deleteResult == true) 
{
	echo '<script language="javascript">';
	echo 'alert("Xóa thành công !!!")';
	echo '</script>';
}
else
{
	echo '<script language="javascript">';
	echo 'alert("Đồ án đã có sinh viên đăng kí .Xóa thất bại.")';
	echo '</script>';
}

?>