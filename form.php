
<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_DEPRECATED);  ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>F T U Apprenticeship</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

    <style>
        body {
            background-color: #FAFAFA;
        }
    </style>


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- ภาษา -->
    <!-- <div align="right"><span class="">ภาษา :
            <a class="" href="form.php"><span>TH</span></a>
            <span> | </span>
            <a class="" href="form_english.php"><span>EN</span></a>
        </span>
    </div> -->

    <!-- <div align=right>ภาษา : <a href= "form_english.php"><img src="icon_frontweb/English-Language-Flag-3-icon.png">EN</a> </div> -->
    <div class="container marketing">

        <div class="panel-group">
            <div class="panel panel-default">
                <center>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-pencil-square-o fa-2x"></i> <strong>ใบสมัครโครงการฝึกงานและโครงการสหกิจศึกษา
                                </br>
                                CO-OP JOB APPLICATION</strong>
                        </li>
                    </ol>
                </center>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="sql_add_student_preinformation.php">
                        <fieldset>
                            <legend>การเลือกสถานที่ฝึกงาน</legend>
                            <div class="form-group">
                                <label class="control-label col-md-2">พื้นที่จังหวัด</label>
                                <div class="col-md-3">
                                    <select id="city1" class="form-control" name="city1">
                                        <option value="">--เลือกพื้นที่จังหวัด--</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-2">สมัครงานในตาแหน่ง</label>
                                <div class="col-md-3">
                                    <select id="amphur1" class="form-control" name="amphur1">
                                        <option value="">--เลือกตาแหน่ง--</option>
                                    </select></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">สถานที่</label>
                                <div class="col-md-8">
                                    <select id="tumbon1" class="form-control" name="tumbon1">
                                        <option value="">--เลือกสถานที่--</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">อื่นๆ โปรดระบุ</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="etc" name="etc" placeholder="ชื่อสถานที่">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">พื้นที่จังหวัด</label>
                                <div class="col-md-3">
                                    <select id="city1" class="form-control" name="city1">
                                        <option value="">--เลือกพื้นที่จังหวัด--</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-2">สมัครงานในตาแหน่ง</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="etc" name="etc" placeholder="สมัครงานในตาแหน่ง">
                                    <!-- <select id="amphur1" class="form-control" name="amphur1">
                                        <option value="">--เลือกตาแหน่ง--</option> -->
                                    </select></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">รายละเอียดสถานที่ </label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" name="tb_std_offerlo_d" placeholder="รายละเอียดสถานที่"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">สมัครตำแหน่ง</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง" required autofocus>
                                </div>
                                <label class="control-label col-md-2">สมัครโครการ</label>
                                <div class="col-md-3">
                                    <?php require "student_cate.php"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ระยะเวลาปฏิบัติงาน เริ่ม (From)</label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="" name="" placeholder="ตำแหน่ง" required autofocus>
                                </div>
                                <label class="control-label col-md-2">ถึง (Untill)</label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="" name="" placeholder="ตำแหน่ง" required autofocus>
                                </div>
                            </div>

                            <!-- <input type="text" class="form-control" id="tb_std_duration" name="tb_std_duration" value="25/5/2016 ถึง 25/7/2016">

                            <input type="text" class="form-control" id="tb_std_status_id" name="tb_std_status_id"
                                value="2">
 -->


                            <legend>1.รายละเอียดเกี่ยวกับนักศึกษา</legend>
                            <div class="form-group">
                                <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                                <div class="col-md-2">
                                    <?php require "prefix.php"; ?>
                                </div>
                                <label class="control-label col-md-1">ชื่อ</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ" required autofocus>
                                </div>
                                <label class="control-label col-md-1">นามสกุล</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล" required autofocus>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#btnSubmit').click(function() {
                                        var check = check_iden();
                                        check.success(function(data) {
                                            if (data != 1) {
                                                $('#register').submit();
                                                return false;
                                            }
                                        });
                                    });
                                    $('#iden').focusout(function() {
                                        var check = check_iden();
                                        check.success(function(data) {
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

                            <div class="form-group">
                                <label class="control-label col-md-2">รหัสนักศึกษา</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="iden" name="iden" placeholder="รหัสนักศึกษา" required autofocus><span class="messageIDEN"></span>
                                </div>

                                <!-- <input  type="hidden" class="form-control" id="tb_std_password" name="tb_std_password" value="12345"> -->

                                <label class="control-label col-md-1">คณะ</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="tb_std_faculty" name="tb_std_faculty">
                                        <option value="no">เลือกคณะ</option>
                                    </select>
                                </div>

                                <label class="control-label col-md-1">สาขาวิชา</label>
                                <div class="col-md-3">
                                    <select class="form-control" id="tb_std_major" name="tb_std_major">
                                        <option value="no">เลือกสาขา</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">ชั้นปี</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="tb_std_year" name=" tb_std_year">
                                        <option value="no">เลือกชั้นปี</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <label class="control-label col-md-1">คะแนนเฉลี่ยสะสม</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="gpa" name="gpa" placeholder="คะแนนเฉลี่ยสะสม">
                                </div>

                                <label class="control-label col-md-2">วันเกิด</label>
                                <div class="col-md-2">
                                    <input class="form-control" type="date" id="birthday" name="birthday">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">เพศ</label>
                                <div class="col-md-2">
                                    <select class="form-control" id="stdpre_sex" name=" stdpre_sex">
                                        <option value="no">เลือกเพศ</option>
                                        <option>ชาย</option>
                                        <option>หญิง</option>
                                    </select>
                                </div>

                                <label class="control-label col-md-1">ส่วนสูง</label>
                                <div class="col-md-2">
                                    <input class="form-control" type="text" id="tall" name="tall" placeholder="ซม.">
                                </div>

                                <label class="control-label col-md-2">น้ำหนัก</label>
                                <div class="col-md-2">
                                    <input class="form-control" type="text" id="weight" name="weight" placeholder="กก.">
                                </div>
                            </div>

                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#btnSubmit').click(function() {
                                        var check = check_idcard();
                                        check.success(function(data) {
                                            if (data != 1) {
                                                $('#register').submit();
                                                return false;
                                            }
                                        });

                                    });
                                    $('#iden').focusout(function() {
                                        var check = check_idcard();
                                        check.success(function(data) {
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

                            <div class="form-group">
                                <label class="control-label col-md-2">เลขที่บัตรประชาชน</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="idcard" name="idcard" placeholder="เลขที่บัตรประชาชน" required autofocus><span class="messageID"></span>
                                </div>

                                <label class="control-label col-md-1">สัญชาติ</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="nation" name="nation" placeholder="สัญชาติ">
                                </div>

                                <label class="control-label col-md-2">ศาสนา</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="reli" name="reli" placeholder="ศาสนา">
                                </div>
                            </div>

                            <legend>2.การเกณฑ์ทหาร</legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">การเกณฑ์ทหาร</label>
                                <div class="col-lg-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="ผ่านการเกณฑ์แล้ว" checked="">
                                            ผ่านการเกณฑ์แล้ว
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="ยังไม่ได้เกณฑ์/อยู่ระหว่างการขอผ่อนผัน">
                                            ยังไม่ได้เกณฑ์/อยู่ระหว่างการขอผ่อนผัน
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="ได้รับการยกเว้น">
                                            ได้รับการยกเว้น
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <legend>3.ที่อยู่ปัจจุบัน</legend>
                            <div class="form-group">
                                <label class="control-label col-md-2">เลขที่</label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control" id="nohome" name="nohome" placeholder="เลขที่">
                                </div>
                                <label class="control-label col-md-2">ตรอก/ซอย</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="soi" name="soi" placeholder="ตรอก/ซอย">
                                </div>
                                <label class="control-label col-md-1">ถนน</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="rode" name="rode" placeholder="ถนน">
                                </div>

                            </div>
                            <!-- code for select provice -->
                            <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
                            <script type="text/javascript">
                                $_province = function(Obj) {
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
                                        success: function(data) {
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
                                $_addSelectOption = function(obj, items, selected) {
                                    var obj_op = obj.find('option');
                                    obj_op.each(function() {
                                        if ($(this).val() != "") {
                                            $(this).remove();
                                        }
                                    });
                                    items.each(function() {
                                        var itemsplit = $(this).text().split("_");
                                        var iTemSelect = selected == itemsplit[0] ? 'selected="selected"' :
                                            "";
                                        obj.append('<option value="' + itemsplit[0] + '" ' + iTemSelect +
                                            '>' + itemsplit[1] + '</option>');
                                    });
                                }
                                $(document).ready(function() {
                                    $('#city ,#amphur').change(function() {
                                        $_province($(this));
                                    });
                                    $_province($('#city'));
                                });
                            </script>

                            <div class="form-group">
                                <label class="control-label col-md-2">จังหวัด</label>
                                <div class="col-md-2">
                                    <select id="city" class="form-control" name="city">
                                        <option value="">--เลือกจังหวัด--</option>
                                    </select>
                                </div>
                                <label class="control-label col-md-1">อำเภอ</label>
                                <div class="col-md-3">
                                    <select id="amphur" class="form-control" name="amphur">
                                        <option value="">--เลือกอำเภอ--</option>
                                    </select></p>
                                </div>
                                <label class="control-label col-md-1">เขต/ตำบล</label>
                                <div class="col-md-3">
                                    <select id="tumbon" class="form-control" name="tumbon">
                                        <option value="">--เลือกตำบล--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">รหัสไปรษณย์</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="post" name="post" placeholder="รหัสไปรษณย์">
                                </div>
                                <label class="control-label col-md-1">โทรศัพท์</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="mobile" name="mobile" placeholder="โทรศัพท์" required autofocus>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#btnSubmit').click(function() {
                                            var check = check_email();
                                            check.success(function(data) {
                                                if (data != 1) {
                                                    $('#register').submit();
                                                    return false;
                                                }
                                            });

                                        });
                                        $('#email').focusout(function() {
                                            var check = check_email();
                                            check.success(function(data) {
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
                                <label class="control-label col-md-1">Email</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="email" id="email" name="email" placeholder="email" required autofocus><span class="message"></span>
                                </div>

                            </div>
                            <legend>4.ข้อมูลเกี่ยวกับครอบครัว</legend>
                            <div class="form-group">
                                <label class="control-label col-md-2">ชื่อ-สกุลบิดา</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="father" name="father" placeholder="ชื่อ-สกุลบิดา">
                                </div>
                                <label class="control-label col-md-2">อาชีพ</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="occu" name="occu" placeholder="อาชีพ">
                                </div>


                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">สถานที่ทำงาน</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="occulo" name="occulo" placeholder="สถานที่ทำงาน">
                                </div>
                                <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="fathertel" name="fathertel" placeholder="เบอร์โทรติดต่อ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">ชื่อ-สกุลมารดา</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="mother" name="mother" placeholder="ชื่อ-สกุลมารดา">
                                </div>
                                <label class="control-label col-md-2">อาชีพ</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="occumother" name="occumother" placeholder="อาชีพ">
                                </div>


                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-2">สถานที่ทำงาน</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="occulomother" name="occulomother" placeholder="สถานที่ทำงาน">
                                </div>
                                <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" id="mothertel" name="mothertel" placeholder="เบอร์โทรติดต่อ">
                                </div>


                            </div>


                            <legend>5.ความสามารถทางด้านคอมพิวเตอร์</legend>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">โปรแกรมคอมพิวเตอร์</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" name="capability" placeholder="1.
                     2.
                     3.
                     4.">

        </textarea>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">ผลงาน/รางวัลที่เคยได้รับ</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" name="workings" placeholder="1.
                     2.
                     3.
                     4.">

        </textarea>

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



                            <legend>7.เอกสารประกอบการสมัคร</legend>
                            <div class="form-group">
                                <label class="control-label col-md-2">รูปประจำตัว</label>
                                <div class="col-md-4">
                                    <input type="file" id="input050" class="form-control" name="tb_std_img" id="tb_std_img" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Transcript</label>
                                <div class="col-md-4">
                                    <input type="file" id="input05" class="form-control" name="tb_std_imggpa" id="tb_std_imggpa" required autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Resume</label>
                                <div class="col-md-4">
                                    <input type="file" id="input05" class="form-control" name="tb_std_imggpa" id="tb_std_imggpa" required autofocus />
                                </div>
                            </div>

                            </br>

                            <div class="form-group" align="center">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>


            </br>
            </br>


            <!-- FOOTER -->
            <footer>
                <a class="pull-right" href="index.php"> <button class="btn btn-info"><i class="fa fa-arrow-left"></i>
                        Back</button></a>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-copyright"></i> <strong>Designed By 2019·</strong>
                    </li>
                </ol>

            </footer>

        </div><!-- /.container -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>

        <script type="text/javascript">
            $('#input01').filestyle()
            $('#input001').filestyle({
                'placeholder': 'Placeholder test'
            });
            $('#input02').filestyle({
                buttonText: 'My filestyle'
            });

            $('#input03').filestyle({
                input: false,
                buttonName: 'btn-primary'
            });

            $('#input04').filestyle({
                icon: false
            });

            $('#input05').filestyle({
                buttonName: 'btn-warning'
            });
            $('#input051').filestyle({
                buttonName: 'btn-warning'
            });

            $('#input050').filestyle({
                buttonName: 'btn-info'
            });

            $('#input07').filestyle({
                iconName: 'glyphicon glyphicon-plus',
                buttonText: 'Add'
            });

            $('#input08').filestyle({
                buttonText: ' File',
                buttonName: 'btn-success'
            });
            $('#input080').filestyle({
                buttonText: ' File',
                buttonName: 'btn-info'
            });

            $('#clear').click(function() {
                $('#input08').filestyle('clear');
            });

            $('#input09').filestyle({
                buttonText: 'File',
                buttonName: 'btn-primary'
            });

            $('#toggleInput').click(function() {
                var fs = $('#input09');
                if (fs.filestyle('input'))
                    fs.filestyle('input', false);
                else
                    fs.filestyle('input', true);
            });

            $('#input10').filestyle({
                buttonText: 'File',
                buttonName: 'btn-primary'
            });
            $('#input101').filestyle({
                buttonText: 'File',
                buttonName: 'btn-success'
            });

            $('#toggleIcon').click(function() {
                var fs = $('#input10');
                if (fs.filestyle('icon'))
                    fs.filestyle('icon', false);
                else
                    fs.filestyle('icon', true);
            });

            $('#input11').filestyle({
                buttonText: 'Multiple',
                buttonName: 'btn-danger'
            });

            $('#input12').filestyle({
                buttonText: ''
            });

            $('#input13').filestyle({
                disabled: true
            });

            $('#input14').filestyle({
                buttonBefore: true
            });
            $('#input15').filestyle({
                size: 'lg'
            });
            $('#input15').filestyle({
                input: false,
                badge: false
            });

            // nultiple initialize
            $('.test').filestyle({
                buttonName: 'btn-primary'
            });
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/page/form.js"></script>


</html>