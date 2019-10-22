<html>
<head>
<title>PDF Download</title>
</head>
<body>



<?php
require('fpdf.php');

class PDF extends FPDF {
	function SetThaiFont() {
		$this->AddFont('AngsanaNew','','angsa.php');
		$this->AddFont('AngsanaNew','B','angsab.php');
		$this->AddFont('AngsanaNew','I','angsai.php');
		$this->AddFont('AngsanaNew','IB','angsaz.php');
		$this->AddFont('CordiaNew','','cordia.php');
		$this->AddFont('CordiaNew','B','cordiab.php');
		$this->AddFont('CordiaNew','I','cordiai.php');
		$this->AddFont('CordiaNew','IB','cordiaz.php');
		$this->AddFont('Tahoma','','tahoma.php');
		$this->AddFont('Tahoma','B','tahomab.php');
		$this->AddFont('BrowalliaNew','','browa.php');
		$this->AddFont('BrowalliaNew','B','browab.php');
		$this->AddFont('BrowalliaNew','I','browai.php');
		$this->AddFont('BrowalliaNew','IB','browaz.php');
		$this->AddFont('KoHmu','','kohmu.php');
		$this->AddFont('KoHmu2','','kohmu2.php');
		$this->AddFont('KoHmu3','','kohmu3.php');
		$this->AddFont('MicrosoftSansSerif','','micross.php');
		$this->AddFont('PLE_Cara','','plecara.php');
		$this->AddFont('PLE_Care','','plecare.php');
		$this->AddFont('PLE_Care','B','plecareb.php');
		$this->AddFont('PLE_Joy','','plejoy.php');
		$this->AddFont('PLE_Tom','','pletom.php');
		$this->AddFont('PLE_Tom','B','pletomb.php');
		$this->AddFont('PLE_TomOutline','','pletomo.php');
		$this->AddFont('PLE_TomWide','','pletomw.php');
		$this->AddFont('DilleniaUPC','','dill.php');
		$this->AddFont('DilleniaUPC','B','dillb.php');
		$this->AddFont('DilleniaUPC','I','dilli.php');
		$this->AddFont('DilleniaUPC','IB','dillz.php');
		$this->AddFont('EucrosiaUPC','','eucro.php');
		$this->AddFont('EucrosiaUPC','B','eucrob.php');
		$this->AddFont('EucrosiaUPC','I','eucroi.php');
		$this->AddFont('EucrosiaUPC','IB','eucroz.php');
		$this->AddFont('FreesiaUPC','','free.php');
		$this->AddFont('FreesiaUPC','B','freeb.php');
		$this->AddFont('FreesiaUPC','I','freei.php');
		$this->AddFont('FreesiaUPC','IB','freez.php');
		$this->AddFont('IrisUPC','','iris.php');
		$this->AddFont('IrisUPC','B','irisb.php');
		$this->AddFont('IrisUPC','I','irisi.php');
		$this->AddFont('IrisUPC','IB','irisz.php');
		$this->AddFont('JasmineUPC','','jasm.php');
		$this->AddFont('JasmineUPC','B','jasmb.php');
		$this->AddFont('JasmineUPC','I','jasmi.php');
		$this->AddFont('JasmineUPC','IB','jasmz.php');
		$this->AddFont('KodchiangUPC','','kodc.php');
		$this->AddFont('KodchiangUPC','B','kodc.php');
		$this->AddFont('KodchiangUPC','I','kodci.php');
		$this->AddFont('KodchiangUPC','IB','kodcz.php');
		$this->AddFont('LilyUPC','','lily.php');
		$this->AddFont('LilyUPC','B','lilyb.php');
		$this->AddFont('LilyUPC','I','lilyi.php');
		$this->AddFont('LilyUPC','IB','lilyz.php');
	}
	
	function conv($string) {
		return iconv('UTF-8', 'TIS-620', $string);
	}
}
?>

