<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_std_id = $flag;
$sql="delete from tb_student where tb_std_id = '$tb_std_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลนักศึกษาเสร็จสมบูรณ์');window.history.back();</script>";
?>
