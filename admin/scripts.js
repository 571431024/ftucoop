function logincheck(){
	var usr = document.getElementById("username").value;
	var pass = document.getElementById("password").value;

	if(usr == ""){
		alert("กรุณากรอกชื่อผู้ใช้เพื่อเข้าสู่ระบบ");
    	document.getElementById('username').focus();
    	return false;
	}else if(pass == ""){
		alert("กรุณากรอกรหัสผ่านเพื่อเข้าสู่ระบบ");
    	document.getElementById('password').focus();
    	return false;
	}
	return true;
}

function LoginFail(){
	alert("ชื่อผู้ใช้หรือหรัสผ่านไม่ถูกต้อง");
	window.location.replace("index.php");
	return false;
}

function userBan(){
	alert("บัญชีของคุณถูกระงับ กรุณาติดต่อผู้ดูแลระบบ");
	window.location.replace("index.php");
	return false;
}

function validateAddTeacher(){
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var pass2 = document.getElementById("password2").value;
	var perid = document.getElementById("perid").value;
	var prefix = document.getElementById("prefix").value;
	var name = document.getElementById("fullname").value;

	if(user == ""){
		alert("กรุณากรอกชื่อผู้ใช้");
    	document.getElementById('username').focus();
    	return false;
	}else if(pass == ""){
		alert("กรุณากรอกรหัสผ่าน");
    	document.getElementById('password').focus();
    	return false;
	}else if(pass2 == ""){
		alert("กรุณายืนยันรหัสผ่าน");
    	document.getElementById('password2').focus();
    	return false;
	}else if(pass != pass2){
		alert("รหัสผ่านไม่ตรงกัน");
    	document.getElementById('password2').focus();
    	return false;
	}else if(perid == ""){
		alert("กรุณากรอกรหัสบุคลากร");
    	document.getElementById('perid').focus();
    	return false;
	}else if(prefix == "no"){
		alert("กรุณาเลือกคำนำหน้าชื่อ");
    	document.getElementById('prefix').focus();
    	return false;
	}else if(name == ""){
		alert("กรุณากรอก ชื่อ-สกุล");
    	document.getElementById('fullname').focus();
    	return false;
	}
	return true;
}

function checkTeaSearch(){
	var major = document.getElementById("major").value;
	var search = document.getElementById("search").value;

	if(major == "" && search == ""){
		alert("คุณต้องเลือก สาขาหรือกรอกรหัสบุคลากร ก่อนกดปุ่มค้นหา");
    	document.getElementById('search').focus();
    	return false;
    }
    return true;
}


function confirmDelete(){
	var x = confirm("ยืนยันการลบ");
  	if(x){
     	return true;
  	}else{
    	return false;
    }
}

function validateAddQua(){
	var edulevel = document.getElementById("edulevel").value;
	var eduname = document.getElementById("eduname").value;
	var fdep = document.getElementById("fdep").value;
	var year = document.getElementById("year").value;
	var institute = document.getElementById("institute").value;

	if(edulevel == "no"){
		alert("กรุณาเลือกระดับการศึกษา");
		document.getElementById("edulevel").focus();
		return false;
	}else if(eduname == ""){
		alert("กรุณาเลือกวุฒิการศึกษา");
		document.getElementById("eduname").focus();
		return false;
	}else if(fdep == ""){
		alert("กรุณากรอกสาขาที่จบ");
		document.getElementById("fdep").focus();
		return false;
	}else if(year == ""){
		alert("กรุณากรอกปีก่ีศึกษาที่จบ");
		document.getElementById("year").focus();
		return false;
	}else if(institute == ""){
		alert("กรุณากรอกสถาบันที่สำเร็จการศึกษา");
		document.getElementById("institute").focus();
		return false;
	}
	return true;
}

function validateAddWork(){
	var worktime1 = document.getElementById("worktime1").value;
	var worktime2 = document.getElementById("worktime2").value;
	var pos = document.getElementById("pos").value;
	var orga = document.getElementById("orga").value;

	if(worktime1 == ""){
		alert("กรุณากรอกวันที่เริ่มทำงาน");
		document.getElementById("worktime1").focus();
		return false;
	}else if(worktime2 == ""){
		alert("กรุณากรอกวินที่สิ้นสุดทำงาน");
		document.getElementById("worktime2").focus();
		return false;
	}else if(pos == ""){
		alert("กรุณากรอกตำแหน่งงาน");
		document.getElementById("pos").focus();
		return false;
	}else if(orga == ""){
		alert("กรุณากรอกหน่วยงานที่ทำงาน");
		document.getElementById("orga").focus();
		return false;
	}
	return true;
}


