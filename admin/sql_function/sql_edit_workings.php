<?php

if(empty($submit))
{
include ("connect.php");

	$tb_work_id=$_POST['tb_work_id'];
	$tb_work_title=$_POST['tb_work_title'];
	$tb_work_description=$_POST['tb_work_description'];
	$tb_work_by=$_POST['tb_work_by'];
	
	
	
	
	


	$sql = "UPDATE  tb_workings SET tb_work_id = '$tb_work_id', tb_work_title = '$tb_work_title', 
			tb_work_description = '$tb_work_description', tb_work_by = '$tb_work_by'
			WHERE tb_work_id = '$tb_work_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลส่วนผลงานนักศึกษาสำเร็จ');window.location = \"control_web.php\";</script>";


}				

if($_FILES["tb_work_img"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["tb_work_img"]["tmp_name"],
			"img_frontweb/".$_FILES["tb_work_img"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("img_frontweb/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_workings ";
			$sql .=" SET tb_work_img = '".$_FILES["tb_work_img"]["name"]."' WHERE tb_work_id = '$tb_work_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


			}

	}	


	

?>