<?php
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ci_fst";
	mysql_connect($hostname, $username, $password)or die("Can't connect DB".mysql_error()) ;
	mysql_select_db($dbname) or die ("Can't connect DB".mysql_error()); 
	mysql_db_query($dbname,"SET NAMES UTF8"); // เลือกฐานข้อมูล


									$sql = "SELECT  tb_student_preinformation.*,
                                    province.*,amphur.*,tumbon.*,tb_prefix.*,province_lo.*,
                                    cate_lo.*,lo_name.*,tb_student_category.*





                                    FROM tb_student_preinformation
                                    LEFT JOIN  province ON tb_student_preinformation.stdpre_province = province.id
                                    LEFT JOIN  amphur ON tb_student_preinformation.stdpre_amphur = amphur.id  
                                    LEFT JOIN  tumbon ON tb_student_preinformation.stdpre_tumbon = tumbon.id  
                                    LEFT JOIN  tb_prefix ON tb_student_preinformation.stdpre_prefix = tb_prefix.tb_prefix_id  
                                    LEFT JOIN  province_lo ON tb_student_preinformation.stdpre_seprovince = province_lo.id 
                                    LEFT JOIN  cate_lo ON tb_student_preinformation.stdpre_secate = cate_lo.id 
                                    LEFT JOIN  lo_name ON tb_student_preinformation.stdpre_senamelo = lo_name.id
                                    LEFT JOIN  tb_student_category ON tb_student_preinformation.stdpre_offercate = tb_student_category.tb_stdcate_id

                                    
                                    
                                    WHERE tb_student_preinformation.stdpre_id = '1'";
                            $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $stdpre_id = $row['stdpre_id'];
                            $stdpre_name = $row['stdpre_name'];
                            $stdpre_lastname = $row['stdpre_lastname'];
                            $stdpre_idcard= $row['stdpre_idcard'];
                            $stdpre_year= $row['stdpre_year'];
                            $stdpre_major= $row['stdpre_major'];
                            $stdpre_sex= $row['stdpre_sex'];
                            $stdpre_gpa= $row['stdpre_gpa'];
                            $stdpre_birth= $row['stdpre_birth'];
                            $stdpre_tall= $row['stdpre_tall'];
                            $stdpre_weight= $row['stdpre_weight'];
                            $stdpre_identification= $row['stdpre_identification'];
                            $stdpre_nationality= $row['stdpre_nationality'];
                            $stdpre_religion= $row['stdpre_religion'];
                            $stdpre_draft= $row['stdpre_draft'];
                            $stdpre_homeno= $row['stdpre_homeno'];
                            $stdpre_soi= $row['stdpre_soi'];
                            $stdpre_rode= $row['stdpre_rode'];
                            $Pname= $row['Pname'];


                            $Aname= $row['Aname'];
                            $Tname= $row['Tname'];
                            $stdpre_post= $row['stdpre_post'];
                            $stdpre_tel= $row['stdpre_tel'];
                            $stdpre_email= $row['stdpre_email'];
                            $stdpre_fathername= $row['stdpre_fathername'];
                            $stdpre_fatheroccu= $row['stdpre_fatheroccu'];
                            $stdpre_fatherocculo= $row['stdpre_fatherocculo'];
                            $stdpre_fathertel= $row['stdpre_fathertel'];
                            $stdpre_mothername= $row['stdpre_mothername'];
                            $stdpre_motheroccu= $row['stdpre_motheroccu'];
                            $stdpre_motherocculo= $row['stdpre_motherocculo'];
                            $stdpre_mothertel= $row['stdpre_mothertel'];
                            $stdpre_ability= $row['stdpre_ability'];
                            $stdpre_workings= $row['stdpre_workings'];
                            $stdpre_seprovince= $row['stdpre_seprovince'];
                            $stdpre_secate= $row['stdpre_secate'];
                            $LNname= $row['LNname'];
                            $stdpre_offerlo= $row['stdpre_offerlo'];
                            $stdpre_offerposi= $row['stdpre_offerposi'];
                            $tb_stdcate_cate= $row['tb_stdcate_cate'];
                            $stdpre_duration= $row['stdpre_duration'];
                            $stdpre_imgpro = $row['stdpre_imgpro'];
                            $stdpre_imggpa = $row['stdpre_imggpa'];





                            //ตัวแปรเนื้อหา
                            $seeyc = 'อื่นๆ :';
                            $seeyc = 'อื่นๆ :';
                            $stucate = 'สมัครโครการ :';
                            $position = 'สมัครตำแหน่ง :';
                            $seetc = 'อื่นๆ :';
                            $seplace = 'สถานที่ :';
                            $sepro = 'พื้นที่จังหวัด :';
                            $secate = 'งานประเภท :';
                            $sepro = 'พื้นที่จังหวัด';
							$workings = 'ผลงาน/รางวัลที่เคยได้รับ :';
                            $program = 'โปรแกรมคอมพิวเตอร์ :';
                            $mtel = 'เบอร์โทรติดต่อ :';
                            $mocculo = 'สถานที่ทำงาน :';
                            $moccu = 'อาชีพ';
                            $mname = 'ชื่อ-สกุลมารดา :';
                            $ftel = 'เบอร์โทรติดต่อ :';
                            $focculo = 'สถานที่ทำงาน :';
                            $foccu = 'อาชีพ :';
                            $fname = 'ชื่อ-สกุลบิดา :';
                            $Email = 'Email :';
                            $tel = 'โทรศัพท์ :';
                            $post = 'รหัสไปรษณย์ :';
                            $tambon = 'เขต/ตำบล :';
                            $amphur = 'อำเภอ :';
                            $province = 'จังหวัด :';
                            $rode = 'ถนน';
                            $soi = 'ตรอก/ซอย :';
                            $homeno = 'เลขที่ :';
                            $draf = 'การเกณฑ์ทหาร :';
                            $reli = 'ศาสนา :';
                            $nation = 'สัญชาติ :';
                            $iden = 'บัตรประชาชน :';
                            $birth = 'วันเกิด :';
                            $weigth = 'น้ำหนัก :';
                            $tall = 'ความสูง :';
                            $birth = 'วันเกิด :';
                            $gpa = 'เกรดเฉลี่ย :';
                            $sex = 'เพศ :';
							$major = 'สาขา :';
                        	$code = 'รหัสนักศึกษา :';
                            $year = 'ชั้นปี :';
                            $wenL = '           ';
                            $wenS = ' ';
                            mysql_close();
                             
