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
	$dbname="reserve";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB".mysql_error()) ;
	mysql_select_db($dbname) or die ("Can't connect DB".mysql_error()); 
	mysql_db_query($dbname,"SET NAMES UTF8"); // เลือกฐานข้อมูล
echo "<city>";
$sql = "SELECT fa_id, fa_name FROM se_faculty ORDER BY fa_name ASC";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[fa_id]>$fetcharr[fa_id]_$fetcharr[fa_name]</a$fetcharr[fa_id]>";
}
echo "</city>";
echo "<amphur>";
$sql = "SELECT se_room_id, se_room_name FROM se_room WHERE fa_id='$city'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[se_room_id]>$fetcharr[se_room_id]_$fetcharr[se_room_name]</a$fetcharr[se_room_id]>";
}
echo "</amphur>";
echo "<tumbon>";
$sql = "SELECT id_room_id, id_room_code FROM se_id_room WHERE se_room_id='$amphur'";
$result = mysql_query($sql);
while ($fetcharr = mysql_fetch_array($result)) {
echo "<a$fetcharr[id_room_id]>$fetcharr[id_room_id]_$fetcharr[id_room_code]</a$fetcharr[id_room_id]>";
}
echo "</tumbon>";
echo "</province>";
mysql_free_result($result);
mysql_close();
?>