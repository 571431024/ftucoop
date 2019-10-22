<?php

function fn_prefix($prefix){ // $prefix is the varieble that receive value form "tb_prefix_id"
	/*
	if($prefix == "1"){
		return "นาย";  // return value to display where the function was called
	}else if($prefix == "2"){
		return "นาง";
	}else if($prefix == "3"){
		return "นางสาว";
	}
	*/
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_prefix_name FROM tb_prefix WHERE tb_prefix_id = '$prefix'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_prefix_name"];
}


function fn_co($value){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_stdcate_cate FROM tb_student_category WHERE tb_stdcate_id = '$value'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_stdcate_cate"];
}

function fn_lo($loca){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_lo_name FROM tb_localtion WHERE tb_lo_id = '$loca'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_lo_name"];
}

function fn_adv_name($adv_name){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_ads_name FROM tb_advisor WHERE tb_ads_id = '$adv_name'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_ads_name"];
}

function fn_adv_name_last($adv_last){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_ads_lastname FROM tb_advisor WHERE tb_ads_id = '$adv_last'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_ads_lastname"];
}

function fn_men_name($men_name){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_mentor_name FROM tb_mentor WHERE tb_mentor_id = '$men_name'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_mentor_name"];
}

function fn_men_name_last($men_name_last){
	include ("../sql_function/connect.php");
	$sql = "SELECT tb_mentor_lastname FROM tb_mentor WHERE tb_mentor_id = '$men_name_last'";
	$rs = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($rs);

	return $row["tb_mentor_lastname"];
}
