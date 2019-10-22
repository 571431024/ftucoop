<?php
include ("../sql_function/connect.php");


	$tb_act_title=$_POST['tb_act_title'];
	$tb_act_description=$_POST['tb_act_description'];




	$_FILES['fileUpload']['tmp_name'];
	if($_FILES['fileUpload']['name'] != "")
	{
			copy($_FILES['fileUpload']['tmp_name'],"../../img_frontweb/".$_FILES['fileUpload']['name']) AND
			copy($_FILES['fileUpload']['tmp_name'],"../test/".$_FILES['fileUpload']['name']);  //warnning
	}
	$tb_act_img = $_FILES['fileUpload']['name'];


	$_FILES['tb_act_file']['tmp_name'];
	if($_FILES['tb_act_file']['name'] != "")
	{
			copy($_FILES['tb_act_file']['tmp_name'],"../pic_frontweb/".$_FILES['tb_act_file']['name']) AND
			copy($_FILES['tb_act_file']['tmp_name'],"../test/".$_FILES['tb_act_file']['name']);
			 //warnning
	}
	$tb_act_file = $_FILES['tb_act_file']['name'];



$sql = "INSERT INTO tb_activity_news (tb_act_title, tb_act_description,tb_act_date,tb_act_img,tb_act_file)
VALUES('$tb_act_title', '$tb_act_description', now() , '$tb_act_img', '$tb_act_file' )";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());

	echo "<script>alert('เพิ่มข้อมูลอาจารย์ที่ปรึกษาสำเร็จ');window.history.back();</script>";





?>
