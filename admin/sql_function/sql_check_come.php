<?php
include ("../sql_function/connect.php");


extract($_GET);
$tb_std_id = $flag;


$sql="UPDATE tb_student SET tb_std_come=tb_std_come+1 WHERE tb_std_id='$tb_std_id'";
	mysql_query($sql) or die ("Error");
		echo "<script>alert('บันทึกการมาของนักศึกษาสำเร็จ');window.history.back();</script>";


/*
mysql_query("update topic set numvisit=numvisit+1 where id='$id' ");
*/

?>