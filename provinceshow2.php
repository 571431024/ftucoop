<?php
header("content-type: text/xml; charset=UTF-8");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<province2>";
	// ค่าที่รับมา หรือค่าจังหวัด ตำบล อำเภอที่เลือก
	$city2 = $_GET[city2];
	$amphur2 = $_GET[amphur2];
	// ติดต่อฐานข้อมูล
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB".mysql_error()) ;
	mysql_select_db($dbname) or die ("Can't connect DB".mysql_error());
	mysql_db_query($dbname,"SET NAMES UTF8"); // เลือกฐานข้อมูล
	echo "<city2>";
		$sql = "SELECT Pid, Pname FROM province ORDER BY Pname ASC";
		$result = mysql_query($sql);
		while ($fetcharr = mysql_fetch_array($result)) {
		echo "<a$fetcharr[Pid]>$fetcharr[Pid]_$fetcharr[Pname]</a$fetcharr[Pid]>";
		}
		echo "</city2>";
	echo "<amphur2>";
		$sql = "SELECT Aid, Aname FROM amphur WHERE provinceID='$city2'";
		$result = mysql_query($sql);
		while ($fetcharr = mysql_fetch_array($result)) {
		echo "<a$fetcharr[Aid]>$fetcharr[Aid]_$fetcharr[Aname]</a$fetcharr[Aid]>";
		}
		echo "</amphur2>";
	echo "<tumbon2>";
		$sql = "SELECT Tid, Tname FROM tumbon WHERE amphurID='$amphur2'";
		$result = mysql_query($sql);
		while ($fetcharr = mysql_fetch_array($result)) {
		echo "<a$fetcharr[Tid]>$fetcharr[Tid]_$fetcharr[Tname]</a$fetcharr[Tid]>";
		}
		echo "</tumbon2>";
	echo "</province2>";
mysql_free_result($result);
mysql_close();
?>