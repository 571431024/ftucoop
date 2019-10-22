<?php

/*include ("../sql_function/connect.php");


	
	$ca_date=$_POST['ca_date'];
	$ca_stime=$_POST['ca_stime'];
	$ca_etime=$_POST['ca_etime'];
	$ca_advisor=$_POST['ca_advisor'];
	$ca_location=$_POST['ca_location'];
	$ca_mentor=$_POST['ca_mentor'];
	
	
	

	

$sql = "INSERT INTO tb_calendar (ca_date, ca_stime,ca_etime,ca_advisor,ca_location,ca_mentor ) 
VALUES('$ca_date', '$ca_stime','$ca_etime','$ca_advisor','$ca_location', '$ca_mentor')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มตารางนิเทศอาจารย์สำเร็จ');window.location = \"../admin/calendar.php\";</script>";

*/	
require "../admin/function.php";
$con = new mainFunction();
$con->insertData('tb_calendar',$_POST);				
echo "<script>alert('เพิ่มตารางนิเทศอาจารย์สำเร็จ');window.location = \"../admin/calendar.php\";</script>";
?>