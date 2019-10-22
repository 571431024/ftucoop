<?php
include ("connect.php");


	$tb_prefix_tb_prefix_id=$_POST['tb_prefix_id'];
	$tb_std_name=$_POST['name'];
	$tb_std_lastname=$_POST['lastname'];
	$tb_std_identification=$_POST['iden'];
	$tb_std_password=$_POST['tb_std_password'];
	$tb_std_major=$_POST['tb_std_major'];
	$tb_std_year=$_POST['tb_std_year'];
	$tb_std_gpa=$_POST['gpa'];
	$tb_std_birthday=$_POST['birthday'];
	$tb_std_sex=$_POST['stdpre_sex'];
	$tb_std_tall=$_POST['tall'];
	$tb_std_weight=$_POST['weight'];
	$tb_std_identi=$_POST['idcard'];
	$tb_std_nationality=$_POST['nation'];
	$tb_std_religion=$_POST['reli'];
	$tb_std_address=$_POST['tb_std_address'];  //นักศึกษาต่าชาติ
	$tb_std_draft=$_POST['optionsRadios'];

	
	$tb_std_tel=$_POST['mobile'];
	$tb_std_email=$_POST['email'];
	$tb_std_fathername=$_POST['father'];
	$tb_std_fatheroccu=$_POST['occu'];
	$tb_std_fatherocculo=$_POST['occulo'];
	$tb_std_fathertel=$_POST['fathertel'];
	$tb_std_mothername=$_POST['mother'];
	$tb_std_motheroccu=$_POST['occumother'];
	$tb_std_motherocculo=$_POST['occulomother'];
	$tb_std_mothertel=$_POST['mothertel'];
	$tb_std_ability=$_POST['capability'];
	$tb_std_workings=$_POST['workings'];
	
	$tb_std_offerlo=$_POST['etc'];
	$tb_std_offerlo_d=$_POST['tb_std_offerlo_d'];
	$tb_std_offerposi=$_POST['position'];
	$tb_stdcate_id=$_POST['tb_stdcate_id'];
	$tb_std_duration=$_POST['tb_std_duration'];
	$tb_std_status_id=$_POST['tb_std_status_id'];
	
	





	$_FILES['tb_std_img']['tmp_name'];
	if($_FILES['tb_std_img']['name'] != "")
	{
			
			copy($_FILES['tb_std_img']['tmp_name'],"../student_pic/".$_FILES['tb_std_img']['name']);  //warnning
	}
	$tb_std_img = $_FILES['tb_std_img']['name'];


	$_FILES['tb_std_imggpa']['tmp_name'];
	if($_FILES['tb_std_imggpa']['name'] != "")
	{
			
			copy($_FILES['tb_std_imggpa']['tmp_name'],"../student_tran/".$_FILES['tb_std_imggpa']['name']); 
			 //warnning
	}
	$tb_std_imggpa = $_FILES['tb_std_imggpa']['name'];

	

$sql = "INSERT INTO tb_student (tb_prefix_tb_prefix_id, tb_std_name,tb_std_lastname,
	tb_std_identification,tb_std_password,tb_std_major,tb_std_year,tb_std_gpa,tb_std_sex,tb_std_birthday,tb_std_tall,tb_std_weight,
	tb_std_identi,tb_std_nationality,tb_std_religion,tb_std_draft,tb_std_address,tb_std_tel,tb_std_email,tb_std_fathername
	,tb_std_fatheroccu,tb_std_fatherocculo,tb_std_fathertel,tb_std_mothername,tb_std_motheroccu,tb_std_motherocculo,tb_std_mothertel

	,tb_std_ability,tb_std_workings,tb_std_offerlo,tb_std_offerlo_d,tb_std_offerposi,tb_student_category_tb_stdcate_id,tb_std_duration,tb_std_status_id
	,tb_std_img,tb_std_imggpa) 

VALUES('$tb_prefix_tb_prefix_id', '$tb_std_name','$tb_std_lastname','$tb_std_identification','$tb_std_password','$tb_std_major'
,'$tb_std_year','$tb_std_gpa','$tb_std_sex','$tb_std_birthday','$tb_std_tall','$tb_std_weight'
,'$tb_std_identi','$tb_std_nationality','$tb_std_religion','$tb_std_draft','$tb_std_address'
,'$tb_std_tel'
,'$tb_std_email','$tb_std_fathername','$tb_std_fatheroccu','$tb_std_fatherocculo'
,'$tb_std_fathertel','$tb_std_mothername','$tb_std_motheroccu','$tb_std_motherocculo'
,'$tb_std_mothertel','$tb_std_ability','$tb_std_workings','$tb_std_offerlo','$tb_std_offerlo_d','$tb_std_offerposi','$tb_stdcate_id','$tb_std_duration','$tb_std_status_id'


 ,'$tb_std_img', '$tb_std_imggpa' )";

	mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
	
	echo "<script>alert('เพิ่มข้อมูลการสมัครสหกิจศึกษาและการฝึกงานสำเร็จ');window.location = \"success_form.php\";</script>";

	
	
							

?>