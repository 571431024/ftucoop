<?php
session_start();

if(empty($submit))
{
include ("../sql_function/connect.php");

	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	$tb_doc_id=$_POST['tb_doc_id'];
	$tb_doc_name=$_POST['tb_doc_name'];
	$tb_doc_des=$_POST['tb_doc_des'];
	$dm=date('d-m');
	$y=date('Y')+543;
	$dmy=$dm."-".$y;



	
include ("../sql_function/connect.php");

	$sql = "UPDATE  tb_document 
			SET     tb_doc_id = '$tb_doc_id',
				 	tb_doc_name = '$tb_doc_name', 
					tb_doc_des = '$tb_doc_des',
					faculty_id = '$faculty_id',
					major_id = '$major_id'


			WHERE tb_doc_id = '$tb_doc_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลเอกสารสำเร็จ');window.history.back();</script>";

							
}

if($_FILES["fileUpload"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],
			"../document/".$_FILES["fileUpload"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../document/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_document ";
			$sql .=" SET fileUpload = '".$_FILES["fileUpload"]["name"]."' WHERE tb_doc_id = '$tb_doc_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


			}

	}



?>
