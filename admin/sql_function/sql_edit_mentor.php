<?php
session_start();
include ("../sql_function/connect.php");

	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	$tb_mentor_id=$_POST['tb_mentor_id'];
	$tb_mentor_id_log=$_POST['tb_mentor_id_log'];
	$tb_mentor_password=$_POST['tb_mentor_password'];
	$tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_mentor_name=$_POST['tb_mentor_name'];
	$tb_mentor_lastname=$_POST['tb_mentor_lastname'];
	$tb_mentor_email=$_POST['tb_mentor_email'];
	$tb_mentor_tel=$_POST['tb_mentor_tel'];
	$tb_lo_id=$_POST['tb_lo_id'];

	$sql = "UPDATE  tb_mentor 
			SET 	tb_mentor_id = '$tb_mentor_id',
				 	tb_mentor_id_log = '$tb_mentor_id_log', 
					tb_mentor_password = '$tb_mentor_password',
					tb_prefix_tb_prefix_id  = '$tb_prefix_id', 
					tb_mentor_name = '$tb_mentor_name', 
					tb_mentor_lastname = '$tb_mentor_lastname',
					tb_mentor_email= '$tb_mentor_email',
					tb_mentor_tel = '$tb_mentor_tel',
					tb_localtion_tb_lo_id = '$tb_lo_id',
					faculty_id = '$faculty_id',
					major_id = '$major_id'

			WHERE 	tb_mentor_id = '$tb_mentor_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลพี่เลี้ยงสำเร็จ');window.history.back();</script>";

							

?>