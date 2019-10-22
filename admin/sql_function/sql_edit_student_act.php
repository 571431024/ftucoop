<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("Location: ../index.php");
}

?>
<?php

if (empty($submit)) {
	include("connect.php");


	$tb_act_id = $_POST['tb_act_id'];
	$tb_act_title = $_POST['tb_act_title'];
	$tb_act_description = $_POST['tb_act_description'];
	$tb_act_faculty=$_POST['tb_act_faculty'];
	$tb_act_major=$_POST['tb_act_major'];

	$sql = "UPDATE  tb_activity_news SET tb_act_id = '$tb_act_id', 
										 tb_act_title = '$tb_act_title',
										 tb_act_description = '$tb_act_description',
										 tb_act_faculty = '$tb_act_faculty',
										 tb_act_major = '$tb_act_major'


			WHERE tb_act_id = '$tb_act_id'";

	mysql_query($sql) or die("ข้อมูลผิดพลาด" . mysql_error());

	echo "<script>alert('แก้ไขข้อมูลข่าวสารสำเร็จ');window.history.back();</script>";
}

if ($_FILES["tb_act_img"]["name"] != "") {

	if (move_uploaded_file(
		$_FILES["tb_act_img"]["tmp_name"],
		"../../img_frontweb/" . $_FILES["tb_act_img"]["name"]
	)) {

		//*** Delete Old File ***//

		@unlink("../../img_frontweb/" . $_POST["hdnOldFile"]);
		$sql = "UPDATE tb_activity_news ";
		$sql .= " SET tb_act_img = '" . $_FILES["tb_act_img"]["name"] . "' WHERE tb_act_id = '$tb_act_id'";
		mysql_query($sql) or die("ข้อมูลผิดพลาด" . mysql_error());
	}
}

if ($_FILES["tb_act_file"]["name"] != "") {

	if (move_uploaded_file(
		$_FILES["tb_act_file"]["tmp_name"],
		"../../file_frontweb/" . $_FILES["tb_act_file"]["name"]
	)) {

		//*** Delete Old File ***//

		@unlink("../../file_frontweb/" . $_POST["hdnOldFilen"]);
		$sql = "UPDATE tb_activity_news ";
		$sql .= " SET tb_act_file = '" . $_FILES["tb_act_file"]["name"] . "' WHERE tb_act_id = '$tb_act_id'";
		mysql_query($sql) or die("ข้อมูลผิดพลาด" . mysql_error());
	}
}

?>