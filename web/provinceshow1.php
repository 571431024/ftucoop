<?php
header("content-type: text/xml; charset=UTF-8");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<province1>";
// ค่าที่รับมา หรือค่าจังหวัด ตำบล อำเภอที่เลือก
$city1 = $_GET[city1];
$amphur1 = $_GET[amphur1];
// ติดต่อฐานข้อมูล
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB".mysql_error()) ;
	mysql_select_db($dbname) or die ("Can't connect DB".mysql_error()); 
	mysql_db_query($dbname,"SET NAMES UTF8"); // เลือกฐานข้อมูล
echo "<city1>";
$sql = "SELECT id, PLname FROM province_lo ORDER BY PLname ASC";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[PLname]</a$fetcharr[id]>";
}
echo "</city1>";
echo "<amphur1>";
$sql = "SELECT id, CLname FROM cate_lo WHERE provinceID_lo='$city1'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[CLname]</a$fetcharr[id]>";
}
echo "</amphur1>";
echo "<tumbon1>";
$sql = "SELECT id, LNname FROM lo_name WHERE cateID_lo='$amphur1'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[LNname]</a$fetcharr[id]>";
}
echo "</tumbon1>";
echo "</province1>";
mysql_free_result($result);
mysql_close();
?>