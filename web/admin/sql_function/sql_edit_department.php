<?php


if(empty($submit))
{
include ("../sql_function/connect.php");

	$tb_dept_id=$_POST['tb_dept_id'];
	$tb_dept_id_log=$_POST['tb_dept_id_log'];
	$tb_dept_password=$_POST['tb_dept_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_dept_name=$_POST['tb_dept_name'];
	$tb_dept_lastname=$_POST['tb_dept_lastname'];
	$tb_dept_faculty=$_POST['tb_dept_faculty'];
	$tb_dept_major=$_POST['tb_dept_major'];
	$tb_dept_email=$_POST['tb_dept_email'];
	$tb_dept_tel=$_POST['tb_dept_tel'];

	

	$sql = "UPDATE  tb_department 	SET tb_dept_id = '$tb_dept_id', 
										tb_dept_id_log = '$tb_dept_id_log', 
										tb_dept_password = '$tb_dept_password',
										tb_prefix_tb_prefix_id  = '$tb_prefix_id', 
										tb_dept_name = '$tb_dept_name',
										tb_dept_lastname = '$tb_dept_lastname', 
										tb_dept_faculty = '$tb_dept_faculty', 
										tb_dept_major = '$tb_dept_major',
										tb_dept_email= '$tb_dept_email',
										tb_dept_tel = '$tb_dept_tel' 
			
			WHERE tb_dept_id = '$tb_dept_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลอาจารย์สำเร็จ');window.history.back();</script>";


}

if($_FILES["fileUpload"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
			"../picture/".$_FILES["fileUpload"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../picture/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_department ";
			$sql .=" SET tb_dept_img = '".$_FILES["fileUpload"]["name"]."' WHERE td_dept_id = '$td_dept_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());



			}

	}



?>