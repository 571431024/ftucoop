<?php
session_start();
include ("../sql_function/connect.php");

	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];
	
	$tb_ss_date=$_POST['tb_ss_date'];
	$tb_ss_timestart=$_POST['tb_ss_timestart'];
	$tb_ss_timefinish=$_POST['tb_ss_timefinish'];
	$tb_ads_id=$_POST['tb_ads_id'];
	$tb_lo_id=$_POST['tb_lo_id'];
	$tb_mentor_id=$_POST['tb_mentor_id'];
	
	
	

	

	$sql = "INSERT INTO tb_supervision_schedule (
						tb_ss_date, tb_ss_timestart,
						tb_ss_timefinish,
						faculty_id,
						major_id,
						tb_advisor_tb_ads_id,
						tb_localtion_tb_lo_id,
						tb_mentor_tb_mentor_id ) 
			VALUES(
				'$tb_ss_date',
				'$tb_ss_timestart',
				'$tb_ss_timefinish',
				'$faculty_id',
				'$major_id',
				'$tb_ads_id',
				'$tb_lo_id', 
				'$tb_mentor_id')";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มตารางนิเทศอาจารย์สำเร็จ');window.history.back();</script>";

							

?>