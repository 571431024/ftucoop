<?php


		if(empty($submit))
		{
		include ("../sql_function/connect.php");

			$tb_prefix_id=$_POST['tb_prefix_id'];  //ส่วนข้อมูลส่วนตัว
			$tb_std_id=$_POST['tb_std_id']; 
			$tb_std_identification=$_POST['tb_std_identification'];
			$tb_std_password=$_POST['tb_std_password'];
			$tb_std_name=$_POST['tb_std_name'];
			$tb_std_lastname=$_POST['tb_std_lastname'];

			$tb_std_sex=$_POST['tb_std_sex'];
			$tb_std_identi=$_POST['tb_std_identi'];
			$tb_std_gpa=$_POST['tb_std_gpa'];
			$tb_std_birthday=$_POST['tb_std_birthday'];
			$tb_std_tall=$_POST['tb_std_tall'];
			$tb_std_weight=$_POST['tb_std_weight'];
			$tb_std_nationality=$_POST['tb_std_nationality'];
			$tb_std_major=$_POST['tb_std_major'];
			$tb_std_year=$_POST['tb_std_year'];
			$tb_std_religion=$_POST['tb_std_religion'];



			$tb_std_draft=$_POST['tb_std_draft'];  //ส่วนการเกณทหาร


			$tb_std_homeno=$_POST['tb_std_homeno'];  //ส่วนที่อยู่ปัจจุบัน
			$tb_std_address=$_POST['tb_std_address'];
			$tb_std_soi=$_POST['tb_std_soi'];
			$tb_std_rode=$_POST['tb_std_rode'];
			$tb_std_province=$_POST['tb_std_province'];
			$tb_std_amphur=$_POST['tb_std_amphur'];
			$tb_std_tumbon=$_POST['tb_std_tumbon'];
			$tb_std_post=$_POST['tb_std_post'];
			$tb_std_tel=$_POST['tb_std_tel'];
			$tb_std_email=$_POST['tb_std_email'];



			$tb_std_fathername=$_POST['tb_std_fathername'];  //ส่วนข้อมูลเกี่ยวกับครอบครัว
			$tb_std_fatheroccu=$_POST['tb_std_fatheroccu']; 
			$tb_std_fatherocculo=$_POST['tb_std_fatherocculo']; 
			$tb_std_fathertel=$_POST['tb_std_fathertel']; 
			$tb_std_mothername=$_POST['tb_std_mothername']; 
			$tb_std_motheroccu=$_POST['tb_std_motheroccu']; 
			$tb_std_motherocculo=$_POST['tb_std_motherocculo']; 
			$tb_std_mothertel=$_POST['tb_std_mothertel']; 

			$tb_std_ability=$_POST['tb_std_ability'];  //ความสามารถทางด้านคอมพิวเตอร์
			$tb_std_workings=$_POST['tb_std_workings'];




			
			



		$sql = "UPDATE  tb_student SET tb_std_id = '$tb_std_id', tb_std_identification = '$tb_std_identification', 
		tb_std_password = '$tb_std_password', tb_std_name = '$tb_std_name' , tb_std_lastname  = '$tb_std_lastname', 
		tb_std_sex = '$tb_std_sex', tb_std_major = '$tb_std_major' , 
		tb_std_identi = '$tb_std_identi' , tb_std_gpa = '$tb_std_gpa' , tb_std_tall = '$tb_std_tall' ,tb_std_weight = '$tb_std_weight' ,
		tb_std_nationality = '$tb_std_nationality' , tb_std_religion = '$tb_std_religion' ,
		tb_std_year  = '$tb_std_year', tb_std_birthday = '$tb_std_birthday' , tb_prefix_tb_prefix_id = '$tb_prefix_id',

		tb_std_draft = '$tb_std_draft' , 

		tb_std_address  = '$tb_std_address',
		tb_std_homeno  = '$tb_std_homeno', tb_std_soi  = '$tb_std_soi' , tb_std_rode  = '$tb_std_rode', tb_std_province  = '$tb_std_province' ,
		tb_std_amphur  = '$tb_std_amphur', tb_std_tumbon  = '$tb_std_tumbon' , tb_std_post  = '$tb_std_post', 	tb_std_tel  = '$tb_std_tel' ,
		tb_std_email = '$tb_std_email' , 

		tb_std_fathername = '$tb_std_fathername' ,  tb_std_fatheroccu  = '$tb_std_fatheroccu' ,
		tb_std_fatherocculo = '$tb_std_fatherocculo' ,  tb_std_fathertel  = '$tb_std_fathertel' ,
		tb_std_mothername = '$tb_std_mothername' ,  tb_std_motheroccu  = '$tb_std_motheroccu' ,
		tb_std_motherocculo = '$tb_std_motherocculo' ,  tb_std_mothertel  = '$tb_std_mothertel' ,

		tb_std_ability = '$tb_std_ability' ,  tb_std_workings  = '$tb_std_workings' 


		WHERE tb_std_id = '$tb_std_id'";

			mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
			
			echo "<script>alert('แก้ไขข้อมูลส่วนตัวเสร็จสมบูรณ์');window.location = \"../admin/student_bio.php?flag=%20$tb_std_id\";</script>";
			// echo "<script>alert('แก้ไขข้อมูลส่วนตัวเสร็จสมบูรณ์');location.reload();</script>";

									
		}


		if($_FILES["tb_std_img"]["name"] != "")  //เอกสารประกอบการสมัคร

					{

					if(move_uploaded_file($_FILES["tb_std_img"]["tmp_name"],
					"../student_pic/".$_FILES["tb_std_img"]["name"]))

					{

					//*** Delete Old File ***//        

					@unlink("../student_pic/".$_POST["hdnOldFile"]);
					$sql = "UPDATE tb_student ";
					$sql .=" SET tb_std_img = '".$_FILES["tb_std_img"]["name"]."' WHERE tb_std_id = '$tb_std_id'";
					mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


					}

			}


			if($_FILES["tb_std_imggpa"]["name"] != "")  //เอกสารประกอบการสมัคร

					{

					if(move_uploaded_file($_FILES["tb_std_imggpa"]["tmp_name"],
					"../student_tran/".$_FILES["tb_std_imggpa"]["name"]))

					{

					//*** Delete Old File ***//        

					@unlink("../student_tran/".$_POST["hdnOldFile"]);
					$sql = "UPDATE tb_student ";
					$sql .=" SET tb_std_imggpa = '".$_FILES["tb_std_imggpa"]["name"]."' WHERE tb_std_id = '$tb_std_id'";
					mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());


					}

			}



?>