function validateStartSemester(){
	var sem = document.getElementById("sem").value;
	var year = document.getElementById("year").value;

	if(sem == "no"){
		alert("กรุณาเลือกภาคเรียน");
		document.getElementById("sem").focus();
		return false;
	}else if(year == ""){
		alert("กรุณากรอกปีการศึกษา");
		document.getElementById("year").focus();
		return false;
	}
}

function checkSubmitFile(id){
	var file = document.getElementById("file"+id).value;

	if(file == ""){
		alert("กรุณาเพิ่มไฟล์ก่อนจะกดปุ่มส่ง");
		document.getElementById("file"+id).focus();
		return false;
	}	
	return true;
}

function checkSubmitFile2(id){
	var file = document.getElementById("file2"+id).value;

	if(file == ""){
		alert("กรุณาเพิ่มไฟล์ก่อนจะกดปุ่มส่ง");
		document.getElementById("file2"+id).focus();
		return false;
	}	
	return true;
}


function checkAddSubject(){
	var subid = document.getElementById("subid").value;
	var thname = document.getElementById("thname").value;
	//var enname = document.getElementById("enname").value;
	//var subdes = document.getElementById("subdes").value;
	var credit = document.getElementById("credit").value;
	var major = document.getElementById("mg").value;

	if(subid == ""){
		alert("กรุณากรอกรหัสวิชา");
		document.getElementById("subid").focus();
		return false;
	}else if(thname == ""){
		alert("กรุณากรอกชื่อวิชา");
		document.getElementById("thname").focus();
		return false;
	}else if(credit == ""){
		alert("กรุณากรอกหน่วยกิตของวิชา");
		document.getElementById("credit").focus();
		return false;
	}else if(major == "no"){
		alert("กรุณาเลือกสาขาของวิชา");
		document.getElementById("mg").focus();
		return false;
	}

	return true;
}

function checkaAddteaching(){
	var teacher = document.getElementById("teacher").value;
	var subject = document.getElementById("subject").value;
	var period = document.getElementById("period").value;
	var student = document.getElementById("student").value;
	var ttype = document.getElementById("ttype").value;
	var duty = document.getElementById("duty").value;

	if(teacher == "no"){
		alert("กรุณาเลือกอาจารย์ผู้สอน");
		document.getElementById("teacher").focus();
		return false;
	}else if(subject == "no"){
		alert("กรุณาเลือกวิชาที่จะสอน");
		document.getElementById("subject").focus();
		return false;
	}else if(period == ""){
		alert("กรุณากรอกจำนวนคาบที่สอนต่อเทอม");
		document.getElementById("period").focus();
		return false;
	}else if(student == ""){
		alert("กรุณากรอกจำนวนนักศึกษาที่สอน");
		document.getElementById("student").focus();
		return false;
	}else if(ttype == ""){
		alert("กรุณากรอกลักษณะการสอน");
		document.getElementById("ttype").focus();
		return false;
	}else if(duty == "no"){
		alert("กรุณาเลือกหน้าที่ใสรายวิชา");
		document.getElementById("duty").focus();
		return false;
	}
	return true;
}

function checkAddWBname(){
	var wname = document.getElementById("wbname").value;

	if(wname == ""){
		alert("กรุณากรอกชื่อภาระงาน");
		document.getElementById("wbname").focus();
		return false;
	}
	return true;
}

function checkAddWTname(){
	var wname = document.getElementById("wtname").value;

	if(wname == ""){
		alert("กรุณากรอกชื่อภาระงาน");
		document.getElementById("wtname").focus();
		return false;
	}
	return true;
}

function checkAddp04(){
	var p04name = document.getElementById("p04name").value;

	if(p04name == ""){
		alert("กรุณากรอกชื่อเกณฑ์ ป.04");
		document.getElementById("p04name").focus();
		return false;
	}
	return true;
}

function checkAddp04m(){
	var p04mname = document.getElementById("p04mname").value;

	if(p04mname == ""){
		alert("กรุณากรอกชื่อเกณฑ์ย่อย");
		document.getElementById("p04mname").focus();
		return false;
	}
	return true;
}

