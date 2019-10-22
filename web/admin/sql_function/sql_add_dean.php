<?php



include ("../sql_function/connect.php");

	$tb_dean_id_log=$_POST['tb_dean_id_log'];
	$tb_dean_password=$_POST['tb_dean_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_dean_name=$_POST['tb_dean_name'];
	$tb_dean_lastname=$_POST['tb_dean_lastname'];
	$tb_dean_faculty=$_POST['tb_dean_faculty'];
	$tb_dean_email=$_POST['tb_dean_email'];
	$tb_dean_tel=$_POST['tb_dean_tel'];
	

$sql = "INSERT INTO td_dean (tb_dean_id_log, tb_dean_password,tb_prefix_tb_prefix_id,tb_dean_name,tb_dean_lastname,tb_dean_faculty,tb_dean_email,tb_dean_tel)

		VALUES('$tb_dean_id_log','$tb_dean_password','$tb_prefix_id','$tb_dean_name','$tb_dean_lastname','$tb_dean_faculty','$tb_dean_email','$tb_dean_tel')";

	
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลอาจารย์ที่ปรึกษาสำเร็จ');window.history.back();</script>";
	
							

?>