<?php
header("content-type: text/xml; charset=UTF-8");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<province>";
// ค่าที่รับมา หรือค่าจังหวัด ตำบล อำเภอที่เลือก
$city = $_GET[city];
$amphur = $_GET[amphur];
// ติดต่อฐานข้อมูล
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB".mysql_error()) ;
	mysql_select_db($dbname) or die ("Can't connect DB".mysql_error()); 
	mysql_db_query($dbname,"SET NAMES UTF8"); // เลือกฐานข้อมูล
echo "<city>";
$sql = "SELECT Pid, Pname FROM province ORDER BY Pname ASC";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[Pid]>$fetcharr[Pid]_$fetcharr[Pname]</a$fetcharr[Pid]>";
}
echo "</city>";
echo "<amphur>";
$sql = "SELECT Aid, Aname FROM amphur WHERE provinceID='$city'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[Aid]>$fetcharr[Aid]_$fetcharr[Aname]</a$fetcharr[Aid]>";
}
echo "</amphur>";
echo "<tumbon>";
$sql = "SELECT Tid, Tname FROM tumbon WHERE amphurID='$amphur'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[Tid]>$fetcharr[Tid]_$fetcharr[Tname]</a$fetcharr[Tid]>";
}
echo "</tumbon>";
echo "</province>";
mysql_free_result($result);
mysql_close();
?>