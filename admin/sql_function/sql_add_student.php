<?php

include ("../sql_function/connect.php");


	$tb_std_identification=$_POST['tb_std_identification'];
	$tb_std_password=$_POST['tb_std_password'];
	$tb_std_name=$_POST['tb_std_name'];
	$tb_std_lastname=$_POST['tb_std_lastname'];
	$tb_std_sex=$_POST['tb_std_sex'];
	$tb_std_faculty=$_POST['tb_std_faculty'];
	$tb_std_major=$_POST['tb_std_major'];
	$tb_std_year=$_POST['tb_std_year'];
	$tb_std_birthday=$_POST['tb_std_birthday'];
	$tb_std_email=$_POST['tb_std_email'];
	$tb_std_tel=$_POST['tb_std_tel'];
	$tb_std_address=$_POST['tb_std_address'];

	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_stdcate_id=$_POST['tb_stdcate_id'];
	$tb_lo_id=$_POST['tb_lo_id'];
	$tb_ads_id=$_POST['tb_ads_id'];
	$tb_mentor_id=$_POST['tb_mentor_id'];
	$_FILES['fileUpload']['tmp_name'];
	if($_FILES['fileUpload']['name'] != "")
	{
			copy($_FILES['fileUpload']['tmp_name'],"../student_pic/".$_FILES['fileUpload']['name']);  //warnning
	}
	

	$tb_std_img = $_FILES['fileUpload']['name'];

	
$sql = "INSERT INTO tb_student (tb_std_identification, tb_std_password,tb_std_name, tb_std_lastname, tb_std_sex,td_std_faculty,tb_std_major,tb_std_year,
	tb_std_birthday,tb_std_email,tb_std_tel, tb_std_address, tb_prefix_tb_prefix_id, tb_student_category_tb_stdcate_id	,tb_localtion_tb_lo_id ,tb_advisor_tb_ads_id ,tb_std_img, tb_mentor_tb_mentor_id ) 
VALUES('$tb_std_identification', '$tb_std_password','$tb_std_name','$tb_std_lastname', '$tb_std_sex','$td_std_caculty','$tb_std_major','$tb_std_year'  ,'$tb_std_birthday'   ,'$tb_std_email'  ,'$tb_std_tel'  ,
	'$tb_std_address'  ,'$tb_prefix_id'  ,'$tb_stdcate_id'  ,'$tb_lo_id' ,'$tb_ads_id' ,'$tb_std_img', '$tb_mentor_id'  )";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลนักศึกษาสำเร็จ');window.location = \"../admin/student.php\";</script>";

							

?>