<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];
?>
<?php

if(empty($submit))
{
include ("../sql_function/connect.php");


	$tb_rp_id=$_POST['tb_rp_id'];
	$tb_rp_topic=$_POST['tb_rp_topic'];
	$tb_rp_describtion=$_POST['tb_rp_describtion'];
	
	
	
	
	


	$sql = "UPDATE  tb_record_performance SET tb_rp_id = '$tb_rp_id', tb_rp_topic = '$tb_rp_topic', 
tb_rp_describtion = '$tb_rp_describtion'



WHERE tb_rp_id = '$tb_rp_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	// echo "<script>alert('แก้ไขบันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.location = \"../student/student_per.php\";</script>";
	echo "<script>alert('แก้ไขบันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.history.back();</script>";

}				

if($_FILES["tb_rp_file"]["name"] != "")

			{

			if(move_uploaded_file($_FILES["tb_rp_file"]["tmp_name"],
			"../file_rec/".$_FILES["tb_rp_file"]["name"]))

			{

			//*** Delete Old File ***//        

			@unlink("../file_rec/".$_POST["hdnOldFile"]);
			$sql = "UPDATE tb_record_performance ";
			$sql .=" SET tb_rp_file = '".$_FILES["tb_rp_file"]["name"]."' WHERE tb_rp_id = '$tb_rp_id'";
			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


			}

	}			

?>