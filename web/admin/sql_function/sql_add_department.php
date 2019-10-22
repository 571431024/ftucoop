<?php

include ("../sql_function/connect.php");


	$tb_dept_id_log=$_POST['tb_dept_id_log'];
	$tb_dept_password=$_POST['tb_dept_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_dept_name=$_POST['tb_dept_name'];
	$tb_dept_lastname=$_POST['tb_dept_lastname'];
	$tb_dept_faculty=$_POST['tb_dept_faculty'];
	$tb_dept_major=$_POST['tb_dept_major'];
	$tb_dept_email=$_POST['tb_dept_email'];
	$tb_dept_tel=$_POST['tb_dept_tel'];
	

$sql = "INSERT INTO  tb_department (tb_dept_id_log, 
									tb_dept_password,
									tb_prefix_tb_prefix_id,
									tb_dept_name,
									tb_dept_lastname,
									tb_dept_faculty,
									tb_dept_major,
									tb_dept_email,
									tb_dept_tel)
        VALUES('$tb_dept_id_log', 
			   '$tb_dept_password',
			   '$tb_prefix_id',
			   '$tb_dept_name',
			   '$tb_dept_lastname',
			   '$tb_dept_faculty',
			   '$tb_dept_major',
			   '$tb_dept_email',
			   '$tb_dept_tel')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลอาจารย์ที่ปรึกษาสำเร็จ');window.history.back();</script>";
	
							

?>