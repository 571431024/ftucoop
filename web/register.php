<!DOCTYPE html>
<html lang="en">

<?php 
  include ("head.php"); 
?>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">FTU Coop</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="has-children">
                  <a href="blog.php">News</a>
                  <ul class="dropdown">
                    <li><a href="#">News1</a></li>
                    <li><a href="#">News2</a></li>
                    <li><a href="#">News3</a></li>
                    <li><a href="#">News4</a></li>
                  </ul>
                </li>

                <!-- <li><a href="discount.html">Discount</a></li> -->
                <!-- <li><a href="about.html">About</a></li> -->
                <!-- <li><a href="blog.html">Blog</a></li>
                
                <li class="active"><a href="contact.html">Contact</a></li> -->
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="register.php" class="pl-3 pr-3 text-black">Register</a>
                </li>
                <li>
                  <a href="admin/login.php" class="pl-3 pr-3 text-black">Login</a>
                </li>
                <!-- <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li> -->

              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>





    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/home-slide3.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="font-weight-light" style="color:black">Register</h1>
            <div><a href="index.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <span
                class="text-white">Regiter</span></div>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">

            <form class="p-5 bg-white" enctype="multipart/form-data" method="post" action="sql_add_student_preinformation.php">
              <center>
                <img src="http://e-learning.ftu.ac.th/pluginfile.php/1/theme_academi/logo/1444104333/logo.png">
                <h6> ศูนย์สหกิจศึกษาและฝึกประสบการณ์วิชาชีพ มหาวิทยาลัยฟาฏอนี
                  </br>
                  FTU Cooperative Education and Profession Training Center</h6>
              </center></br>
              <hr>
              <p>
                <h5>1. การเลือกสถานที่ฝึกงาน</h5>
              </p>

              <p style="color:red">ค้นหาที่ฝึกงาน</p>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">สถานที่ปฏิบัติงาน</label>
                  <select id="city1" class="form-control" name="city1" required autofocus>
                    <option value="">เลือกพื้นที่จังหวัด</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <select id="amphur1" class="form-control" name="amphur1" required autofocus>
                    <option value="">เลือกประเภทงาน</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">ชื่อสถานประกอบการ</label>
                  <select id="tumbon1" class="form-control" name="tumbon1">
                    <option value="">เลือกสถานที่</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">อื่นๆ โปรดระบุ</label>
                  <input type="email" id="email" class="form-control" placeholder="ชื่อสถานประกอบการ" required autofocus>
                </div>

              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">พื้นที่จังหวัด</label>
                  <select id="city2" class="form-control" name="city2">
                      <option value="">เลือกจังหวัด</option>
                    </select>
                </div>

               <!-- code for select provice work place -->
               <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
                <script type="text/javascript">
                  $_province2 = function (Obj2) {
                    var city2 = $('#city2');
                    var amphur2 = $('#amphur2');
                    var tumbon2 = $('#tumbon2');
                    if (Obj2.attr('id') == 'city2') {
                      var query2 = 'city2=' + city2.val();
                    } else if (Obj2.attr('id') == 'amphur2') {
                      var query2 = 'city2=' + city2.val() + '&amphur2=' + amphur2.val();
                    } else {
                      var query2 = 'city2=' + city2.val() + '&amphur2=' + amphur2.val() + '&tumbon2=' +
                        tumbon2.val();
                    }
                    $.ajax({
                      url: "provinceshow2.php?" + query2,
                      dataType: 'xml',
                      success: function (data2) {
                        var cityNode2 = $(data2).find("city2");
                        var items2 = cityNode2.find('*');
                        $_addSelectOption2(city2, items2, city2.val());

                        var amphurNode2 = $(data2).find("amphur2");
                        var items2 = amphurNode2.find('*');
                        $_addSelectOption2(amphur2, items2, amphur2.val());

                        var tumbonNode2 = $(data2).find("tumbon2");
                        var items2 = tumbonNode2.find('*');
                        $_addSelectOption2(tumbon2, items2, tumbon2.val());
                      }
                    });
                  }
                  $_addSelectOption2 = function (obj2, items2, selected2) {
                    var obj_op2 = obj2.find('option');
                    obj_op2.each(function () {
                      if ($(this).val() != "") {
                        $(this).remove();
                      }
                    });
                    items2.each(function () {
                      var itemsplit2 = $(this).text().split("_");
                      var iTemSelect2 = selected2 == itemsplit2[0] ? 'selected="selected"' :
                        "";
                      obj2.append('<option value="' + itemsplit2[0] + '" ' + iTemSelect2 +
                        '>' + itemsplit2[1] + '</option>');
                    });
                  }
                  $(document).ready(function () {
                    $('#city2 ,#amphur2').change(function () {
                      $_province2($(this));
                    });
                    $_province2($('#city2'));
                  });
                </script>

                <div class="col-md-6">
                  <label class="text-black" for="lname">ประเภทงาน</label>
                  <input type="text" id="lname" class="form-control" required autofocus>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">รายละเอียดสถานที่</label>
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                    placeholder="ตำแหนงที่ตั้ง..." required autofocus></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">สมัครตำแหน่ง</label>
                  <input type="text" id="fname" class="form-control" required autofocus>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">สมัครโครการ</label>
                  <?php require "student_cate.php"; ?>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">ระยะเวลาปฏิบัติงาน เริ่ม (From)</label>
                  <input type="date" id="fname" class="form-control" required autofocus>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">ถึง (Untill)</label>
                  <input type="date" id="lname" class="form-control" required autofocus>
                </div>
              </div>

                <!-- select work-->
                <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
                            <script type="text/javascript">
                                $_province1 = function(Obj1) {
                                    var city1 = $('#city1');
                                    var amphur1 = $('#amphur1');
                                    var tumbon1 = $('#tumbon1');
                                    if (Obj1.attr('id') == 'city1') { //ตรวจสอบการคลิก list menu จังหวัด
                                        var query1 = 'city1=' + city1.val();
                                    } else if (Obj1.attr('id') == 'amphur1') { //ตรวจสอบการคลิก list menu อำเภอ
                                        var query1 = 'city1=' + city1.val() + '&amphur1=' + amphur1.val();
                                    } else { //ค่าเริ่มต้น
                                        var query1 = 'city1=' + city1.val() + '&amphur1=' + amphur1.val() +
                                            '&tumbon1=' + tumbon1.val();
                                    }
                                    $.ajax({
                                        url: "provinceshow1.php?" + query1, //ร้องขอข้อมูล
                                        dataType: 'xml', //รับข้อมูลแบบxml
                                        success: function(data1) {
                                            var cityNode1 = $(data1).find("city1");
                                            var items1 = cityNode1.find('*');
                                            $_addSelectOption1(city1, items1, city1.val());

                                            var amphurNode1 = $(data1).find("amphur1");
                                            var items1 = amphurNode1.find('*');
                                            $_addSelectOption1(amphur1, items1, amphur1.val());

                                            var tumbonNode1 = $(data1).find("tumbon1");
                                            var items1 = tumbonNode1.find('*');
                                            $_addSelectOption1(tumbon1, items1, tumbon1.val());
                                        }
                                    });
                                }
                                $_addSelectOption1 = function(obj1, items1, selected1) {
                                    var obj_op1 = obj1.find('option');
                                    obj_op1.each(function() { //ลบoptionของ list menu
                                        if ($(this).val() != "") {
                                            $(this).remove();
                                        }
                                    });
                                    items1.each(function() {
                                        var itemsplit1 = $(this).text().split("_");
                                        var iTemSelect1 = selected1 == itemsplit1[0] ?
                                            'selected="selected"' : "";
                                        obj1.append('<option value="' + itemsplit1[0] + '" ' + iTemSelect1 +
                                            '>' + itemsplit1[1] + '</option>');
                                    });
                                }
                                $(document).ready(function() {
                                    $('#city1 ,#amphur1').change(function() {
                                        $_province1($(this));
                                    });
                                    $_province1($('#city1'));
                                });
                            </script>

              <br>
              <p>
                <h5>2. รายละเอียดเกี่ยวกับนักศึกษา</h5>
              </p>
              <hr>

              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">คำนำหน้าชื่อ</label>
                  <?php require "prefix.php"; ?>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">ชื่อ</label>
                  <input type="text" id="name" name="name" class="form-control" required autofocus>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="lastname">นามสกุล</label>
                  <input type="text" id="lastname" name="lastname" class="form-control" required autofocus>
                </div>
              </div>

              <!-- ตรวจสอบการใช้รหัสนักศึกษาซ้ำ -->
              <script type="text/javascript">
                $(document).ready(function () {
                  $('#btnSubmit').click(function () {
                    var check = check_iden();
                    check.success(function (data) {
                      if (data != 1) {
                        $('#register').submit();
                        return false;
                      }
                    });
                  });
                  $('#iden').focusout(function () {
                    var check = check_iden();
                    check.success(function (data) {
                      if (data == 1) {
                        $('.messageIDEN').html(
                          'รหัสนักศึกษานี้ ได้ถูกสมัครไว้แล้ว');
                      }
                    });
                  });
                });

                function check_iden() {
                  return $.ajax({
                    type: 'POST',
                    data: {
                      iden: $('#iden').val()
                    },
                    url: 'check_iden.php'
                  });
                }
              </script>
              <style>
                .messageIDEN {
                  font-size: 12px;
                  color: red;
                }
              </style>

              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">รหัสนักศึกษา</label>
                  <input type="text" class="form-control" id="iden" name="iden" required autofocus><span
                    class="messageIDEN"></span>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">คณะ</label>
                  <select class="form-control" id="tb_std_faculty" name="tb_std_faculty">
                    <option value="no">เลือกคณะ</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="lastname">สาขาวิชา</label>
                  <select class="form-control" id="tb_std_major" name="tb_std_major">
                    <option value="no">เลือกสาขา</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">ชั้นปี</label>
                  <select class="form-control" id="tb_std_year" name=" tb_std_year">
                    <option value="no">เลือกชั้นปี</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">เกรดเฉลี่ยสะสม</label>
                  <input type="text" class="form-control" id="gpa" name="gpa" required autofocus>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="lastname">วันเกิด</label>
                  <input class="form-control" type="date" id="birthday" name="birthday" required autofocus>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">เพศ</label>
                  <select class="form-control" id="stdpre_sex" name=" stdpre_sex">
                    <option value="no">เลือกเพศ</option>
                    <option>ชาย</option>
                    <option>หญิง</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">ส่วนสูง</label>
                  <input class="form-control" type="text" id="tall" name="tall" placeholder="ซม." required autofocus>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="lastname">น้ำหนัก</label>
                  <input class="form-control" type="text" id="weight" name="weight" placeholder="กก." required
                    autofocus>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4 mb-4 mb-md-0">
                  <label class="text-black" for="fname">เลขที่บัตรประชาชน</label>
                  <input type="text" class="form-control" id="idcard" name="idcard" required autofocus><span
                    class="messageID"></span>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="name">สัญชาติ</label>
                  <input type="text" class="form-control" id="nation" name="nation" required autofocus>
                </div>
                <div class="col-md-4">
                  <label class="text-black" for="lastname">ศาสนา</label>
                  <input type="text" class="form-control" id="reli" name="reli" required autofocus>
                </div>
              </div>

              <!-- ตรวจสอบการใช้เลขปจะจำตัวประชาชนซ้ำ -->
              <script type="text/javascript">
                $(document).ready(function () {
                  $('#btnSubmit').click(function () {
                    var check = check_idcard();
                    check.success(function (data) {
                      if (data != 1) {
                        $('#register').submit();
                        return false;
                      }
                    });

                  });
                  $('#iden').focusout(function () {
                    var check = check_idcard();
                    check.success(function (data) {
                      if (data == 1) {
                        $('.messageID').html(
                          'เลขที่บัตรประชาชน ได้ถูกใช้แล้ว');
                      }

                    });
                  });
                });

                function check_idcard() {
                  return $.ajax({
                    type: 'POST',
                    data: {
                      idcard: $('#idcard').val()
                    },
                    url: 'check_idcard.php'
                  });


                }
              </script>
              <style>
                .messageID {
                  font-size: 12px;
                  color: red;
                }
              </style>

              <br>
              <p>
                <h5>3. การเกณฑ์ทหาร</h5>
              </p>
              <hr>

              <div class="form-group">
                <!-- <label class="col-lg-8 control-label">การเกณฑ์ทหาร</label> -->
                <div class="radio">
                  <div class="col-md-8">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="ผ่านการเกณฑ์แล้ว" checked="">
                    ผ่านการเกณฑ์แล้ว
                  </div>

                  <div class="col-md-8">
                    <input type="radio" name="optionsRadios" id="optionsRadios2"
                      value="ยังไม่ได้เกณฑ์/อยู่ระหว่างการขอผ่อนผัน">
                    ยังไม่ได้เกณฑ์/อยู่ระหว่างการขอผ่อนผัน
                  </div>

                  <div class="col-md-8">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="ได้รับการยกเว้น">
                    ได้รับการยกเว้น
                  </div>
                </div>

                <br>
                <p>
                  <h4>4. ที่อยู่ปัจจุบัน</h4>
                </p>
                <hr>

                <div class="row form-group">
                  <div class="col-md-4 mb-4 mb-md-0">
                    <label class="text-black" for="fname">เลขที่</label>
                    <input type="text" class="form-control" id="nohome" name="nohome" required autofocus>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="name">ตรอก/ซอย</label>
                    <input class="form-control" type="text" id="soi" name="soi" required autofocus>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="lastname">ถนน</label>
                    <input class="form-control" type="text" id="rode" name="rode" required autofocus>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-4 mb-4 mb-md-0">
                    <label class="text-black" for="fname">จังหวัด</label>
                    <select id="city" class="form-control" name="city">
                      <option value="">--เลือกจังหวัด--</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="name">อำเภอ</label>
                    <select id="amphur" class="form-control" name="amphur">
                      <option value="">เลือกอำเภอ</option>
                    </select></p>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="lastname">เขต/ตำบล</label>
                    <select id="tumbon" class="form-control" name="tumbon">
                      <option value="">เลือกตำบล</option>
                    </select>
                  </div>
                </div>

                <!-- code for select provice -->
                <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
                <script type="text/javascript">
                  $_province = function (Obj) {
                    var city = $('#city');
                    var amphur = $('#amphur');
                    var tumbon = $('#tumbon');
                    if (Obj.attr('id') == 'city') {
                      var query = 'city=' + city.val();
                    } else if (Obj.attr('id') == 'amphur') {
                      var query = 'city=' + city.val() + '&amphur=' + amphur.val();
                    } else {
                      var query = 'city=' + city.val() + '&amphur=' + amphur.val() + '&tumbon=' +
                        tumbon.val();
                    }
                    $.ajax({
                      url: "provinceshow.php?" + query,
                      dataType: 'xml',
                      success: function (data) {
                        var cityNode = $(data).find("city");
                        var items = cityNode.find('*');
                        $_addSelectOption(city, items, city.val());

                        var amphurNode = $(data).find("amphur");
                        var items = amphurNode.find('*');
                        $_addSelectOption(amphur, items, amphur.val());

                        var tumbonNode = $(data).find("tumbon");
                        var items = tumbonNode.find('*');
                        $_addSelectOption(tumbon, items, tumbon.val());
                      }
                    });
                  }
                  $_addSelectOption = function (obj, items, selected) {
                    var obj_op = obj.find('option');
                    obj_op.each(function () {
                      if ($(this).val() != "") {
                        $(this).remove();
                      }
                    });
                    items.each(function () {
                      var itemsplit = $(this).text().split("_");
                      var iTemSelect = selected == itemsplit[0] ? 'selected="selected"' :
                        "";
                      obj.append('<option value="' + itemsplit[0] + '" ' + iTemSelect +
                        '>' + itemsplit[1] + '</option>');
                    });
                  }
                  $(document).ready(function () {
                    $('#city ,#amphur').change(function () {
                      $_province($(this));
                    });
                    $_province($('#city'));
                  });
                </script>

                <div class="row form-group">
                  <div class="col-md-4 mb-4 mb-md-0">
                    <label class="text-black" for="fname">รหัสไปรษณย์</label>
                    <input type="text" class="form-control" id="post" name="post" required autofocus>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="name">เบอร์โทรศัพท์</label>
                    <input class="form-control" type="text" id="mobile" name="mobile" required autofocus>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black" for="lastname">E-mail Address</label>
                    <input class="form-control" type="email" id="email" name="email" required autofocus><span
                      class="message"></span>
                  </div>
                </div>

                <!-- ตรวจสอบการใช้ E-mail ประชาชนซ้ำ -->
                <script type="text/javascript">
                  $(document).ready(function () {
                    $('#btnSubmit').click(function () {
                      var check = check_email();
                      check.success(function (data) {
                        if (data != 1) {
                          $('#register').submit();
                          return false;
                        }
                      });

                    });
                    $('#email').focusout(function () {
                      var check = check_email();
                      check.success(function (data) {
                        if (data == 1) {
                          $('.message').html(
                            'ชื่ออีเมล์นี้มีคนใช้แล้ว กรุณาเปลี่ยนชื่ออีเมล์ใหม่'
                          );
                        }
                      });
                    });
                  });

                  function check_email() {
                    return $.ajax({
                      type: 'POST',
                      data: {
                        email: $('#email').val()
                      },
                      url: 'check_email.php'
                    });
                  }
                </script>
                <style>
                  .message {
                    font-size: 12px;
                    color: red;
                  }
                </style>

                <br>
                <p>
                  <h5>5. ข้อมูลเกี่ยวกับครอบครัว</h5>
                </p>
                <hr>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">ชื่อ-นามสกุล/บิดา</label>
                    <input type="text" class="form-control" id="father" name="father" required autofocus>
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">อาชีพ</label>
                    <input class="form-control" type="text" id="occu" name="occu" required autofocus>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">สถานที่ทำงาน</label>
                    <input type="text" class="form-control" id="occulo" name="occulo">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">เบอร์โทรติดต่อของ บิดา/มารดา/ผู้ปกครอง</label>
                    <input class="form-control" type="text" id="fathertel" name="fathertel">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">ชื่อ-นามสกุล/มารดา</label>
                    <input type="text" class="form-control" id="mother" name="mother" required autofocus>
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">อาชีพ</label>
                    <input class="form-control" type="text" id="occumother" name="occumother" required autofocus>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">สถานที่ทำงาน</label>
                    <input type="text" class="form-control" id="occulomother" name="occulomother" required autofocus>
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">เบอร์โทรติดต่อของ บิดา/มารดา/ผู้ปกครอง</label>
                    <input class="form-control" type="text" id="mothertel" name="mothertel" required autofocus>
                  </div>
                </div>

                <br>
                <p>
                  <h5>6. ความสามารถของบุคคล</h5>
                </p>
                <hr>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">โปรแกรมคอมพิวเตอร์</label>
                    <textarea name="capability" id="capability" cols="30" rows="5" class="form-control" placeholder="1."
                      required autofocus></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">ผลงาน/รางวัลที่เคยได้รับ</label>
                    <textarea name="workings" id="workings" cols="30" rows="5" class="form-control" placeholder="1."
                      required autofocus></textarea>
                  </div>
                </div>

                <!-- select work-->
                <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
                <script type="text/javascript">
                  $_province1 = function (Obj1) {
                    var city1 = $('#city1');
                    var amphur1 = $('#amphur1');
                    var tumbon1 = $('#tumbon1');
                    if (Obj1.attr('id') == 'city1') { //ตรวจสอบการคลิก list menu จังหวัด
                      var query1 = 'city1=' + city1.val();
                    } else if (Obj1.attr('id') == 'amphur1') { //ตรวจสอบการคลิก list menu อำเภอ
                      var query1 = 'city1=' + city1.val() + '&amphur1=' + amphur1.val();
                    } else { //ค่าเริ่มต้น
                      var query1 = 'city1=' + city1.val() + '&amphur1=' + amphur1.val() +
                        '&tumbon1=' + tumbon1.val();
                    }
                    $.ajax({
                      url: "provinceshow1.php?" + query1, //ร้องขอข้อมูล
                      dataType: 'xml', //รับข้อมูลแบบxml
                      success: function (data1) {
                        var cityNode1 = $(data1).find("city1");
                        var items1 = cityNode1.find('*');
                        $_addSelectOption1(city1, items1, city1.val());

                        var amphurNode1 = $(data1).find("amphur1");
                        var items1 = amphurNode1.find('*');
                        $_addSelectOption1(amphur1, items1, amphur1.val());

                        var tumbonNode1 = $(data1).find("tumbon1");
                        var items1 = tumbonNode1.find('*');
                        $_addSelectOption1(tumbon1, items1, tumbon1.val());
                      }
                    });
                  }
                  $_addSelectOption1 = function (obj1, items1, selected1) {
                    var obj_op1 = obj1.find('option');
                    obj_op1.each(function () { //ลบoptionของ list menu
                      if ($(this).val() != "") {
                        $(this).remove();
                      }
                    });
                    items1.each(function () {
                      var itemsplit1 = $(this).text().split("_");
                      var iTemSelect1 = selected1 == itemsplit1[0] ?
                        'selected="selected"' : "";
                      obj1.append('<option value="' + itemsplit1[0] + '" ' + iTemSelect1 +
                        '>' + itemsplit1[1] + '</option>');
                    });
                  }
                  $(document).ready(function () {
                    $('#city1 ,#amphur1').change(function () {
                      $_province1($(this));
                    });
                    $_province1($('#city1'));
                  });
                </script>


                <br>
                <p>
                  <h5>7. เอกสารประกอบการสมัคร</h5>
                </p>
                <hr>

                <div class="form-group">
                  <label class="control-label col-md-4">รูปประจำตัว</label>
                  <div class="col-md-6">
                    <input type="file" id="input050" class="form-control" name="tb_std_img" id="tb_std_img" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Transcript</label>
                  <div class="col-md-6">
                    <input type="file" id="input05" class="form-control" name="tb_std_imggpa" id="tb_std_imggpa"
                      required autofocus />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Resume</label>
                  <div class="col-md-6">
                    <input type="file" id="input05" class="form-control" name="tb_std_imggpa" id="tb_std_imggpa"
                      required autofocus />
                  </div>
                </div>

                <br>
                <div class="row form-group">
                  <div class="col-md-12" align="center">
                    <input type="submit" value="Submit" class="btn btn-info py-2 px-4 text-white">
                    <input type="reset" value="Cancle" class="btn btn-danger py-2 px-4 text-white">
                  </div>
                </div>



            </form>
            </div>
            
           </div>
        </div>
      </div>
    </div>
     

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <!-- <h3 class="footer-heading mb-4">About Travelers</h3> -->
            <img src="images/Ftu_logo.png" width=80 height=80>
              <p>“มหาวิทยาลัยฟาฏอนีเป็นสถาบันอุดมศึกษาที่มีมาตรฐานระดับสากล
                ผลิตบัณฑิตและพัฒนาองค์ความรู้ที่บูรณาการหลักการอิสลามอย่างมีดุลยภาพ
                สร้างสรรค์สังคมคุณธรรมและสันติภาพที่ยั่งยืน”</p>
          </div>



        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="register.php">Register</a></li>
                <li><a href="../login.php">Login</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
          </div>



        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">


          <div class="mb-5">
            <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent"
                  placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>

          </div>

        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="mb-5">
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>

          <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | <span style="color:green;">Fatoni</span> University <i class="" aria-hidden="true"></img>
                <a href="https://colorlib.com" target="_blank"></a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>

      </div>
    </div>
  </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="add_faculty.js"></script>

</body>

</html>