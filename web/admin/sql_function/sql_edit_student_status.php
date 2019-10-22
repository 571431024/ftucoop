<?php


if(empty($submit))
{
include ("../sql_function/connect.php");

	
	$tb_std_id=$_POST['tb_std_id']; 
	
	$tb_mentor_id=$_POST['tb_mentor_id']; 

	$tb_ads_id=$_POST['tb_ads_id'];  //ความสามารถทางด้านคอมพิวเตอร์
	$tb_sta_id=$_POST['tb_sta_id'];




	  
	



$sql = "UPDATE  tb_student SET tb_std_id = '$tb_std_id', tb_mentor_tb_mentor_id = '$tb_mentor_id', 
tb_advisor_tb_ads_id = '$tb_ads_id', tb_std_status_id = '$tb_sta_id' 


WHERE tb_std_id = '$tb_std_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลส่วนตัวเสร็จสมบูรณ์');window.history.back();</script>";

							
}




?>