?>

<?php

$pdf = new PDF();

$pdf->SetThaiFont();

$pdf->SetMargins(20, 20);

$pdf->AddPage();

$pdf->SetFont('AngsanaNew', 'B', 18);
$txt = $pdf->conv("กลุ่มงานส่งเสริมวิชาการและการวิจัย");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->SetFont('AngsanaNew', 'B', 16);
$pdf->Ln(10);
$txt = $pdf->conv("คณะวิทยาศาสตร์และเทคโนโลยีฯ มหาวิทยาลัยฟาฏอนี");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->Ln(10);
$txt = $pdf->conv("ใบสมัครโครงการสหกิจศึกษาและการฝึกงาน");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->Ln(10);
$txt = $pdf->conv("CO-OP JOB APPLICATION  FORM");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');

$pdf->Image("student_pic/$stdpre_imgpro", 150, 20, 50);

$pdf->Ln(10);
$pdf->Image("student_pic/FIU-2015.jpg", 20, 18, 40);

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ประวัติส่วนตัวนักศึกษา");
$pdf->MultiCell(0, 7, $txt, 0, 'J');



$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 1 รายละเอียดเกี่ยวกับนักศึกษา");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ :".$wenS.$stdpre_name.$wenS.$stdpre_lastname.$wenL.$code.$wenS.$stdpre_idcard.
	$wenL.$year.$wenS.$stdpre_year.$wenL.$major.$wenS.$stdpre_major);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เพศ".$wenS.$stdpre_sex.$wenL.$birth.$wenS.$stdpre_birth.
	$wenL.$tall.$wenS.$stdpre_tall.$wenL.$weigth.$wenS.$stdpre_weight.$wenL.$gpa.$wenS.$stdpre_gpa);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("บัตรปชระชาชน :".$wenS.$stdpre_identification.$wenL.$nation.$wenS.$stdpre_nationality.
	$wenL.$reli.$wenS.$stdpre_religion);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 2 การเกณฑ์ทหาร");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("การเกณฑ์ทหาร :".$wenS.$stdpre_draft);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 3 ที่อยู่ปัจจุบัน");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เลขที่ :".$wenS.$stdpre_homeno.$wenL.$soi.$wenS.$stdpre_soi.
	$wenL.$rode.$wenS.$stdpre_rode.$wenL.$province.$wenS.$Pname.$wenL.$amphur.$wenS.
	$Aname);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เขต/ตำบล :".$wenS.$Tname.$wenL.$post.$wenS.$stdpre_post.
	$wenL.$tel.$wenS.$stdpre_tel);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("อีเมลล์ติดต่อ :".$wenS.$stdpre_email);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 4 ข้อมูลเกี่ยวกับครอบครัว");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ-สกุลบิดา :".$wenS.$stdpre_fathername.$wenL.$foccu.$wenS.$stdpre_fatheroccu);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ทำงาน :".$wenS.$stdpre_fatherocculo.$wenL.$ftel.$wenS.$stdpre_fatherocculo);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ-สกุลมารดา :".$wenS.$stdpre_mothername.$wenL.$moccu.$wenS.$stdpre_motheroccu);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ทำงาน :".$wenS.$stdpre_motherocculo.$wenL.$mtel.$wenS.$stdpre_mothertel);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 5 ความสามารถดานคอมพิวเตอร์");
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("โปรแกรมคอมพิวเตอร์ที่ถนัดได้แก่ :".$wenS.$stdpre_ability);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ผลงาน/รางวัลที่เคยได้รับได้แก่ :".$wenS.$stdpre_workings);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 6 การเลือกสถานที่ฝึกงาน :");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ฝึกงาน :".$wenS.$LNname);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("อื่นๆ :".$wenS.$stdpre_offerlo);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สมัครตำแหน่ง :".$wenS.$stdpre_offerposi.$wenL.$stucate.$wenS.$tb_stdcate_cate);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ระยะเวลาฝึกงานตั้งแต่วันที่ :".$wenS.$stdpre_duration);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("-----------------------------------------------------------------------------------------------------------------");
$pdf->MultiCell(0, 7, $txt, 0, 'C');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ติดต่อสอบถาม.. นางสาวรุสนาณี เบ็ญลาตีฟ เจ้าหน้าที่ส่งเสริมงานสหกิจศึกษาและฝึกงาน คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยฟาฏอนี 135/8 ม.3 ต.เขาตูม อ.ยะรัง จ.ปัตตานี 94160 โทรศัพท์/แฟกซ์. 073-418-584 มือถือ. 0828237925");
$pdf->MultiCell(0, 7, $txt, 0, 'J');








$pdf->Output("MyPDF/$stdpre_id.pdf","F");

?>
คลิกเพื่อดาวน์โหลด <a href="MyPDF/<?php echo $stdpre_id ?>.pdf"> กดที่นี่ </a> 
</body>
</html>