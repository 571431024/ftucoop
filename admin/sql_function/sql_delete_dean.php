<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_dean_id = $flag;
$sql="delete from td_dean where tb_dean_id = '$tb_dean_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลอาจารย์สำเร็จ');window.history.back();</script>";
?>
