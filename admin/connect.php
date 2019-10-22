<?php 
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";

	mysql_connect($hostname, $username, $password)or die("Can't connect DB") ;
	mysql_select_db($dbname) or die ("Can't connect DB"); 
	mysql_db_query($dbname,"SET NAMES UTF8");
	
?>