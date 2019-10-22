<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_rp_id = $flag;
$sql="delete from tb_record_performance where tb_rp_id = '$tb_rp_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		// echo "<script>alert('ลบข้อมูันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.location = \"../student/student_per.php\";</script>";
		echo "<script>alert('ลบข้อมูันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.history.back();</script>";
?>
