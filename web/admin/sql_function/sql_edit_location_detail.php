<?php


if(empty($submit))
{
include ("../sql_function/connect.php");
$query = "select * from tb_localtion where tb_lo_id='$tb_lo_id' "  ;
	$result = mysql_query($query);
		while($result_row = mysql_fetch_row($result))
	{
	$tb_lo_id = $result_row[0];
	$tb_lo_name = $result_row[1];
	$tb_lo_address = $result_row[2];
	$tb_lo_tel = $result_row[3];
	$tb_lo_email = $result_row[4];
	$picture = $result_row[5];	

	}
}
else
{
	include ("../sql_function/connect.php");

	$tb_lo_id=$_POST['tb_lo_id'];
	$tb_lo_name=$_POST['tb_lo_name'];
	$tb_lo_address=$_POST['tb_lo_address'];
	$tb_lo_tel=$_POST['tb_lo_tel'];
	$tb_lo_email=$_POST['tb_lo_email'];

	$path="../picture/".$row[5];
	$filename = $_FILES['fileUpload']['name'];
	if($filename != "")
	{
		
		copy($_FILES['fileUpload']['tmp_name'],"../picture/".$_FILES['fileUpload']['name']);  
	}
	
include ("../sql_function/connect.php");
$sql = "UPDATE  tb_localtion SET tb_lo_id = '$tb_lo_id', tb_lo_name = '$tb_lo_name', 
tb_lo_tel = '$tb_lo_tel', tb_lo_address = '$tb_lo_address' , tb_lo_email  = '$tb_lo_email', 
picture='$filename'
WHERE tb_lo_id = '$tb_lo_id'";

	mysql_query($sql) or die ("Error SQL");
	
	echo "<script>alert('Edit location Complete');window.location = \"../admin/location.php\";</script>";

							
}
?>