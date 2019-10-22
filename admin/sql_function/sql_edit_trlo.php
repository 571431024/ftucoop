<?php


if(empty($submit))
{
include ("../sql_function/connect.php");



	$tb_std_id=$_POST['tb_std_id'];
	$tb_std_offerlo=$_POST['tb_std_offerlo'];
	$tb_std_offerlo_d=$_POST['tb_std_offerlo_d'];

	$tb_std_seprovince=$_POST['tb_std_seprovince'];
	$tb_std_secate=$_POST['tb_std_secate'];
	$tb_std_senamelo=$_POST['tb_std_senamelo'];
	$tb_std_status_id=$_POST['tb_std_status_id'];

$sql = "UPDATE  tb_student SET tb_std_id = '$tb_std_id',
tb_std_offerlo = '$tb_std_offerlo', 
tb_std_offerlo_d = '$tb_std_offerlo_d',
tb_std_seprovince = '$tb_std_seprovince',tb_std_secate = '$tb_std_secate',tb_std_senamelo = '$tb_std_senamelo'
,tb_std_status_id = '$tb_std_status_id'

WHERE tb_std_id = '$tb_std_id'";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('แก้ไขข้อมูลอาจารย์สำเร็จ');window.history.back();</script>";

}







?>

