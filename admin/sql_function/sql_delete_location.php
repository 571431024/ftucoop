<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_lo_id = $flag;
$sql="delete from tb_localtion where tb_lo_id = '$tb_lo_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลสถานที่สำเร็จ');window.history.back();</script>";
?>
