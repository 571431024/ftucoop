<?php
include ("connect.php");


	$tb_work_title=$_POST['tb_work_title'];
	$tb_work_description=$_POST['tb_work_description'];
	$tb_work_by=$_POST['tb_work_by'];
	
	
	$_FILES['tb_work_img']['tmp_name'];
	if($_FILES['tb_work_img']['name'] != "")
	{
			
			copy($_FILES['tb_work_img']['tmp_name'],"img_frontweb/".$_FILES['tb_work_img']['name']); 
			 //warnning
	}
	$tb_work_img = $_FILES['tb_work_img']['name'];

	

$sql = "INSERT INTO tb_workings (tb_work_title, tb_work_description,tb_work_date, tb_work_by, tb_work_img) 
VALUES('$tb_work_title', '$tb_work_description', now() ,'$tb_work_by','$tb_work_img')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลส่วนผลงานนักศึกษาสำเร็จ');window.location = \"control_web.php\";</script>";

	
	
							

?>