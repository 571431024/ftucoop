<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];
?>
<?php

include ("../sql_function/connect.php");


	
	$tb_rp_topic=$_POST['tb_rp_topic'];
	$tb_rp_describtion=$_POST['tb_rp_describtion'];

	$_FILES['tb_rp_file']['tmp_name'];
	if($_FILES['tb_rp_file']['name'] != "")
	{
			
			copy($_FILES['tb_rp_file']['tmp_name'],"../file_rec/".$_FILES['tb_rp_file']['name']);  //warnning
	}
	$tb_rp_file = $_FILES['tb_rp_file']['name'];


	
	

	
$sql = "INSERT INTO tb_record_performance (tb_rp_topic , tb_rp_describtion, tb_rp_date, tb_student_tb_std_id, tb_rp_file) 
VALUES( '$tb_rp_topic', '$tb_rp_describtion' ,  now() , '$id', '$tb_rp_file'    )";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	// echo "<script>alert('บันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.location = \"../student/student_per.php\";</script>";
	echo "<script>alert('บันทึกการฝึกวิชาชีพนักศึกษาสำเร็จ');window.history.back();</script>";
	
	

?>