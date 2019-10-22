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
            <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="advisor_bio.php"><em class="fa fa-user">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>


            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศ</a></li>
            <li><a href="student_per.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการฝึกวิชาชีพ นศ
                    <!-- &amp; --></a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน นศ</a></li>
            <li><a href="webboard.php"><em class="fa fa-commenting-o">&nbsp;</em> Webboard</a></li>
            <li><a href="advisor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
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
                <li class="active">View Assessment </li>
            </ol>
        </div>
        <!--/.row-->


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ผลการประเมิน <small>นักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-check"></i> รายละเอียดผลการประเมิน
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
                                        
                                        $sql = "SELECT tb_student.*,tb_mentor.*,

                                    tb_prefix.*,
                                    tb_student_category.*,
                                   
                                    tb_advisor.*,lo_name.*,cate_lo.*,province_lo.*


                                    FROM tb_student 
                                    LEFT JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    LEFT JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id   = tb_student_category.tb_stdcate_id  
                                    LEFT JOIN tb_advisor ON tb_student.tb_advisor_tb_ads_id   = tb_advisor.tb_ads_id  
                                    LEFT JOIN tb_mentor ON tb_student.tb_mentor_tb_mentor_id   = tb_mentor.tb_mentor_id 

                                    LEFT JOIN lo_name ON lo_name.id = tb_student.tb_std_senamelo 
                                    LEFT JOIN cate_lo ON cate_lo.id = tb_student.tb_std_secate 
                                    LEFT JOIN province_lo ON province_lo.id = tb_student.tb_std_seprovince 
                                    where tb_advisor_tb_ads_id='$id' ";
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
                                <div style="  width: 400px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
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



                <form name="form1" method="post" action="../../../sql_function/sql_add_eva_student.php" onSubmit="JavaScript:return fncSubmit();">
                    <table width="100%" height="auto" align="center" class="table table-hover">
                        <tr valign="top">
                            <td width="91%" bgcolor="#CCCCCC">
                                <div align="center"><strong>หัวข้อการประเมิน</strong></div>
                            </td>
                            <td width="9%" bgcolor="#CCCCCC">
                                <div align="center"><strong>ระดับความคิดเห็น</strong></div>
                            </td>


                        </tr>


                        <tr>
                            <td colspan="6"><strong>ส่วนที่ 1 สำหรับการประเมินหน่วยงาน/สถานประกอบการ
                                    (ให้อาจารย์นิเทศสอบถามนักศึกษา)</strong></td>
                        </tr>
                        <tr>
                            <td colspan="6"><strong>1. การจัดการและสนับสนุน</strong></td>
                        </tr>

                        <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='1'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i1 = $rows['score'];

        ?>
                        <tr>
                            <td>1.1 การประสานงานด้านการจัดการดูแลนักศึกษาในหน่วยงาน/สถานประกอบการ ระหว่างบุคคล
                                และหัวหน้างาน/ผู้ดูแล</td>
                            <td width="9%" align="center">
                                <?php echo $i1; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='2'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i2 = $rows['score'];

        ?>
                            <td>1.2 การให้คำแนะนำดูแลนักศึกษาของฝ่ายบุคคล (การปฐมนิเทศ การแนะนำระเบียบวินัย การลางาน
                                สวัสดิการ การจ่ายค่าตอบแทน)</td>
                            <td width="9%" align="center">
                                <?php echo $i2; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='3'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i3 = $rows['score'];

        ?>
                            <td>1.3 บุคลากรในหน่วยงาน/สถานประกอบการ ให้ความสนใจ สนับสนุนและให้ความเป็นกันเองกับนักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i3; ?>
                            </td>

                        </tr>


                        </tr>

                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='4'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i4 = $rows['score'];

        ?>
                            <td>1.4 ประโยชน์ที่นักศึกษาฝึกงานได้รับ</td>
                            <td width="9%" align="center">
                                <?php echo $i4; ?>
                            </td>

                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='5'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i5 = $rows['score'];

        ?>
                            <td>1.5 ความปลอดภัยของนักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i5; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='6'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i6 = $rows['score'];

        ?>
                            <td>1.6 ความเหมาะสมของตำแหน่งงานที่ได้รับมอบหมาย</td>
                            <td width="9%" align="center">
                                <?php echo $i6; ?>
                            </td>

                        </tr>

                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='7'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i7 = $rows['score'];

        ?>
                            <td>1.7 นักศึกษาสามารถนำประสบการณ์ไปใช้ในการทำงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i7; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='8'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i8 = $rows['score'];

        ?>
                            <td>1.8 สถานที่และสภาพแวดล้อมเหมาะสม</td>
                            <td width="9%" align="center">
                                <?php echo $i8; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='9'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i9 = $rows['score'];

        ?>
                            <td>ภาพรวม</td>
                            <td width="9%" align="center">
                                <?php echo $i9; ?>
                            </td>

                        </tr>


                        <tr>
                            <td colspan="6"><strong>2. ปริมาณงานและคุณภาพงานที่นักศึกษา ได้รับมอบหมาย</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='10'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i10 = $rows['score'];

        ?>
                            <td>2.1 ปริมาณงานที่ได้รับมอบหมาย</td>
                            <td width="9%" align="center">
                                <?php echo $i10; ?>
                            </td>

                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='11'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i11 = $rows['score'];

        ?>
                            <td>2.2 คุณลักษณะงาน (Job Description)</td>
                            <td width="9%" align="center">
                                <?php echo $i11; ?>
                            </td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='12'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i12 = $rows['score'];

        ?>
                            <td>2.3 งานที่ได้รับมอบหมายตรงกับสาขาวิชาเอกของนักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i12; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='13'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i13 = $rows['score'];

        ?>
                            <td>2.4 งานที่ได้รับมอบหมายตรงกับที่หน่วยงาน/สถานประกอบการเสนอไว้</td>
                            <td width="9%" align="center">
                                <?php echo $i13; ?>
                            </td>

                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='14'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i14 = $rows['score'];

        ?>
                            <td>2.5 งานที่ได้รับมอบหมายตรงกับความสนใจของนักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i14; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='15'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i15 = $rows['score'];

        ?>
                            <td>2.6 ความเหมาะสมของงานที่นักศึกษาได้รับ</td>
                            <td width="9%" align="center">
                                <?php echo $i15; ?>
                            </td>

                        </tr>
                        <tr>

                            <td colspan="6"><strong>3. การมอบหมายงานของหัวหน้างาน/ผู้ดูแลการฝึกงาน</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='16'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i16 = $rows['score'];

        ?>
                            <td>3.1 มีผู้ดูแลการปฏิบัติงานของนักศึกษาตั้งแต่วันแรกที่เข้าทำงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i16; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='17'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i17 = $rows['score'];

        ?>
                            <td>3.2 ผู้ดูแลการปฏิบัติงานมีความรู้และประสบการณ์วิชาชีพตรงกับงานที่มอบหมายให้นักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i17; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='18'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i18 = $rows['score'];

        ?>
                            <td>3.3 เวลาที่ผู้ดูแลให้แก่นักศึกษาด้านการปฏิบัติงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i18; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='19'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i19 = $rows['score'];

        ?>
                            <td>3.4 เวลาที่ผู้ดูแลให้แก่นักศึกษาด้านการเขียนรายงานการปฏิบัติงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i19; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='20'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i20 = $rows['score'];

        ?>
                            <td>3.5 ผู้ดูแลมีความสนใจต่อการสอนงานและสั่งงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i20; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='21'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i21 = $rows['score'];

        ?>
                            <td>3.6 มีการจัดตารางงานหรือจัดทำแผนปฏิบัติงานตลอดระยะเวลาของการปฏิบัติงานให้กับนักศึกษา</td>
                            <td width="9%" align="center">
                                <?php echo $i21; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                     $sum1 = $i1 + $i2 +$i3 + $i4 + $i5 + $i6 + $i7+ $i8+ $i9+ $i10 +$i11
                            +$i12 +$i13 +$i14+ $i15 +$i16 +$i17 +$i18 +$i19 + $i20+ $i21 ;
                         
                        ?>

                            <td><strong>สรุปการประเมินหน่วยงาน</strong></td>
                            <td width="9%" align="center">
                                <?php if($sum1 >=60)  
            {
              echo '<center>   <button class="btn btn-success btn-xs">  
                                                    <i class="glyphicon glyphicon-ok-circle"> ควรให้นักศึกษารุ่นถัดไปมาฝึกงานที่นี่  </i></button></center>';
            }else {
              echo ' <center>   <button class="btn btn-danger btn-xs">  
                                                    <i class="glyphicon glyphicon-remove-circle"> ไม่ควรให้นักศึกษารุ่นถัดไปมาฝึกงานที่นี่  </i></button></center>';
            } ?>
                            </td>

                        </tr>


                        <tr>
                            <td colspan="6">
                                <table width="100%">
                                    <tr>

                                        <td colspan="2">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">ข้อเสนอแนะเกี่ยวกับหน่วยงาน</label>
                                                <div class="col-md-9">
                                                    <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='cmm'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);

        ?>
                                                    <textarea placeholder="ข้อเสนอแนะเกี่ยวกับหน่วยงาน" rows="10" class="form-control"
                                                        id="cmm2" name="cmm2" disabled> <?php echo $rows['cmm2'];?> </textarea>
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



                            </td>
                        <tr>
                            <td colspan="6"><strong>ส่วนที่ 2 สำหรับการประเมินนักศึกษา
                                    (ให้อาจารย์นิเทศสอบถามหน่วยงาน/สถานประกอบการ) </strong></td>
                        </tr>
                        <tr>
                            <td colspan="6"><strong>1. การพัฒนาตนเอง</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='22'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i22 = $rows['score'];

        ?>
                            <td>1.1 บุคลิกภาพ</td>
                            <td width="9%" align="center">
                                <?php echo $i22; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='23'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i23 = $rows['score'];

        ?>
                            <td>1.2 วุฒิภาวะ</td>
                            <td width="9%" align="center">
                                <?php echo $i23; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='24'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i24 = $rows['score'];

        ?>
                            <td>1.3 ปฏิภาณไหวพริบและการแก้ปัญหาเฉพาะหน้า</td>
                            <td width="9%" align="center">
                                <?php echo $i24; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='25'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i25 = $rows['score'];

        ?>
                            <td>1.4 การเรียนรู้ในงานที่มอบหมาย</td>
                            <td width="9%" align="center">
                                <?php echo $i25; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='26'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i26 = $rows['score'];

        ?>
                            <td>1.5 การกล้าแสดงออกและการแสดงความคิดเห็น</td>
                            <td width="9%" align="center">
                                <?php echo $i26; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='27'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i27 = $rows['score'];

        ?>
                            <td>1.6 การปรับตัวและมีมนุษยสัมพันธ์</td>
                            <td width="9%" align="center">
                                <?php echo $i27; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='28'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i28 = $rows['score'];

        ?>
                            <td>1.7 ความสามารถทางด้านการสื่อสาร</td>
                            <td width="9%" align="center">
                                <?php echo $i28; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='29'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i29 = $rows['score'];

        ?>
                            <td><strong>2. การแสดงความมีส่วนร่วมกับองค์กร </strong></td>
                            <td width="9%" align="center">
                                <?php echo $i29; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='30'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i30 = $rows['score'];

        ?>
                            <td><strong>3. ความประพฤติ คุณธรรม จริยธรรม และการปฏิบัติตามระเบียบวินัยขององค์กร การลางาน
                                    การขาดงาน การแต่งกาย </strong></td>
                            <td width="9%" align="center">
                                <?php echo $i30; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='31'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i31 = $rows['score'];

        ?>
                            <td><strong>4. ความรู้ความสามารถพื้นฐานที่จำเป็นต่อการปฏิบัติงานที่ได้รับมอบหมายให้สำเร็จ</strong></td>
                            <td width="9%" align="center">
                                <?php echo $i31; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='32'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i32 = $rows['score'];


        ?>
                            <td><strong>5. ความก้าวหน้าของงานที่ได้รับมอบหมาย </strong></td>
                            <td width="9%" align="center">
                                <?php echo $i32; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='33'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i33 = $rows['score'];

        ?>
                            <td><strong>6. ความก้าวหน้าของการบันทึกรายงานการปฏิบัติงาน </strong></td>
                            <td width="9%" align="center">
                                <?php echo $i33; ?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='34'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i34 = $rows['score'];

        ?>
                            <td><strong>7. สรุปโดยรวมของนักศึกษา</strong></td>
                            <td width="9%" align="center">
                                <?php echo $i34; ?>
                            </td>

                        </tr>


                        <tr>
                            <?php
                           $sum2 = $i22 + $i23+ $i24+ $i25+ $i26+ $i27+ $i28+ $i29+ $i30+
                                   $i31+ $i32+ $i33+ $i34;

                         
                        ?>

                            <td><strong>คะแนนรวมทั้งหมด</strong></td>
                            <td width="9%" align="center">
                                <font color="#FF0000">
                                    <?php echo $sum2;?> จาก 65 </font>
                            </td>

                        </tr>
                        <tr>
                            <?php
                        $sum3 = $sum2*100/65;
                        $f = sprintf ("%.2f", $sum3);
                            
                        
                        ?>

                            <td><strong>คิดเป็นร้อยละ</strong></td>
                            <td width="9%" align="center">
                                <font color="#FF0000">
                                    <?php echo $f;?> % </font>
                            </td>

                        </tr>







                        <tr>
                            <td colspan="6">
                                <table width="100%">
                                    <tr>

                                        <td colspan="2">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">ข้อเสนอแนะเกี่ยวกับนักศึกษา</label>
                                                <div class="col-md-9">
                                                    <?php
                 include ("../../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_advisor WHERE adv_id ='$id' AND std_id='$tb_std_id' AND eva_no='cmm'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);

        ?>
                                                    <textarea placeholder="ข้อเสนอแนะ..." rows="10" class="form-control"
                                                        id="cmm" name="cmm" disabled> <?php echo $rows['cmm'];?> </textarea>
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



                            </td>
                        </tr>
                    </table>
                    <p>

                        <script>
                            function goBack() {
                                window.history.back();
                            }
                        </script>

                    </p>
                    <p>&nbsp;</p>
                </form>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
                    </li>
                </ol>

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