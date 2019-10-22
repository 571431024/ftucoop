<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_ads_id = $flag;
$sql="delete from tb_advisor where tb_ads_id = '$tb_ads_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลอาจารย์สำเร็จ');window.history.back();</script>";
?>
