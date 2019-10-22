<?php
include ("connect.php");


	$tb_act_title=$_POST['tb_act_title'];
	$tb_act_description=$_POST['tb_act_description'];
	$tb_act_faculty=$_POST['tb_act_faculty'];
	$tb_act_major=$_POST['tb_act_major'];
	
	
	$_FILES['fileUpload']['tmp_name'];
	if($_FILES['fileUpload']['name'] != "")
	{
			
			copy($_FILES['fileUpload']['tmp_name'],"../../img_frontweb/".$_FILES['fileUpload']['name']);  //warnning
	}
	$tb_act_img = $_FILES['fileUpload']['name'];


	$_FILES['tb_act_file']['tmp_name'];
	if($_FILES['tb_act_file']['name'] != "")
	{
			
			copy($_FILES['tb_act_file']['tmp_name'],"../../file_frontweb/".$_FILES['tb_act_file']['name']); 
			 //warnning
	}
	$tb_act_file = $_FILES['tb_act_file']['name'];

	

	$sql = "INSERT INTO tb_activity_news (tb_act_title, 
										  tb_act_description,
										  tb_act_date,
										  tb_act_img,
										  tb_act_file,
										  tb_act_faculty,
										  tb_act_major) 
			VALUES('$tb_act_title', 
				   '$tb_act_description', 
				    now() , 
				   '$tb_act_img', 
				   '$tb_act_file',
				   '$tb_act_faculty',
				   '$tb_act_major')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลข่าวสารกิจกรรมนักศึกษาสำเร็จ');window.history.back();</script>";

	
	
							

?>