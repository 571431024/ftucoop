<?php


if(empty($submit))
{
include ("../sql_function/connect.php");


	$tb_std_id=$_POST['tb_std_id'];
	$tb_std_identification=$_POST['tb_std_identification'];
	$tb_std_password=$_POST['tb_std_password'];
	$tb_std_name=$_POST['tb_std_name'];
	$tb_std_lastname=$_POST['tb_std_lastname'];
	$tb_std_sex=$_POST['tb_std_sex'];
	$tb_std_major=$_POST['tb_std_major'];
	$tb_std_year=$_POST['tb_std_year'];
	$tb_std_birthday=$_POST['tb_std_birthday'];
	$tb_std_email=$_POST['tb_std_email'];
	$tb_std_tel=$_POST['tb_std_tel'];
	$tb_std_address=$_POST['tb_std_address'];


	
	
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_stdcate_id=$_POST['tb_stdcate_id'];



$sql = "UPDATE  tb_student SET tb_std_id = '$tb_std_id', tb_std_identification = '$tb_std_identification', 
tb_std_password = '$tb_std_password', tb_std_name = '$tb_std_name' , tb_std_lastname  = '$tb_std_lastname', 
tb_std_sex = '$tb_std_sex', tb_std_major = '$tb_std_major' , tb_std_year  = '$tb_std_year', 
tb_std_birthday = '$tb_std_birthday', tb_std_email = '$tb_std_email' , tb_std_tel  = '$tb_std_tel', tb_std_address  = '$tb_std_address' ,
tb_prefix_tb_prefix_id = '$tb_prefix_id', tb_student_category_tb_stdcate_id = '$tb_stdcate_id' 



WHERE tb_std_id = '$tb_std_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลส่วนตัวสำเร็จ');window.location = \"../student/student_bio.php\";</script>";

							
}


if($_FILES["fileUpload"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
			"../student_pic/".$_FILES["fileUpload"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../student_pic/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_student ";
			$sql .=" SET tb_std_img = '".$_FILES["fileUpload"]["name"]."' WHERE tb_std_id = '$tb_std_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


			}

	}



?>

