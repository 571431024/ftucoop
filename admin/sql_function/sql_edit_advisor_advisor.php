<?php


if(empty($submit))
{
include ("../sql_function/connect.php");

	$tb_ads_id=$_POST['tb_ads_id'];
	$tb_ads_id_log=$_POST['tb_ads_id_log'];
	$tb_ads_password=$_POST['tb_ads_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_ads_name=$_POST['tb_ads_name'];
	$tb_ads_lastname=$_POST['tb_ads_lastname'];
	$tb_ads_email=$_POST['tb_ads_email'];
	$tb_ads_tel=$_POST['tb_ads_tel'];

	

$sql = "UPDATE  tb_advisor SET tb_ads_id = '$tb_ads_id', tb_ads_id_log = '$tb_ads_id_log', 
tb_ads_password = '$tb_ads_password' ,tb_prefix_tb_prefix_id  = '$tb_prefix_id', 
tb_ads_name = '$tb_ads_name', tb_ads_lastname = '$tb_ads_lastname',tb_ads_email= '$tb_ads_email',tb_ads_tel = '$tb_ads_tel' 
WHERE tb_ads_id = '$tb_ads_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลส่วนตัวสำเร็จ');window.history.back();</script>";


}

if($_FILES["fileUpload"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
			"../picture/".$_FILES["fileUpload"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../picture/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_advisor ";
			$sql .=" SET tb_ads_img = '".$_FILES["fileUpload"]["name"]."' WHERE tb_ads_id = '$tb_ads_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());



			}

	}



?>
