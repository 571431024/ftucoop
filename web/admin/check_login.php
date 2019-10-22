<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>F T U Apprenticeship</title>
		<script language="JavaScript">
			function chknull() {
				var a = document.form1;

				if (a.user.value == '') {
					alert("คุณยังไม่ได้กรอก Username");
					a.username.focus();
					return false;
				} else if (a.pwd.value == '') {
					alert("คุณยังไม่ได้กรอก Password");
					a.pwd.focus();
					return false;
				}

				return true;
			}
		</script>
		<style>
			body {
				background-color: #292b2c;
			}
		</style>
	</head>

	<body>
		<table width="652" height="637" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td height="31">&nbsp;
				</td>
			</tr>
			<tr>
				<td height="393">
					<table width="476" height="318" border="0" align="center" cellpadding="0" cellspacing="0">

							<?php 
									$hostname="localhost";
									$username="root";
									$password="";
									$dbname="ci_fst";

									mysql_connect($hostname, $username, $password)or die("Can't connect DB") ;
									mysql_select_db($dbname) or die ("Can't connect DB"); 
									mysql_db_query($dbname,"SET NAMES UTF8");

									$sql = "SELECT * FROM tb_admin WHERE tb_admin_id_log ='$_POST[user]' and tb_admin_password ='$_POST[pwd]'";
									$dbquery = mysql_query("set names utf-8");
									$query = mysql_query($sql);
									$data = mysql_fetch_array($query);
									$rows = mysql_num_rows($query);

									$sql2 = "SELECT * FROM tb_student WHERE tb_std_identification ='$_POST[user]' and tb_std_password ='$_POST[pwd]'";
									$query2 = mysql_query($sql2);
									$data2 = mysql_fetch_array($query2);
									$rows2 = mysql_num_rows($query2);

									$sql3 = "SELECT * FROM tb_advisor WHERE tb_ads_id_log ='$_POST[user]' and tb_ads_password ='$_POST[pwd]'";
									$query3 = mysql_query($sql3);
									$data3 = mysql_fetch_array($query3);
									$rows3 = mysql_num_rows($query3);

									$sql4 = "SELECT * FROM tb_mentor WHERE tb_mentor_id_log ='$_POST[user]' and tb_mentor_password ='$_POST[pwd]'";
									$query4 = mysql_query($sql4);
									$data4 = mysql_fetch_array($query4);
									$rows4 = mysql_num_rows($query4);

									$sql5 = "SELECT * FROM tb_department WHERE tb_dept_id_log ='$_POST[user]' and tb_dept_password ='$_POST[pwd]'";
									$query5 = mysql_query($sql5);
									$data5 = mysql_fetch_array($query5);
									$rows5 = mysql_num_rows($query5);

									$sql6 = "SELECT * FROM td_dean WHERE tb_dean_id_log ='$_POST[user]' and tb_dean_password ='$_POST[pwd]'";
									$query6 = mysql_query($sql6);
									$data6 = mysql_fetch_array($query6);
									$rows6 = mysql_num_rows($query6);
									
									
									$major_id4 = $data4 ['major_id'];
									$tb_std_major = $data2 ['tb_std_major'];
									$tb_dept_major = $data5 ['tb_dept_major'];
									$tb_dean_faculty = $data6['tb_dean_faculty'];
									$sqlMajor = "SELECT * FROM tb_major AS m LEFT JOIN tb_faculty AS f ON m.tb_faculty_id=f.tb_faculty_id WHERE tb_major_name='$tb_dept_major' OR tb_major_name='$tb_std_major' OR tb_major_id='$major_id4' OR tb_faculty_name='$tb_dean_faculty'";
									$queryMajor = mysql_query($sqlMajor);
									$dataMajor = mysql_fetch_assoc($queryMajor);
									$rowsMajor = mysql_num_rows($queryMajor);
									
							?>
	</body><?php 

				//Admin control
			if ($rows == 1) {

				$_SESSION ['id'] = $data ['tb_admin_id'];
				$_SESSION ['name'] = $data ['tb_admin_name'];
				$_SESSION ['lastname'] = $data ['tb_admin_lastname'];
				$_SESSION ['stt'] = "Administrator";
				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธิผู้ดูแลระบบ</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='./admin/index.php'\",4000);</script>";

				//Student control
			} else if ($rows2 == 1) {

			    $_SESSION ['id'] = $data2 ['tb_std_id'];
				$_SESSION ['name'] = $data2 ['tb_std_name'];
				$_SESSION ['lastname'] = $data2 ['tb_std_lastname'];
				$_SESSION ['status'] = $data2 ['tb_std_status_id'];
				$_SESSION ['picture'] = $data2 ['tb_std_img'];
				$_SESSION ['picDept'] = $data5 ['tb_dept_img'];
				$_SESSION ['major'] = $data2['tb_std_major'];
				$_SESSION ['faculty_id'] = $dataMajor['tb_faculty_id'];
				$_SESSION ['faculty'] = $dataMajor['tb_faculty_name'];
				$_SESSION ['major_id'] = $dataMajor['tb_major_id'];
				$_SESSION ['stt'] = "นักศึกษา";

				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธินักศึกษา</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='f_Science/department_Info/student_Info/index.php'\",4000);</script>";

				// Advisor Control			
			} else if ($rows3 == 1) {

				$_SESSION ['id'] = $data3 ['tb_ads_id'];
				$_SESSION ['name'] = $data3 ['tb_ads_name'];
				$_SESSION ['lastname'] = $data3 ['tb_ads_lastname'];
				$_SESSION ['lastname'] = $data3 ['tb_ads_lastname'];
				$_SESSION ['major'] = $data3 ['tb_ads_major'];
				$_SESSION ['picture'] = $data3 ['tb_ads_img'];
				$_SESSION ['stt'] = "อาจารย์ที่ปรึกษา";
				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธิอาจารย์ที่ปรึกษา</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='f_Science/department_Info/advisor_Info/index.php'\",4000);</script>";

				//Mentor control
			} else if ($rows4 == 1) {

				$_SESSION ['id'] = $data4 ['tb_mentor_id'];
				$_SESSION ['name'] = $data4 ['tb_mentor_name'];
				$_SESSION ['lastname'] = $data4 ['tb_mentor_lastname'];
				$_SESSION ['tb_mentor_id_log'] = $data4 ['tb_mentor_id_log'];
				$_SESSION ['major'] = $data4 ['major_id'];
				$_SESSION ['picture'] = $data4 ['tb_mentor_img']; 
				$_SESSION ['stt'] = "พี่เลี้ยง";

				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธิพี่เลี้ยง</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='f_Science/department_Info/mentor_Info/index.php'\",4000);</script>";

				//Department control
			} else if ($rows5 == 1) {

				$_SESSION ['id'] = $data5 ['tb_dept_id'];
				$_SESSION ['name'] = $data5 ['tb_dept_name'];
				$_SESSION ['lastname'] = $data5 ['tb_dept_lastname'];
				$_SESSION ['tb_dept_id_log'] = $data5 ['tb_dept_id_log'];
				$_SESSION ['major'] = $data5 ['tb_dept_major'];
				$_SESSION ['faculty_id'] = $dataMajor ['tb_faculty_id'];
				$_SESSION ['faculty'] = $dataMajor ['tb_faculty_name'];
				$_SESSION ['major_id'] = $dataMajor ['tb_major_id'];
				$_SESSION ['picture'] = $data5 ['tb_dept_img'];
				$_SESSION ['stt'] = "อาจารย์ประจำสาขา"; 


				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธิอาจารย์ประจำสาขา</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='f_Science/department_Info/index.php'\",4000);</script>";

				//Dean control
			} else if ($rows6 == 1) {

				$_SESSION ['id'] = $data6 ['tb_dean_id'];
				$_SESSION ['name'] = $data6 ['tb_dean_name'];
				$_SESSION ['lastname'] = $data6 ['tb_dean_lastname'];
				$_SESSION ['tb_dept_id_log'] = $data6 ['tb_dean_id_log'];
				$_SESSION ['faculty_id'] = $dataMajor ['tb_faculty_id'];
				$_SESSION ['faculty'] = $dataMajor ['tb_faculty_name'];
				$_SESSION ['faculty'] = $data6 ['tb_dean_faculty'];
				$_SESSION ['picture_dean'] = $data6 ['tb_dean_img'];
				$_SESSION ['stt'] = "คณะบดี";


				?><tr>
		<td align="center" height="43" colspan="4" scope="row">
			<font color="#FFFFFF">ยินดีต้อนรับคุณ <font color="#00BFFF"><?php echo $_SESSION['name'];
																			?><?php echo $_SESSION['lastname'];
																					?></font></br>เรากำลังพาท่านเข้าสู่ระบบในสิทธิคณะบดี</font>
		</td>
	</tr><?php echo "<script>setTimeout(\"window.location='f_Science/index.php'\",4000);</script>";

			} else {

				?><tr>
		<td height="43" colspan="4" align="center" scope="row"><span class="style19">
				<font color="#FF0000">ไม่สามารถเข้าสู่ระบบได้<br /><br />โปรดตรวจสอบ Username และ Password
					ใหม่อีกครั้งค่ะ</font>
			</span></td>
	</tr><?php echo "<script>setTimeout(\"window.location='../index.php'\",2000);</script>";
			}

			?><tr>
		<th height="41" colspan="4" scope="row">
			<font color="#FFFFFF">โปรดรอสักครู่ </font>
			<p><img src="../admin/image/hourglass.svg" height="100" width="100" /></p>
		</th>
	</tr>
	</table>

	</html>