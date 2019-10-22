<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];
$std_id = $_SESSION['stdId'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include ("../sql_function/connect.php");

$cmm2=$_POST['cmm2'];
foreach($_POST as $key => $data)
{
	//echo $key." ".$data."<br>";
	if($key != 'cmm'  )
	{
		$sql="INSERT INTO  `tb_evaluation_advisor` (`eva_no` ,`score` ,`cmm`, `cmm2` ,`std_id` ,`adv_id`)
		VALUES ('$key',  '$data', '0', '', '$std_id',  '$id')";
	}
	elseif($key != 'cmm' AND $key != 'cmm2' )
	{
		$sql="INSERT INTO  `tb_evaluation_advisor` (`eva_no` ,`score` ,`cmm`, `cmm2` ,`std_id` ,`adv_id`)
		VALUES ('$key',  '', '', '$cmm2', '$std_id',  '$id')";
	}else
	{
		$sql="INSERT INTO  `tb_evaluation_advisor` (`eva_no` ,`score` ,`cmm` , `cmm2` ,`std_id` ,`adv_id`)
		VALUES ('$key',  '0', '$data', '$cmm2' , '$std_id',  '$id')";
	}
	//echo $sql."<br>";
	$query=mysql_query($sql);
}
unset($_SESSION['stdId']);
if ($query==1)
			{
			echo "<script>alert('ระบบทำการประเมิณสำเร็จ');location='../advisor/advisor_eva.php';</script>";
            }else {
			echo "<script>alert('ระบบทำการประเมิณไม่สำเร็จ');</script>";
			}


			

			
?>


