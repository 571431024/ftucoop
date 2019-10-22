<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_mentor_id = $flag;
$sql="delete from tb_mentor where tb_mentor_id = '$tb_mentor_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลพี่เลี้ยงสำเร็จ');window.history.back();</script>";
?>
