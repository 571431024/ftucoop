<?php


if(empty($submit))
{
include ("../sql_function/connect.php");

	$tb_dean_id=$_POST['tb_dean_id'];
	$tb_dean_id_log=$_POST['tb_dean_id_log'];
	$tb_dean_password=$_POST['tb_dean_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_dean_name=$_POST['tb_dean_name'];
	$tb_dean_lastname=$_POST['tb_dean_lastname'];
	$tb_dean_faculty=$_POST['tb_dean_faculty'];
	$tb_dean_email=$_POST['tb_dean_email'];
	$tb_dean_tel=$_POST['tb_dean_tel'];

	

$sql = "UPDATE  td_dean SET tb_dean_id = '$tb_dean_id', tb_dean_id_log = '$tb_dean_id_log', 
tb_dean_password = '$tb_dean_password' ,tb_prefix_tb_prefix_id  = '$tb_prefix_id', 
tb_dean_name = '$tb_dean_name', tb_dean_lastname = '$tb_dean_lastname', tb_dean_faculty = '$tb_dean_faculty' ,tb_dean_email= '$tb_dean_email',tb_dean_tel = '$tb_dean_tel' 
WHERE tb_dean_id = '$tb_dean_id'";

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
			$sql = "UPDATE td_dean ";
			$sql .=" SET tb_dean_img = '".$_FILES["fileUpload"]["name"]."' WHERE tb_dean_id = '$tb_dean_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());



			}

	}



?>