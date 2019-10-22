<?php

function fn_name($name){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_std_name FROM tb_student WHERE tb_std_id = '$name'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_std_name"];
}



function fn_lastname($Lname){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_std_lastname FROM tb_student WHERE tb_std_id = '$Lname'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_std_lastname"];
}

function fn_id($id){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_std_identification FROM tb_student WHERE tb_std_id = '$id'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_std_identification"];
}

function fn_pre($prefix){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_prefix_name FROM tb_prefix WHERE tb_prefix_id = '$prefix'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_prefix_name"];
}

function fn_cate($scate){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_stdcate_cate FROM tb_student_category WHERE tb_stdcate_id = '$scate'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_stdcate_cate"];
}



