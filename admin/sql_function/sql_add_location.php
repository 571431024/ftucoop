<?php
session_start();
include ("../sql_function/connect.php");
	
	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	$tb_lo_name=$_POST['tb_lo_name'];
	$tb_lo_address=$_POST['tb_lo_address'];
	$tb_lo_tel=$_POST['tb_lo_tel'];
	$tb_lo_email=$_POST['tb_lo_email'];


	$_FILES['fileUpload']['tmp_name'];
	if($_FILES['fileUpload']['name'] != "")
	{
			copy($_FILES['fileUpload']['tmp_name'],"../picture/".$_FILES['fileUpload']['name']);  //warnning
	}
	$tb_lo_img = $_FILES['fileUpload']['name'];

	

	$sql = "INSERT INTO tb_localtion (
						tb_lo_name, 
						tb_lo_address,
						tb_lo_tel,
						faculty_id,
						major_id,
						tb_lo_email,tb_lo_img)

			VALUES(
				 '$tb_lo_name',
				 '$tb_lo_address',
				 '$tb_lo_tel',
				 '$faculty_id',
				 '$major_id',
				 '$tb_lo_email','$tb_lo_img')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลสถานที่สำเร็จ');window.history.back();</script>";

							

?>