<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_dept_id = $flag;
$sql="delete from tb_department where tb_dept_id = '$tb_dept_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบข้อมูลอาจารย์สำเร็จ');window.history.back();</script>";
?>