function chackAddsubBasic(){
	var name = document.getElementById("wb").value;

	if(name == "no"){
		alert("กรุณาเลือกชื่องานที่ต้องส่ง");
		document.getElementById("wb").focus();
		return false;
	}
	return true;
}

function chackAddsubTech(){
	var name = document.getElementById("wt").value;

	if(name == "no"){
		alert("กรุณาเลือกชื่องานที่ต้องส่ง");
		document.getElementById("wt").focus();
		return false;
	}
	return true;
}

/*
function checkformLogin(form){
  if (frmLongin.username.value == "") {
    alert("กรุณากรอกชื่อผู้ใช้");
    frmLongin.username.focus();
    return false;
  }else if(frmLongin.password.value == ""){
  	alert("กรุณากรอกหรัสผ่าน");
  	frmLongin.password.focus();
  	return false;
  }else if(document.frmLongin.rank.selectedIndex === 0){
  	alert("กรุณาเลือกสถานะ");
  	return false;
  }
  return true;
}

function LoginFail(){
	alert("ชื่อผู้ใช้หรือหรัสผ่านไม่ถูกต้อง");
	window.location.replace("index.php");
	return false;
}

function editSuccess(){
	alert("แก้ไขข้อมูลเรียบร้อยแล้ว");
	window.location.replace("../Profile.php");
	return false;
}

function validateEditPass(){

	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;
	var oldPassword = document.getElementById("oldPassword").value;
	var oldPass = document.getElementById("oldPass").value;

	if(password == ""){
		alert("กรุณากรอกรหัสผ่านที่ต้องการจะเปลี่ยน");
    	document.getElementById('password').focus();
    	return false;
	}else if(password2 == ""){
		alert("กรุณากรอกรหัสผ่านใหม่ของคุณอีกครั้ง");
    	document.getElementById('password2').focus();
    	return false;
    }else if(oldPassword == ""){
		alert("กรุณากรอกรหัสผ่านเก่าของคุณเพื่อยืนยัน");
    	document.getElementById('oldPassword').focus();
    	return false;
	}else if(password != password2){
		alert("รหัสผ่านใหม่ที่คุณกรอกไม่เหมือนกัน");
    	document.getElementById('password2').focus();
    	return false;
	}else if(oldPassword != oldPass){
		alert("รหัสผ่านเดิมไม่ถูกต้อง");
    	document.getElementById('oldPassword').focus();
    	return false;
	}
	return true;
}

function editPass(){
	alert("เปลี่ยนรหัสผ่านเรียบร้อยแล้ว");
	window.location.replace("../editPassword.php");
	return false;
}

function checkSearchRegister(){

	var id = document.getElementById("id").value;

	if(id == ""){
		alert("กรุณากรอกรหัสประจำตัวอาจารย์หรือนักเรียนเพื่อค้นหา ข้อมูลจากระบบ");
		document.getElementById('id').focus();
		return false;
	}
	return true;
}

function checkUpdateTea(){
	var name = document.getElementById("fullname").value;
	//var birthdate = getElementById("birthdate").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	
	if(name == ""){
		alert("ชื่อไม่สามารถว่างได้");
		document.getElementById('fullname').focus();
		return false;
	//}else if(birthdate == ""){
		//alert("วันเกิดไม่สามารถว่างได้");
		//document.getElementById('birthdate').focus();
		//return false;
	}else if(email == ""){
		alert("อีเมลไม่สามารถว่างได้");
		document.getElementById('email').focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สามารถว่างได้");
		document.getElementById('phone').focus();
		return false;
	}
	return true;
}

function checkEditAdminPro(){
	var name = document.getElementById("fullname").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;

	if(name == ""){
		alert("ชื่อไม่สามารถเว้นว่างได้");
		document.getElementById('fullname').focus();
		return false;
	}else if(email == ""){
		alert("อีเมลไม่สามารถเว้นว่างได้");
		document.getElementById('email').focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สามารถเว้นว่างได้");
		document.getElementById('phone').focus();
		return false;
	}
	return true;
}

function confirmDelete(){
	var x = confirm("ยืนยันการลบ");
  	if(x){
     	return true;
  	}else{
    	return false;
    }
}

function validateAddAdmin(){
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var pass2 = document.getElementById("pass2").value;
	var name = document.getElementById("fullname").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;

	if(user == ""){
		alert("ชื่อผู้ใช้ไม่สารมารภเว้นว่างได้");
		document.getElementById("user").focus();
		return false;
	}else if(pass == ""){
		alert("กรุณากรอกหรัสผ่าน");
		document.getElementById("pass").focus();
		return false;
	}else if(pass2 == ""){
		alert("กรุณากรอกยืนยันรหัสผ่าน");
		document.getElementById("pass2").focus();
		return false;		
	}else if(pass != pass2){
		alert("รหัสผ่านไม่ตรงกัน");
		document.getElementById("pass2").focus();
		return false;
	}else if(name == ""){
		alert("ชื่อ-สกุลไม่สารมารภเว้นว่างได้");
		document.getElementById("fullname").focus();
		return false;
	}else if(email == ""){
		alert("อีเมลไม่สารมารภเว้นว่างได้");
		document.getElementById("email").focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สารมารภเว้นว่างได้");
		document.getElementById("phone").focus();
		return false;
	}
	return true;
}

function validateAddTea(){
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var pass2 = document.getElementById("pass2").value;
	var name = document.getElementById("fullname").value;
	var gen1 = document.getElementById("gender1").checked;
	var gen2 = document.getElementById("gender2").checked;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var genCheck = false;

	if(gen1 || gen2){
		genCheck = true;
	}

	if(user == ""){
		alert("ชื่อผู้ใช้ไม่สารมารภเว้นว่างได้");
		document.getElementById("user").focus();
		return false;
	}else if(pass == ""){
		alert("กรุณากรอกหรัสผ่าน");
		document.getElementById("pass").focus();
		return false;
	}else if(pass2 == ""){
		alert("กรุณากรอกยืนยันรหัสผ่าน");
		document.getElementById("pass2").focus();
		return false;		
	}else if(pass != pass2){
		alert("รหัสผ่านไม่ตรงกัน");
		document.getElementById("pass2").focus();
		return false;
	}else if(name == ""){
		alert("ชื่อ-สกุลไม่สารมารภเว้นว่างได้");
		document.getElementById("fullname").focus();
		return false;
	}else if(!genCheck){
		alert("กรุณาระบุเพศ");
		document.getElementById("gender1").focus();
		return false;
	}else if(email == ""){
		alert("อีเมลไม่สารมารภเว้นว่างได้");
		document.getElementById("email").focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สารมารภเว้นว่างได้");
		document.getElementById("phone").focus();
		return false;
	}
	return true;
}

function validateAddClass(){
	var cName = document.getElementById("className").value;
	var tClass = document.getElementById("teaClass").value;

	if(cName == ""){
		alert("กรุณาระบุชั้นเรียน");
		document.getElementById("className").focus();
		return false;
	}else if(tClass == "no"){
		alert("กรุณาเลือกอาจารย์ประจำชั้น");
		document.getElementById("teaClass").focus();
		return false;
	}
	return true;
}

function validateAddSTD(){
	var cName = document.getElementById("className").value;
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var pass2 = document.getElementById("pass2").value;
	var name = document.getElementById("fullname").value;
	var gen1 = document.getElementById("gender1").checked;
	var gen2 = document.getElementById("gender2").checked;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var genCheck = false;

	if(gen1 || gen2){
		genCheck = true;
	}

	if(cName == "no"){
		alert("กรุณาระบุชั้นเรียน");
		document.getElementById("className").focus();
		return false;
	}else if(user == ""){
		alert("ชื่อผู้ใช้ไม่สารมารภเว้นว่างได้");
		document.getElementById("user").focus();
		return false;
	}else if(pass == ""){
		alert("กรุณากรอกหรัสผ่าน");
		document.getElementById("pass").focus();
		return false;
	}else if(pass2 == ""){
		alert("กรุณากรอกยืนยันรหัสผ่าน");
		document.getElementById("pass2").focus();
		return false;		
	}else if(pass != pass2){
		alert("รหัสผ่านไม่ตรงกัน");
		document.getElementById("pass2").focus();
		return false;
	}else if(name == ""){
		alert("ชื่อ-สกุลไม่สารมารภเว้นว่างได้");
		document.getElementById("fullname").focus();
		return false;
	}else if(!genCheck){
		alert("กรุณาระบุเพศ");
		document.getElementById("gender1").focus();
		return false;
	}else if(email == ""){
		alert("อีเมลไม่สารมารภเว้นว่างได้");
		document.getElementById("email").focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สารมารภเว้นว่างได้");
		document.getElementById("phone").focus();
		return false;
	}
	return true;
}

function validateEditSTD(){
	var cName = document.getElementById("className").value;
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var pass2 = document.getElementById("pass2").value;
	var name = document.getElementById("fullname").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;

	if(cName == "no"){
		alert("กรุณาระบุชั้นเรียน");
		document.getElementById("className").focus();
		return false;
	}else if(user == ""){
		alert("ชื่อผู้ใช้ไม่สารมารภเว้นว่างได้");
		document.getElementById("user").focus();
		return false;
	}else if(pass == ""){
		alert("กรุณากรอกหรัสผ่าน");
		document.getElementById("pass").focus();
		return false;
	}else if(pass2 == ""){
		alert("กรุณากรอกยืนยันรหัสผ่าน");
		document.getElementById("pass2").focus();
		return false;		
	}else if(pass != pass2){
		alert("รหัสผ่านไม่ตรงกัน");
		document.getElementById("pass2").focus();
		return false;
	}else if(name == ""){
		alert("ชื่อ-สกุลไม่สารมารภเว้นว่างได้");
		document.getElementById("fullname").focus();
		return false;
	}else if(email == ""){
		alert("อีเมลไม่สารมารภเว้นว่างได้");
		document.getElementById("email").focus();
		return false;
	}else if(phone == ""){
		alert("เบอร์โทรศัพท์ไม่สารมารภเว้นว่างได้");
		document.getElementById("phone").focus();
		return false;
	}
	return true;
}


function validateAddSG(){
	var cName = document.getElementById("sgName").value;

	if(cName == ""){
		alert("กรุณาระบุหมวดวิชา");
		document.getElementById("sgName").focus();
		return false;
	}
	return true;
}

function validateAddSubject(){
	var sgName = document.getElementById("gSub").value;
	var tSub = document.getElementById("teaSub").value;
	var tID = document.getElementById("subID").value;
	var tName = document.getElementById("subName").value;

	if(sgName == "no"){
		alert("กรุณาระบุหมวดวิชา");
		document.getElementById("gSub").focus();
		return false;
	}else if(tSub == "no"){
		alert("กรุณาระบุอาจารย์ผู้สอน");
		document.getElementById("teaSub").focus();
		return false;
	}else if(tID == ""){
		alert("กรุณาระบุรหัสวิชา");
		document.getElementById("subID").focus();
		return false;
	}else if(tName == ""){
		alert("กรุณาระบุชื่อวิชา");
		document.getElementById("subName").focus();
		return false;
	}
	return true;
}

function validateEditSub(){
	var sg = document.getElementById("sGroup").value;
	var sID = document.getElementById("sID").value;
	var sName = document.getElementById("sName").value;
	var tSub = document.getElementById("teaSub").value;

	if(sg == "no"){
		alert("กรุณาเลือกหมวดวิชา");
		document.getElementById("sGroup").focus();
		return false;
	}else if(sID == ""){
		alert("กรุณาระบุรหัสวิชา");
		document.getElementById("sID").focus();
		return false;
	}else if(sName == ""){
		alert("กรุณาระบุชื่อวิชา");
		document.getElementById("sName").focus();
		return false;
	}else if(tSub == "no"){
		alert("กรุณาเลือกผู้สอน");
		document.getElementById("teaSub").focus();
		return false;
	}
	return true;
}

function validateAddStudy(){
	var cN = document.getElementById("className").value;
	var sN = document.getElementById("subName").value;

	if(cN == "no"){
		alert("กรุณาเลือกชั้นเรียน");
		document.getElementById("className").focus();
		return false;
	}else if(sN == "no"){
		alert("กรุณาเลือกวิชาเรียน");
		document.getElementById("subName").focus();
		return false;
	}
	return true;
}

function validateCreateExam(){
	var sName = document.getElementById("SubName").value;
	var exName = document.getElementById("examName").value;
	var exScore = document.getElementById("score").value;

	if(sName == "no"){
		alert("กรุณาเลือกวิชา");
		document.getElementById("SubName").focus();
		return false;
	}else if(exName == ""){
		alert("กรุณากรอกชื่อข้อสอบ");
		document.getElementById("examName").focus();
		return false;
	}else if(exScore == ""){
		alert("กรุณาระบุคะแนนเต็ม");
		document.getElementById("score").focus();
		return false;
	}
	return true;
}

function confirmExamStat(){
	var x = confirm("กรุณายืนยัน");
  	if(x){
     	return true;
  	}else{
    	return false;
    }
}

*/