<?php
session_start();
include ("../sql_function/connect.php");
//if($hidAction == "Add") { //เช็คค่า hidden ที่่ส่งมา ถ้าเท่ากับ Add ให้โปรแกรมทำงาน
//$date = date("U"); //สร้างเลข 10 หลักมาจากเวลา เพื่อเอาไปใช้เป็นชื่อของรูป ป้องกันชื่อรูปซ้ำ 

	$major_id = $_SESSION['major_id'];
	$major = $_SESSION['major'];
	$faculty_id = $_SESSION['faculty_id'];
	$faculty = $_SESSION['faculty'];

	if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"../document/".$_FILES["fileUpload"]["name"]))
	{
		//echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
		//$objDB = mysql_select_db("mydatabase");
		

	$hmk=$_FILES["fileUpload"]["name"];
	$dm=date('d-m');
	$y=date('Y')+543;
	$dmy=$dm."-".$y;

	$sql=	"INSERT INTO   `tb_document` (
						    `tb_doc_name`,
							`tb_doc_des`,
							`faculty_id`,
							`major_id`,
							`fileUpload`,
							`date` 				
							 )
			VALUES 
				('$_POST[tb_doc_name]',
				'$_POST[tb_doc_des]',
			    '$faculty_id',
			    '$major_id',
				'$hmk',
				'$dmy');";		 	

			//$objQuery = mysql_query($strSQL);		
			if ($objQuery = mysql_query($sql) )
				{
				echo "<script>alert('เพิ่มข้อมูลเอกสารสำเร็จ');window.history.back();</script>";
	            }else {
				echo "<script>alert('เพิ่มข้อมูลเอกสารไม่สำเร็จ');</script>";
				}
		}




	//copy($file, "homework/$file"); //ก๊อปปี้รูปภาพไปยังโพลเดอร์ images 
	//chmod("homework/$file", 0664); //ทำการ changmode 

	//$query=mysql_query($sql);

?>
