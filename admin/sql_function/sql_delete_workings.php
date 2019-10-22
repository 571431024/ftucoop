<?php
include ("connect.php");
extract($_GET);
$tb_work_id = $flag;
$sql="delete from tb_workings where tb_work_id = '$tb_work_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลผลงานนักศึกษาสำเร็จ');window.location = \"control_web.php\";</script>";
?>
