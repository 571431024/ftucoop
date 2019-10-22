<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];

?>




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

</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#sidebar-collapse"><span
                        class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>F T U</span>&nbsp; Apprenticeship Training System</a>
                <!-- <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                    </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">3 mins ago</small>
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                    <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">1 hour ago</small>
                                        <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                    <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                            </li>
                        </ul>
                    </li> -->
                <!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        </ul>
                    </li>
                </ul> -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../../../picture/<?php  echo $_SESSION['picture'];?>" alt="stack photo" class="img-responsive">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <?php echo $_SESSION['name']; ?>
                    <?php echo $_SESSION['lastname']; ?> <b class=""></b></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>
                    <?php echo $_SESSION['stt']; ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <!-- <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form> -->
        <ul class="nav menu">
            <li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="advisor_bio.php"><em class="fa fa-user">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศ</a></li>
            <li><a href="student_per.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการฝึกวิชาชีพ นศ
                    <!-- &amp; --></a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน นศ</a></li>
            <li><a href="webboard.php"><em class="fa fa-commenting-o">&nbsp;</em> Webboard</a></li>
            <li class="active"><a href="advisor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
            <!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
                    </a></li>
                    <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
                    </a></li>
                    <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
                    </a></li>
                </ul>
            </li> -->

            <li><a href="../../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Assessment </li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            การประเมิน <small>นักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-check"></i> รายละเอียดแบบฟอร์มการประเมิน
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- add new advisor button -->

                <div class="row">
                    <div class="col-lg-12">

                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                            <div class="form-group">


                            </div>
                        </form>
                    </div>
                </div>
                <!--/.row -->


                <!-- Panel for table -->
                <?php include("fn_return.php"); ?>

                <?php

                                     include ("../../../sql_function/connect.php");
                                        extract($_GET);
                                        $tb_std_id = $flag;
                                        $sql = "SELECT tb_student.*,

                                    tb_prefix.*,
                                    tb_student_category.*,
                                    
                                    tb_advisor.*,
                                   
                                    tb_mentor.*,
                                    tb_student_status.*, tb_advisor.*,lo_name.*,cate_lo.*,province_lo.*
                                    ,province.*,amphur.*,tumbon.*


                                    FROM tb_student 
                                    LEFT JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    LEFT JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id   = tb_student_category.tb_stdcate_id  
                                    LEFT JOIN lo_name ON lo_name.id = tb_student.tb_std_senamelo 
                                    LEFT JOIN cate_lo ON cate_lo.id = tb_student.tb_std_secate 
                                    LEFT JOIN province_lo ON province_lo.id = tb_student.tb_std_seprovince 
                                    LEFT JOIN tb_mentor ON tb_student.tb_mentor_tb_mentor_id   = tb_mentor.tb_mentor_id 
                                    LEFT JOIN tb_advisor ON tb_student.tb_advisor_tb_ads_id = tb_advisor.tb_ads_id
                                    LEFT JOIN tb_student_status ON tb_student.tb_std_status_id = tb_student_status.tb_sta_id
                                    LEFT JOIN  province ON tb_student.tb_std_province = province.Pid
                                    LEFT JOIN  amphur ON tb_student.tb_std_amphur = amphur.Aid  
                                    LEFT JOIN  tumbon ON tb_student.tb_std_tumbon = tumbon.Tid  
                                    WHERE tb_std_id='$tb_std_id' ";

 $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $studentimg =  $row['tb_std_img'];
                            $status =  $row['tb_std_status_id'];
                            $advisor = $row['tb_advisor_tb_ads_id'];
                            $advisorname = $row['tb_ads_name'];
                            $advisorlastname = $row['tb_ads_lastname'];
                            $mentor_id = $row['tb_mentor_tb_mentor_id'];


                            $mentername = $row['tb_mentor_name'];
                            $menterlastname = $row['tb_mentor_lastname'];
                            $wen = "    ";

                           
                            ?>




                <table class="table table-hover">

                    <tbody>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>&nbsp;</th>
                            <td><img src="../../../student_pic/<?php  echo $studentimg ?>" width=150 height=150></td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>รหัสนักศึกษา</th>
                            <td>
                                <?php echo $row['tb_std_identification']; ?>
                            </td>

                        </tr>



                        <tr>


                            <th align="right" scope="row">&nbsp;</th>
                            <th>ชื่อ</th>
                            <td>
                                <?php echo $row['tb_prefix_name']; ?>
                                <?php echo $row['tb_std_name']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>นามสกุล</th>
                            <td>
                                <?php echo $row['tb_std_lastname']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>เพศ</th>
                            <td>
                                <?php echo $row['tb_std_sex']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>สาขา</th>
                            <td>
                                <?php echo $row['tb_std_major']; ?>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ชั้นปี</th>
                            <td>
                                <?php echo $row['tb_std_year']; ?>
                            </td>
                        </tr>




                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ประเภทนักศึกษา</th>
                            <td>
                                <?php echo $row['tb_stdcate_cate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>พี่เลี้ยง</th>
                            <td>
                                <?php echo $mentername ?>
                                <?php echo $menterlastname ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>อาจารย์ที่ปรึกษา</th>
                            <td>อาจารย์
                                <?php echo $advisorname ?>
                                <?php echo $advisorlastname ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>สถานที่ปฏิบัติงาน</th>
                            <td>
                                <div style="  width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $row['LNname'];?>
                                    <?php echo $row['PLname'];?>
                                    <?php echo $row['tb_std_offerlo'];?>
                                    <?php echo $row['tb_std_offerlo_d'];?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center">
                                <p><strong>แบบรายงานการนิเทศงานสหกิจศึกษาและฝึกงาน</strong></p>
                                <palign="left"> <strong>คำชี้แจง</strong>
                                    โปรดบันทึกหมายเลข 5, 4, 3, 2, 1 ตามความคิดเห็นในแต่ละหัวข้อการประเมิน
                                    โดยใช้เกณฑ์การประเมินค่าสำหรับระดับความคิดเห็น ดังนี้
                                    </p>
                                    <p align="left">5 หมายถึง เห็นด้วยกับข้อความนั้น มากที่สุด หรือเหมาะสมมากที่สุด
                                        </br>
                                        4 หมายถึง เห็นด้วยกับข้อความนั้น มาก หรือเหมาะสมมาก</br>
                                        3 หมายถึง เห็นด้วยกับข้อความนั้น มากปานกลางหรือเหมาะสมมากปานกลาง</br>
                                        2 หมายถึง เห็นด้วยกับข้อความนั้น น้อย หรือเหมาะสมน้อย</br>
                                        1 หมายถึง เห็นด้วยกับข้อความนั้น น้อยที่สุด หรือเหมาะสมน้อยที่สุด</br>
                                    </p>
                            </td>
                        </tr>


                    </tbody>

                </table>

                <!-- End table student deatail -->


                <p>
                    <script language="javascript">
                        function fncSubmit()
{
    if(document.form1.ev15.checked == false && document.form1.ev14.checked == false && document.form1.ev13.checked == false && document.form1.ev12.checked == false && document.form1.ev11.checked == false  && true)
    {
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.1 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev25.checked == false && document.form1.ev24.checked == false && document.form1.ev23.checked == false && document.form1.ev22.checked == false && document.form1.ev21.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.2 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;   
    }else if(document.form1.ev35.checked == false && document.form1.ev34.checked == false && document.form1.ev33.checked == false && document.form1.ev32.checked == false && document.form1.ev31.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.3 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;   
 
    }else if(document.form1.ev305.checked == false && document.form1.ev304.checked == false && document.form1.ev303.checked == false && document.form1.ev302.checked == false && document.form1.ev301.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev315.checked == false && document.form1.ev314.checked == false && document.form1.ev313.checked == false && document.form1.ev312.checked == false && document.form1.ev311.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.5  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev325.checked == false && document.form1.ev324.checked == false && document.form1.ev323.checked == false && document.form1.ev322.checked == false && document.form1.ev321.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev335.checked == false && document.form1.ev334.checked == false && document.form1.ev333.checked == false && document.form1.ev332.checked == false && document.form1.ev331.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.7 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev345.checked == false && document.form1.ev344.checked == false && document.form1.ev343.checked == false && document.form1.ev342.checked == false && document.form1.ev341.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ1.8  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev355.checked == false && document.form1.ev354.checked == false && document.form1.ev353.checked == false && document.form1.ev352.checked == false && document.form1.ev351.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ ภาพรวม  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }


    else if(document.form1.ev55.checked == false && document.form1.ev54.checked == false && document.form1.ev53.checked == false && document.form1.ev52.checked == false && document.form1.ev51.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev65.checked == false && document.form1.ev64.checked == false && document.form1.ev63.checked == false && document.form1.ev62.checked == false && document.form1.ev61.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.2 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev75.checked == false && document.form1.ev74.checked == false && document.form1.ev73.checked == false && document.form1.ev72.checked == false && document.form1.ev71.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.3 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev85.checked == false && document.form1.ev84.checked == false && document.form1.ev83.checked == false && document.form1.ev82.checked == false && document.form1.ev81.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.4 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev95.checked == false && document.form1.ev94.checked == false && document.form1.ev93.checked == false && document.form1.ev92.checked == false && document.form1.ev91.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.5 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev105.checked == false && document.form1.ev104.checked == false && document.form1.ev103.checked == false && document.form1.ev102.checked == false && document.form1.ev101.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ2.6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.z5.checked == false && document.form1.z4.checked == false && document.form1.z3.checked == false && document.form1.z2.checked == false && document.form1.z1.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
   
    }else if(document.form1.ev125.checked == false && document.form1.ev124.checked == false && document.form1.ev123.checked == false && document.form1.ev122.checked == false && document.form1.ev121.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.2  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev135.checked == false && document.form1.ev134.checked == false && document.form1.ev133.checked == false && document.form1.ev132.checked == false && document.form1.ev131.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.3  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev145.checked == false && document.form1.ev144.checked == false && document.form1.ev143.checked == false && document.form1.ev142.checked == false && document.form1.ev141.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev155.checked == false && document.form1.ev154.checked == false && document.form1.ev153.checked == false && document.form1.ev152.checked == false && document.form1.ev151.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.5  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }
    else if(document.form1.ev165.checked == false && document.form1.ev164.checked == false && document.form1.ev163.checked == false && document.form1.ev162.checked == false && document.form1.ev161.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่1 หัวข้อ3.6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }
    else if(document.form1.ev175.checked == false && document.form1.ev174.checked == false && document.form1.ev173.checked == false && document.form1.ev172.checked == false && document.form1.ev171.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }
    else if(document.form1.ev185.checked == false && document.form1.ev184.checked == false && document.form1.ev183.checked == false && document.form1.ev182.checked == false && document.form1.ev181.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.2  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev195.checked == false && document.form1.ev194.checked == false && document.form1.ev193.checked == false && document.form1.ev192.checked == false && document.form1.ev191.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.3  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev205.checked == false && document.form1.ev204.checked == false && document.form1.ev203.checked == false && document.form1.ev202.checked == false && document.form1.ev201.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev215.checked == false && document.form1.ev214.checked == false && document.form1.ev213.checked == false && document.form1.ev212.checked == false && document.form1.ev211.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.5  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev225.checked == false && document.form1.ev224.checked == false && document.form1.ev223.checked == false && document.form1.ev222.checked == false && document.form1.ev221.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev235.checked == false && document.form1.ev234.checked == false && document.form1.ev233.checked == false && document.form1.ev232.checked == false && document.form1.ev231.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ1.7  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev245.checked == false && document.form1.ev244.checked == false && document.form1.ev243.checked == false && document.form1.ev242.checked == false && document.form1.ev241.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ2  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev255.checked == false && document.form1.ev254.checked == false && document.form1.ev253.checked == false && document.form1.ev252.checked == false && document.form1.ev251.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ3  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev265.checked == false && document.form1.ev264.checked == false && document.form1.ev263.checked == false && document.form1.ev262.checked == false && document.form1.ev261.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev275.checked == false && document.form1.ev274.checked == false && document.form1.ev273.checked == false && document.form1.ev272.checked == false && document.form1.ev271.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ5  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev285.checked == false && document.form1.ev284.checked == false && document.form1.ev283.checked == false && document.form1.ev282.checked == false && document.form1.ev281.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev295.checked == false && document.form1.ev294.checked == false && document.form1.ev293.checked == false && document.form1.ev292.checked == false && document.form1.ev291.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนที่2 หัวข้อ7  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }
  document.form1.submit();
}
        </script>
                </p>
                <form name="form1" method="post" action="../sql_function/sql_add_eva_student.php" onSubmit="JavaScript:return fncSubmit();">
                    <table width="100%" height="auto" align="center" class="table table-hover">
                        <tr valign="top">
                            <td width="77%" rowspan="2" bgcolor="#CCCCCC">
                                <div align="center"><strong>หัวข้อการประเมิน</strong></div>
                            </td>
                            <td height="15" colspan="5" align="center" bgcolor="#CCCCCC"><strong>ระดับความคิดเห็น</strong></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#CCCCCC">5</td>
                            <td align="center" bgcolor="#CCCCCC">4</td>
                            <td align="center" bgcolor="#CCCCCC">3</td>
                            <td align="center" bgcolor="#CCCCCC">2</td>
                            <td align="center" bgcolor="#CCCCCC">1</td>
                        </tr>

                        <tr>
                            <td colspan="6"><strong>ส่วนที่ 1 สำหรับการประเมินหน่วยงาน/สถานประกอบการ
                                    (ให้อาจารย์นิเทศสอบถามนักศึกษา)</strong></td>
                        </tr>
                        <tr>
                            <td colspan="6"><strong>1. การจัดการและสนับสนุน</strong></td>
                        </tr>
                        <tr>
                            <td>1.1 การประสานงานด้านการจัดการดูแลนักศึกษาในหน่วยงาน/สถานประกอบการ ระหว่างบุคคล
                                และหัวหน้างาน/ผู้ดูแล</td>
                            <td align="center"><input type="radio" name="1" id="ev15" value="5" />

                            </td>
                            <td align="center"><input type="radio" name="1" id="ev14" value="4" />
                            </td>
                            <td align="center"><input type="radio" name="1" id="ev13" value="3" />
                            </td>
                            <td align="center"><input type="radio" name="1" id="ev12" value="2" />
                            </td>
                            <td align="center"><input type="radio" name="1" id="ev11" value="1" />
                            </td>
                        </tr>
                        <tr>
                            <td>1.2 การให้คำแนะนำดูแลนักศึกษาของฝ่ายบุคคล (การปฐมนิเทศ การแนะนำระเบียบวินัย การลางาน
                                สวัสดิการ การจ่ายค่าตอบแทน)</td>
                            <td align="center"><input type="radio" name="2" id="ev25" value="5" /></td>
                            <td align="center"><input type="radio" name="2" id="ev24" value="4" /></td>
                            <td align="center"><input type="radio" name="2" id="ev23" value="3" /></td>
                            <td align="center"><input type="radio" name="2" id="ev22" value="2" /></td>
                            <td align="center"><input type="radio" name="2" id="ev21" value="1" /></td>
                        </tr>
                        <tr>
                            <td>1.3 บุคลากรในหน่วยงาน/สถานประกอบการ ให้ความสนใจ สนับสนุนและให้ความเป็นกันเองกับนักศึกษา</td>
                            <td align="center"><input type="radio" name="3" id="ev35" value="5" /></td>
                            <td align="center"><input type="radio" name="3" id="ev34" value="4" /></td>
                            <td align="center"><input type="radio" name="3" id="ev33" value="3" /></td>
                            <td align="center"><input type="radio" name="3" id="ev32" value="2" /></td>
                            <td align="center"><input type="radio" name="3" id="ev31" value="1" /></td>
                        </tr>

                        </tr>
                        <tr>
                            <td>1.4 ประโยชน์ที่นักศึกษาฝึกงานได้รับ</td>
                            <td align="center"><input type="radio" name="4" id="ev305" value="5" /></td>
                            <td align="center"><input type="radio" name="4" id="ev304" value="4" /></td>
                            <td align="center"><input type="radio" name="4" id="ev303" value="3" /></td>
                            <td align="center"><input type="radio" name="4" id="ev302" value="2" /></td>
                            <td align="center"><input type="radio" name="4" id="ev301" value="1" /></td>
                        </tr>
                        <tr>
                            <td>1.5 ความปลอดภัยของนักศึกษา</td>
                            <td align="center"><input type="radio" name="5" id="ev315" value="5" /></td>
                            <td align="center"><input type="radio" name="5" id="ev314" value="4" /></td>
                            <td align="center"><input type="radio" name="5" id="ev313" value="3" /></td>
                            <td align="center"><input type="radio" name="5" id="ev312" value="2" /></td>
                            <td align="center"><input type="radio" name="5" id="ev311" value="1" /></td>
                        </tr>
                        <tr>
                            <td>1.6 ความเหมาะสมของตำแหน่งงานที่ได้รับมอบหมาย</td>
                            <td align="center"><input type="radio" name="6" id="ev325" value="5" /></td>
                            <td align="center"><input type="radio" name="6" id="ev324" value="4" /></td>
                            <td align="center"><input type="radio" name="6" id="ev323" value="3" /></td>
                            <td align="center"><input type="radio" name="6" id="ev322" value="2" /></td>
                            <td align="center"><input type="radio" name="6" id="ev321" value="1" /></td>
                        </tr>

                        <tr>
                            <td>1.7 นักศึกษาสามารถนำประสบการณ์ไปใช้ในการทำงาน</td>
                            <td align="center"><input type="radio" name="7" id="ev335" value="5" /></td>
                            <td align="center"><input type="radio" name="7" id="ev334" value="4" /></td>
                            <td align="center"><input type="radio" name="7" id="ev333" value="3" /></td>
                            <td align="center"><input type="radio" name="7" id="ev332" value="2" /></td>
                            <td align="center"><input type="radio" name="7" id="ev331" value="1" /></td>
                        </tr>
                        <tr>
                            <td>1.8 สถานที่และสภาพแวดล้อมเหมาะสม</td>
                            <td align="center"><input type="radio" name="8" id="ev345" value="5" /></td>
                            <td align="center"><input type="radio" name="8" id="ev344" value="4" /></td>
                            <td align="center"><input type="radio" name="8" id="ev343" value="3" /></td>
                            <td align="center"><input type="radio" name="8" id="ev342" value="2" /></td>
                            <td align="center"><input type="radio" name="8" id="ev341" value="1" /></td>
                        </tr>
                        <tr>
                            <td><strong>ภาพรวม</strong></td>
                            <td align="center"><input type="radio" name="9" id="ev355" value="5" /></td>
                            <td align="center"><input type="radio" name="9" id="ev354" value="4" /></td>
                            <td align="center"><input type="radio" name="9" id="ev353" value="3" /></td>
                            <td align="center"><input type="radio" name="9" id="ev352" value="2" /></td>
                            <td align="center"><input type="radio" name="9" id="ev351" value="1" /></td>
                        </tr>
                        <td colspan="6">
                            <table width="100%">
                                <tr>

                                    <td colspan="2">
                                        <div class="form-group">
                                            <label class="control-label col-md-1">ข้อเสนอแนะ</label>
                                            <div class="col-md-9">
                                                <textarea rows="10" class="form-control" id="cmm2" name="cmm2"
                                                    placeholder="- ความเหมาะสมของหน่วยงาน/สถานประกอบการในการรับนักศึกษา   (   ) เหมาะสม      (   ) ไม่เหมาะสม
- ความเห็นเกี่ยวกับหน่วยงาน                                                                            
- ควรให้นักศึกษาในรุ่นถัดไปฝึกงาน  ไม่ควรให้นักศึกษาฝึกงาน   ไม่แน่ใจ  
และอื่นๆ.."></textarea>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td width="500">&nbsp;</td>
                                    <td width="10">&nbsp;</td>
                                </tr>
                            </table>


                            <tr>
                                <td colspan="6"><strong>2. ปริมาณงานและคุณภาพงานที่นักศึกษา ได้รับมอบหมาย</strong></td>
                            </tr>
                            <tr>
                                <td>2.1 ปริมาณงานที่ได้รับมอบหมาย</td>
                                <td align="center"><input type="radio" name="10" id="ev55" value="5" /></td>
                                <td align="center"><input type="radio" name="10" id="ev54" value="4" /></td>
                                <td align="center"><input type="radio" name="10" id="ev53" value="3" /></td>
                                <td align="center"><input type="radio" name="10" id="ev52" value="2" /></td>
                                <td align="center"><input type="radio" name="10" id="ev51" value="1" /></td>
                            </tr>
                            <tr>
                                <td>2.2 คุณลักษณะงาน (Job Description)</td>
                                <td align="center"><input type="radio" name="11" id="ev65" value="5" /></td>
                                <td align="center"><input type="radio" name="11" id="ev64" value="4" /></td>
                                <td align="center"><input type="radio" name="11" id="ev63" value="3" /></td>
                                <td align="center"><input type="radio" name="11" id="ev62" value="2" /></td>
                                <td align="center"><input type="radio" name="11" id="ev61" value="1" /></td>
                            </tr>
                            <tr>
                                <td>2.3 งานที่ได้รับมอบหมายตรงกับสาขาวิชาเอกของนักศึกษา</td>
                                <td align="center"><input type="radio" name="12" id="ev75" value="5" /></td>
                                <td align="center"><input type="radio" name="12" id="ev74" value="4" /></td>
                                <td align="center"><input type="radio" name="12" id="ev73" value="3" /></td>
                                <td align="center"><input type="radio" name="12" id="ev72" value="2" /></td>
                                <td align="center"><input type="radio" name="12" id="ev71" value="1" /></td>
                            </tr>
                            <tr>
                                <td>2.4 งานที่ได้รับมอบหมายตรงกับที่หน่วยงาน/สถานประกอบการเสนอไว้</td>
                                <td align="center"><input type="radio" name="13" id="ev85" value="5" /></td>
                                <td align="center"><input type="radio" name="13" id="ev84" value="4" /></td>
                                <td align="center"><input type="radio" name="13" id="ev83" value="3" /></td>
                                <td align="center"><input type="radio" name="13" id="ev82" value="2" /></td>
                                <td align="center"><input type="radio" name="13" id="ev81" value="1" /></td>
                            </tr>
                            <tr>
                                <td>2.5 งานที่ได้รับมอบหมายตรงกับความสนใจของนักศึกษา</td>
                                <td align="center"><input type="radio" name="14" id="ev95" value="5" /></td>
                                <td align="center"><input type="radio" name="14" id="ev94" value="4" /></td>
                                <td align="center"><input type="radio" name="14" id="ev93" value="3" /></td>
                                <td align="center"><input type="radio" name="14" id="ev92" value="2" /></td>
                                <td align="center"><input type="radio" name="14" id="ev91" value="1" /></td>
                            </tr>
                            <tr>
                                <td>2.6 ความเหมาะสมของงานที่นักศึกษาได้รับ</td>
                                <td align="center"><input type="radio" name="15" id="ev105" value="5" /></td>
                                <td align="center"><input type="radio" name="15" id="ev104" value="4" /></td>
                                <td align="center"><input type="radio" name="15" id="ev103" value="3" /></td>
                                <td align="center"><input type="radio" name="15" id="ev102" value="2" /></td>
                                <td align="center"><input type="radio" name="15" id="ev101" value="1" /></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>3. การมอบหมายงานของหัวหน้างาน/ผู้ดูแลการฝึกงาน</strong></td>
                            </tr>
                            <tr>
                                <td>3.1 มีผู้ดูแลการปฏิบัติงานของนักศึกษาตั้งแต่วันแรกที่เข้าทำงาน</td>
                                <td align="center"><input type="radio" name="16" id="z5" value="5" /></td>
                                <td align="center"><input type="radio" name="16" id="z4" value="4" /></td>
                                <td align="center"><input type="radio" name="16" id="z3" value="3" /></td>
                                <td align="center"><input type="radio" name="16" id="z2" value="2" /></td>
                                <td align="center"><input type="radio" name="16" id="z1" value="1" /></td>
                            </tr>
                            <tr>
                                <td>3.2 ผู้ดูแลการปฏิบัติงานมีความรู้และประสบการณ์วิชาชีพตรงกับงานที่มอบหมายให้นักศึกษา</td>
                                <td align="center"><input type="radio" name="17" id="ev125" value="5" /></td>
                                <td align="center"><input type="radio" name="17" id="ev124" value="4" /></td>
                                <td align="center"><input type="radio" name="17" id="ev133" value="3" /></td>
                                <td align="center"><input type="radio" name="17" id="ev122" value="2" /></td>
                                <td align="center"><input type="radio" name="17" id="ev121" value="1" /></td>
                            </tr>
                            <tr>
                                <td>3.3 เวลาที่ผู้ดูแลให้แก่นักศึกษาด้านการปฏิบัติงาน</td>
                                <td align="center"><input type="radio" name="18" id="ev135" value="5" /></td>
                                <td align="center"><input type="radio" name="18" id="ev134" value="4" /></td>
                                <td align="center"><input type="radio" name="18" id="ev133" value="3" /></td>
                                <td align="center"><input type="radio" name="18" id="ev132" value="2" /></td>
                                <td align="center"><input type="radio" name="18" id="ev131" value="1" /></td>
                            </tr>
                            <tr>
                                <td>3.4 เวลาที่ผู้ดูแลให้แก่นักศึกษาด้านการเขียนรายงานการปฏิบัติงาน</td>
                                <td align="center"><input type="radio" name="19" id="ev145" value="5" /></td>
                                <td align="center"><input type="radio" name="19" id="ev144" value="4" /></td>
                                <td align="center"><input type="radio" name="19" id="ev143" value="3" /></td>
                                <td align="center"><input type="radio" name="19" id="ev142" value="2" /></td>
                                <td align="center"><input type="radio" name="19" id="ev141" value="1" /></td>
                            </tr>
                            <tr>
                                <td>3.5 ผู้ดูแลมีความสนใจต่อการสอนงานและสั่งงาน</td>
                                <td align="center"><input type="radio" name="20" id="ev155" value="5" /></td>
                                <td align="center"><input type="radio" name="20" id="ev154" value="4" /></td>
                                <td align="center"><input type="radio" name="20" id="ev153" value="3" /></td>
                                <td align="center"><input type="radio" name="20" id="ev152" value="2" /></td>
                                <td align="center"><input type="radio" name="20" id="ev151" value="1" /></td>
                            </tr>
                            <tr>
                                <td>3.6
                                    มีการจัดตารางงานหรือจัดทำแผนปฏิบัติงานตลอดระยะเวลาของการปฏิบัติงานให้กับนักศึกษา</td>
                                <td align="center"><input type="radio" name="21" id="ev165" value="5" /></td>
                                <td align="center"><input type="radio" name="21" id="ev164" value="4" /></td>
                                <td align="center"><input type="radio" name="21" id="ev163" value="3" /></td>
                                <td align="center"><input type="radio" name="21" id="ev162" value="2" /></td>
                                <td align="center"><input type="radio" name="21" id="ev161" value="1" /></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>ส่วนที่ 2 สำหรับการประเมินนักศึกษา
                                        (ให้อาจารย์นิเทศสอบถามหน่วยงาน/สถานประกอบการ) </strong></td>
                            </tr>
                            <tr>
                                <td colspan="6"><strong>1. การพัฒนาตนเอง</strong></td>
                            </tr>
                            <tr>
                                <td>1.1 บุคลิกภาพ</td>
                                <td align="center"><input type="radio" name="22" id="ev175" value="5" /></td>
                                <td align="center"><input type="radio" name="22" id="ev174" value="4" /></td>
                                <td align="center"><input type="radio" name="22" id="ev173" value="3" /></td>
                                <td align="center"><input type="radio" name="22" id="ev172" value="2" /></td>
                                <td align="center"><input type="radio" name="22" id="ev171" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.2 วุฒิภาวะ</td>
                                <td align="center"><input type="radio" name="23" id="ev185" value="5" /></td>
                                <td align="center"><input type="radio" name="23" id="ev184" value="4" /></td>
                                <td align="center"><input type="radio" name="23" id="ev183" value="3" /></td>
                                <td align="center"><input type="radio" name="23" id="ev182" value="2" /></td>
                                <td align="center"><input type="radio" name="23" id="ev181" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.3 ปฏิภาณไหวพริบและการแก้ปัญหาเฉพาะหน้า</td>
                                <td align="center"><input type="radio" name="24" id="ev195" value="5" /></td>
                                <td align="center"><input type="radio" name="24" id="ev194" value="4" /></td>
                                <td align="center"><input type="radio" name="24" id="ev193" value="3" /></td>
                                <td align="center"><input type="radio" name="24" id="ev192" value="2" /></td>
                                <td align="center"><input type="radio" name="24" id="ev191" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.4 การเรียนรู้ในงานที่มอบหมาย</td>
                                <td align="center"><input type="radio" name="25" id="ev205" value="5" /></td>
                                <td align="center"><input type="radio" name="25" id="ev204" value="4" /></td>
                                <td align="center"><input type="radio" name="25" id="ev203" value="3" /></td>
                                <td align="center"><input type="radio" name="25" id="ev202" value="2" /></td>
                                <td align="center"><input type="radio" name="25" id="ev201" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.5 การกล้าแสดงออกและการแสดงความคิดเห็น</td>
                                <td align="center"><input type="radio" name="26" id="ev215" value="5" /></td>
                                <td align="center"><input type="radio" name="26" id="ev214" value="4" /></td>
                                <td align="center"><input type="radio" name="26" id="ev213" value="3" /></td>
                                <td align="center"><input type="radio" name="26" id="ev212" value="2" /></td>
                                <td align="center"><input type="radio" name="26" id="ev211" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.6 การปรับตัวและมีมนุษยสัมพันธ์</td>
                                <td align="center"><input type="radio" name="27" id="ev225" value="5" /></td>
                                <td align="center"><input type="radio" name="27" id="ev224" value="4" /></td>
                                <td align="center"><input type="radio" name="27" id="ev223" value="3" /></td>
                                <td align="center"><input type="radio" name="27" id="ev222" value="2" /></td>
                                <td align="center"><input type="radio" name="27" id="ev221" value="1" /></td>
                            </tr>
                            <tr>
                                <td>1.7 ความสามารถทางด้านการสื่อสาร</td>
                                <td align="center"><input type="radio" name="28" id="ev235" value="5" /></td>
                                <td align="center"><input type="radio" name="28" id="ev234" value="4" /></td>
                                <td align="center"><input type="radio" name="28" id="ev233" value="3" /></td>
                                <td align="center"><input type="radio" name="28" id="ev232" value="2" /></td>
                                <td align="center"><input type="radio" name="28" id="ev231" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>2. การแสดงความมีส่วนร่วมกับองค์กร </strong></td>
                                <td align="center"><input type="radio" name="29" id="ev245" value="5" /></td>
                                <td align="center"><input type="radio" name="29" id="ev244" value="4" /></td>
                                <td align="center"><input type="radio" name="29" id="ev243" value="3" /></td>
                                <td align="center"><input type="radio" name="29" id="ev242" value="2" /></td>
                                <td align="center"><input type="radio" name="29" id="ev241" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>3. ความประพฤติ คุณธรรม จริยธรรม และการปฏิบัติตามระเบียบวินัยขององค์กร
                                        การลางาน การขาดงาน การแต่งกาย </strong></td>
                                <td align="center"><input type="radio" name="30" id="ev255" value="5" /></td>
                                <td align="center"><input type="radio" name="30" id="ev254" value="4" /></td>
                                <td align="center"><input type="radio" name="30" id="ev253" value="3" /></td>
                                <td align="center"><input type="radio" name="30" id="ev252" value="2" /></td>
                                <td align="center"><input type="radio" name="30" id="ev251" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>4.
                                        ความรู้ความสามารถพื้นฐานที่จำเป็นต่อการปฏิบัติงานที่ได้รับมอบหมายให้สำเร็จ</strong></td>
                                <td align="center"><input type="radio" name="31" id="ev265" value="5" /></td>
                                <td align="center"><input type="radio" name="31" id="ev264" value="4" /></td>
                                <td align="center"><input type="radio" name="31" id="ev263" value="3" /></td>
                                <td align="center"><input type="radio" name="31" id="ev262" value="2" /></td>
                                <td align="center"><input type="radio" name="31" id="ev261" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>5. ความก้าวหน้าของงานที่ได้รับมอบหมาย </strong></td>
                                <td align="center"><input type="radio" name="32" id="ev275" value="5" /></td>
                                <td align="center"><input type="radio" name="32" id="ev274" value="4" /></td>
                                <td align="center"><input type="radio" name="32" id="ev273" value="3" /></td>
                                <td align="center"><input type="radio" name="32" id="ev272" value="2" /></td>
                                <td align="center"><input type="radio" name="32" id="ev271" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>6. ความก้าวหน้าของการบันทึกรายงานการปฏิบัติงาน </strong></td>
                                <td align="center"><input type="radio" name="33" id="ev285" value="5" /></td>
                                <td align="center"><input type="radio" name="33" id="ev284" value="4" /></td>
                                <td align="center"><input type="radio" name="33" id="ev283" value="3" /></td>
                                <td align="center"><input type="radio" name="33" id="ev282" value="2" /></td>
                                <td align="center"><input type="radio" name="33" id="ev281" value="1" /></td>
                            </tr>
                            <tr>
                                <td><strong>7. สรุปโดยรวมของนักศึกษา</strong></td>
                                <td align="center"><input type="radio" name="34" id="ev295" value="5" /></td>
                                <td align="center"><input type="radio" name="34" id="ev294" value="4" /></td>
                                <td align="center"><input type="radio" name="34" id="ev293" value="3" /></td>
                                <td align="center"><input type="radio" name="34" id="ev292" value="2" /></td>
                                <td align="center"><input type="radio" name="34" id="ev291" value="1" /></td>
                            </tr>








                            <tr>
                                <td colspan="6">
                                    <table width="100%">
                                        <tr>

                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label class="control-label col-md-1">ข้อเสนอแนะ</label>
                                                    <div class="col-md-9">
                                                        <textarea rows="10" class="form-control" id="cmm" name="cmm"
                                                            placeholder="ความคิดเห็นเพิ่มเติม..."></textarea>
                                                    </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td width="500">&nbsp;</td>
                                            <td width="10">&nbsp;</td>
                                        </tr>
                                    </table>
                                    <!--<input name="std_id" type="text" id="std_id" value="<?php echo$tb_std_id; ?>" /> -->
                                    <?php $_SESSION['stdId'] = $tb_std_id; 
         ?>


                                </td>
                            </tr>
                    </table>
                    <p>
                        <div align="center">

                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                ประเมิน</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="goBack()"><i
                                    class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                        </div>
                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>

                    </p>
                    <p>&nbsp;</p>
                </form>


                <!--
                         <ol class="breadcrumb">
                            <li class="active">
                               <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
                            </li>
                        </ol>
                                    
    -->

            </div><!-- /.table reponsive -->
        </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>