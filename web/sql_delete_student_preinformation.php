<?php
include ("connect.php");
extract($_GET);
$stdpre_id = $flag;
$sql="delete from tb_student_preinformation where stdpre_id = '$stdpre_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ลบประวัติส่วนตัวนักศึกษาสำเร็จ');window.location = \"student_preinformation.php\";</script>";
?>
