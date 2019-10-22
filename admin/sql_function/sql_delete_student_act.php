<?php
include ("connect.php");
extract($_GET);
$tb_act_id = $flag;
$sql="delete from tb_activity_news where tb_act_id = '$tb_act_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลข่าวกิจกรรมนักศึกษาสำเร็จ');window.location = \"control_web.php\";</script>";
?>
