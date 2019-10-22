<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_ss_id = $flag;
$sql="delete from tb_supervision_schedule where tb_ss_id = '$tb_ss_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบตารางนิเทศอาจารย์สำเร็จ');window.history.back();</script>";
?>
