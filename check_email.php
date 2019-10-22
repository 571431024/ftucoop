<?php 
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB");
	mysql_select_db($dbname) or die("Can't connect DB"); 
	mysql_db_query($dbname, "SET NAMES UTF8");


$stdpre_email = isset($_POST['email']) ? trim($_POST['email']) : "";
$Query = mysql_query("SELECT * FROM tb_student_preinformation WHERE stdpre_email='{$stdpre_email}'");
$Rows = mysql_num_rows($Query);
if ($Rows == 1) {
    echo "1";
}
?>
