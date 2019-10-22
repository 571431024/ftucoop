<?php
session_start();
if(empty($submit))
{
include ("../sql_function/connect.php");
	
	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	$tb_lo_id=$_POST['tb_lo_id'];
	$tb_lo_name=$_POST['tb_lo_name'];
	$tb_lo_address=$_POST['tb_lo_address'];
	$tb_lo_tel=$_POST['tb_lo_tel'];
	$tb_lo_email=$_POST['tb_lo_email'];


	
include ("../sql_function/connect.php");
	$sql = "UPDATE  tb_localtion 
			SET 	tb_lo_id = '$tb_lo_id', 
					tb_lo_name = '$tb_lo_name', 
					tb_lo_tel = '$tb_lo_tel',
					tb_lo_address = '$tb_lo_address',
					tb_lo_email  = '$tb_lo_email',
					faculty_id = '$faculty_id',
					major_id = '$major_id'


	WHERE tb_lo_id = '$tb_lo_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลสถานที่สำเร็จ');window.history.back();</script>";

}


if($_FILES["fileUpload"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
			"../picture/".$_FILES["fileUpload"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../picture/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_localtion ";
			$sql .=" SET tb_lo_img = '".$_FILES["fileUpload"]["name"]."' WHERE tb_lo_id = '$tb_lo_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


			}

	}



?>

