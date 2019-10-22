<?php
include ("../sql_function/connect.php");
extract($_GET);
$tb_doc_id = $flag;
$sql="delete from tb_document where tb_doc_id = '$tb_doc_id'";
	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
		echo "<script>alert('ข้อมูลเอกสารสำเร็จ');window.history.back();</script>";
?>
