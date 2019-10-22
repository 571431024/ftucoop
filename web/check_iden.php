<?php 
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB");
	mysql_select_db($dbname) or die("Can't connect DB"); 
	mysql_db_query($dbname, "SET NAMES UTF8");



$stdpre_idcard = isset($_POST['iden']) ? trim($_POST['iden']) : "";
$Query = mysql_query("SELECT * FROM tb_student_preinformation WHERE stdpre_idcard='{$stdpre_idcard}'");
$Rows = mysql_num_rows($Query);
if ($Rows == 1) {
    echo "1";
}
