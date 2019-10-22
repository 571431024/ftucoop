<?php
session_start();

include ("../sql_function/connect.php");

	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	$tb_ads_id_log=$_POST['tb_ads_id_log'];
	$tb_ads_password=$_POST['tb_ads_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_ads_name=$_POST['tb_ads_name'];
	$tb_ads_lastname=$_POST['tb_ads_lastname'];
	$tb_ads_email=$_POST['tb_ads_email'];
	$tb_ads_tel=$_POST['tb_ads_tel'];
	

$sql = "INSERT INTO tb_advisor (
							tb_ads_id_log,
							tb_ads_password,
							tb_prefix_tb_prefix_id,
							tb_ads_name,
							tb_ads_lastname,
							tb_ads_faculty,
							tb_ads_major,
							tb_ads_email,tb_ads_tel)

		VALUES(
			'$tb_ads_id_log',
			'$tb_ads_password',
			'$tb_prefix_id',
			'$tb_ads_name',
			'$tb_ads_lastname',
			'$faculty',
			'$major',
			'$tb_ads_email',
			'$tb_ads_tel')";

	
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลอาจารย์ที่ปรึกษาสำเร็จ');window.history.back();</script>";
	
							

?>