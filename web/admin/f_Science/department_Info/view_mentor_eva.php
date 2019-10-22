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
                <img src="../../picture/<?php  echo $row['tb_dept_img'];?>" alt="stack photo" class="img">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <?php echo $_SESSION['name']; ?>
                    <?php echo $_SESSION['lastname']; ?> <b class="caret"></b></div>
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
            <li><a href="department_bio.php"><em class="fa fa-user">&nbsp;</em> Manage Profile</a></li>
            <li><a href="advisor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลอาจารย์ที่ปรึกษา</a></li>
            <li><a href="student.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลนักศึกษา</a></li>
            <li><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลพี่เลี้ยง
                    <!-- &amp; --></a></li>
            <li><a href="location.php"><em class="fa fa-map-marker">&nbsp;</em> จัดการข้อมูลสถานที่</a></li>
            <li><a href="document.php"><em class="fa fa-file-text">&nbsp;</em> จัดการเอกสาร</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> จัดการตารางนิเทศ</a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน</a></li>
            <li class="active"><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ผลการประเมิณนักศึกษา</a></li>
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

            <li><a href="../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Evaluation Result</li>
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
                                <i class="fa fa-check"></i> รายละเอียดผลการประเมินจาก #พี้เลี้ยง
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

                                        include ("../../sql_function/connect.php");
                                        extract($_GET);
                                        $tb_std_id = $flag;
                                        
                                        $sqls = "SELECT tb_student.*,

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
                                    WHERE tb_student.tb_std_id ='$tb_std_id' ";
                            $result = mysql_query($sqls) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $studentimg =  $row['tb_std_img'];
                            $preID = $row['tb_prefix_id'];
                            $proID = $row['Pid'];
                            $AmID = $row['Aid'];
                            $TmID = $row['Tid'];

                            $stcID = $row['tb_std_id'];
                            $status =  $row['tb_std_status_id'];
                            $advisor = $row['tb_advisor_tb_ads_id'];
                            $advisorname = $row['tb_ads_name'];
                            $advisorlastname = $row['tb_ads_lastname'];
                            $mentor_id = $row['tb_mentor_tb_mentor_id'];

                            $mentername = $row['tb_mentor_name'];
                            $menterlastname = $row['tb_mentor_lastname'];
                            $wen = "    ";
                            $std_imggpa = $row['tb_std_imggpa'];
                           

                          
                            mysql_close();
                            ?>



                <table class="table table-hover">

                    <tbody>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>&nbsp;</th>
                            <td><img src="../../student_pic/<?php  echo $studentimg ?>" width=150 height=150></td>
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
                                <?php echo $row['tb_mentor_name']; ?>
                                <?php echo $row['tb_mentor_lastname']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>อาจารย์ที่ปรึกษา</th>
                            <td>อาจารย์
                                <?php echo $row['tb_ads_name']; ?>
                                <?php echo $row['tb_ads_lastname']; ?>
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



                    </tbody>

                </table>

                <!-- End table student deatail -->



                <form name="form1" method="post" action="../../sql_function/sql_add_evm_student.php" onSubmit="JavaScript:return fncSubmit();">
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
                            <td colspan="6"><strong>ผลสำเร็จของงาน (Work Achievement)</strong></td>
                        </tr>


                        <tr>
                            <td><strong>1. การปฏิบัติงาน (Performance)</strong></td>
                            <td width="9%" align="center"> </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

       $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='1'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i1 = $rows['tb_evm_score'];
        ?>
                            <td>1.1 ปริมาณงาน (Quantity of Work)</td>
                            <td width="9%" align="center">
                                <?php echo $i1;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

         $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='2'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i2 = $rows['tb_evm_score'];

        ?>
                            <td>1.2 คุณภาพงาน (Quality of Work)</td>
                            <td width="9%" align="center">
                                <?php echo $i2;?>
                            </td>

                        </tr>

                        <tr>
                            <td colspan="6"><strong>2. ความรู้ความสามารถ (Knowledge and Ability)</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='3'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i3 = $rows['tb_evm_score'];

        ?>
                            <td>2.1 ความรู้ความสามารถทางวิชาการ (Academic Ability)
                                นักศึกษามีความรู้ทางวิชาการเพียงพอที่จะทำงานตามที่ได้รับมอบหมาย
                                (ในระดับที่นักศึกษาทำได้)</td>
                            <td width="9%" align="center">
                                <?php echo $i3;?>
                            </td>

                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='4'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i4 = $rows['tb_evm_score'];

        ?>
                            <td>2.2 ความสามารถในการเรียนรู้และประยุกต์วิชาการ(Ability to Learn and Apply
                                Knowledge)ความรวดเร็วในการเรียนรู้ เข้าใจข้อมูล ข่าวสาร และวิธีการทำงาน
                                ตลอดจนการนำความรู้ไปประยุกต์ใช้งาน</td>
                            <td width="9%" align="center">
                                <?php echo $i4;?>
                            </td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='5'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i5 = $rows['tb_evm_score'];
        ?>
                            <td>2.3 ความรู้ความเชี่ยวชาญด้านปฏิบัติการ (Practical Ability) เช่น การปฏิบัติงานในภาคสนาม
                                ในห้องปฏิบัติการ</td>
                            <td width="9%" align="center">
                                <?php echo $i5;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='6'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i6 = $rows['tb_evm_score'];

        ?>
                            <td>2.4 วิจารณญาณและการตัดสินใจ (Judgment and Decision Making) ตัดสินใจได้ดี ถูกต้อง
                                รวดเร็ว มีการวิเคราะห์ข้อมูลและปัญหาต่างๆอย่างรอบคอบก่อนการตัดสินใจ
                                สามารถแก้ปัญหาเฉพาะหน้า สามารถไว้วางใจให้ตัดสินใจได้ด้วยตนเอง</td>
                            <td width="9%" align="center">
                                <?php echo $i6;?>
                            </td>

                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='7'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i7 = $rows['tb_evm_score'];

        ?>
                            <td>2.5 การจัดการและวางแผน (Management and Planning)
                                สามารถจัดการและวางแผนการทำงานให้เสร็จตามเป้าหมาย</td>
                            <td width="9%" align="center">
                                <?php echo $i7;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

         $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='8'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i8 = $rows['tb_evm_score'];

        ?>
                            <td>2.6 ทักษะการสื่อสาร (Communication Skills) ความสามรถในการติดต่อสื่อสาร การพูด การเขียน
                                การนำเสนอ สามารถสื่อให้เข้าใจได้ง่าย เรียบร้อย ชัดเจน ถูกต้อง รัดกุม
                                มีลำดับขั้นตอนที่ดี ไม่ก่อให้เกิดความสันสนต่อการทำงาน รู้จักสอบถาม
                                รู้จักชี้แจงผลการปฏิบัติงานและข้อขัดข้องให้ทราบ</td>
                            <td width="9%" align="center">
                                <?php echo $i8;?>
                            </td>

                        </tr>
                        <tr>

                            <td colspan="6"><strong>3. ความรับผิดชอบต่อหน้าที่ (Responsibility)</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='9'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i9 = $rows['tb_evm_score'];

        ?>
                            <td>3.1 ความรับผิดชอบและเป็นผู้ที่ไว้วางใจได้ (Responsibility and Dependability)
                                ดำเนินงานให้สำเร็จลุล่วงโดยคำนึงถึงเป้าหมาย และความสำเร็จของงานเป็นหลัก
                                ยอมรับผลที่เกิดจากการทำงานอย่างมีเหตุผล สามารถปล่อยให้ทำงาน (กรณีงานประจำ ถ้ามี)
                                ได้โดยไม่ต้องควบคุมมากจนเกินไป ความจำเป็นในการตรวจสอบขั้นตอนและผลงานตลอดเวลา
                                สามารถไว้วางใจให้รับผิดชอบงานที่มากกว่างานหลัก สามารถไว้วางใจได้แทบทุกสถานการณ์หรือ
                                ในสถานการณ์ปกติเท่านั้น</td>
                            <td width="9%" align="center">
                                <?php echo $i9;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='10'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i10 = $rows['tb_evm_score'];


        ?>
                            <td>3.2 ความสนใจ อุตสาหะในการทำงาน (Interest in Work) ความสนใจและความกระตือรือร้นในการทำงาน
                                มีความอุตสาหะ ความพยายาม ความตั้งใจที่จะทำงานได้สำเร็จ ความมานะบากบั่น
                                ไม่ย่อท้อต่ออุปสรรคและปัญหา</td>
                            <td width="9%" align="center">
                                <?php echo $i10;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='11'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i11 = $rows['tb_evm_score'];

        ?>
                            <td>3.3 ความสามารถเริ่มต้นทำงานได้ด้วยตนเอง (Initiative) เมื่อได้รับคำชี้แนะ
                                สามารถเริ่มทำงานเองได้โดยไม่ต้องรอคำสั่ง (กรณีงานประจำ) เสนอตัวเข้าช่วยงาน
                                มาขอรับงานใหม่ๆ ไปทำ ไม่ปล่อยเวลาว่างโดยเปล่าประโยชน์</td>
                            <td width="9%" align="center">
                                <?php echo $i11;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='12'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i12 = $rows['tb_evm_score'];

        ?>
                            <td>3.4 การตอบสนองต่อการสั่งการ (Response to Supervision) ยินดีรับคำสั่ง คำแนะนำ คำวิจารณ์
                                ไม่แสดงความอึดอัดใจเมื่อได้รับคำติเตือน และวิจารณ์ ความรวดเร็วในการปฏิบัติตามคำสั่ง
                                และการปรับตัว ปฏิบัติตามคำแนะนำ ข้อเสนอแนะและวิจารณ์</td>
                            <td width="9%" align="center">
                                <?php echo $i12;?>
                            </td>

                        </tr>


                        <tr>
                            <td colspan="6"><strong>4. ลักษณะส่วนบุคคล (Personality)</strong></td>
                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='13'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i13 = $rows['tb_evm_score'];

        ?>
                            <td>4.1 บุคลิกภาพและการวางตัว (Personality) มีบุคลิกภาพและวางตัวได้เหมาะสม เช่น ทัศนคติ
                                วุฒิภาวะ ความอ่อนน้อมถ่อมตน การแต่งกาย กิริยาวาจา การตรงต่อเวลา และอื่นๆ</td>
                            <td width="9%" align="center">
                                <?php echo $i13;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

         $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='14'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i14 = $rows['tb_evm_score'];

        ?>
                            <td>4.2 มนุษยสัมพันธ์ (Interpersonal Skills) สามารถร่วมงานกับผู้อื่น การทำงานเป็นทีม
                                สร้างมนุษยสัมพันธ์ได้ดี เป็นที่รักใคร่ของผู้ร่วมงาน
                                เป็นผู้ที่ช่วยก่อให้เกิดความร่วมมือประสานงาน</td>
                            <td width="9%" align="center">
                                <?php echo $i14;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='15'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i15 = $rows['tb_evm_score'];

        ?>
                            <td>4.3 การมีระเบียบวินัย ปฏิบัติตามวัฒนธรรมองค์กร (Discipline and Adaptability to Formal
                                Organization) ความสนใจเรียนรู้ศึกษากฎระเบียบ นโยบายต่างๆและปฏิบัติตามโดยเต็มใจ</td>
                            <td width="9%" align="center">
                                <?php echo $i15;?>
                            </td>

                        </tr>
                        <tr>
                            <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='16'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);
        $i16 = $rows['tb_evm_score'];
        ?>
                            <td>4.4 คุณธรรมและจริยธรรม (Ethics and Morality) มีความซื่อสัตย์ สุจริต มีจิตใจดี
                                รู้จักเสียสละ ไม่เห็นแก่ตัว เอื้อเฟื้อ ช่วยเหลือผู้อื่น</td>
                            <td width="9%" align="center">
                                <?php echo $i16;?>
                            </td>

                        </tr>

                        <tr>
                            <td></br></td>
                            <td></br></td>

                        </tr>
                        <tr>
                            <?php
                            $sqlScore="SELECT  sum(tb_evm_score) as sumScore FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id= '$tb_std_id'";
                             
                            $queryScore=mysql_query($sqlScore);
                            $rwScore = mysql_fetch_array($queryScore);
                         
                        ?>

                            <td><strong>คะแนนรวมทั้งหมด</strong></td>
                            <td width="9%" align="center">
                                <font color="#FF0000">
                                    <?php echo $rwScore['sumScore'];?> จาก 80 </font>
                            </td>

                        </tr>
                        <tr>
                            <?php
                            $sqlScore="SELECT  sum(tb_evm_score)*100/80 as sumScore FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id= '$tb_std_id'";
                             
                            $queryScore=mysql_query($sqlScore);
                            $rwScore = mysql_fetch_array($queryScore);
                            $score = $rwScore['sumScore'];
                            $f = sprintf ("%.2f", $score);
                            
                        
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
                                                <label class="control-label col-md-1">ข้อเสนอแนะ</label>
                                                <div class="col-md-9">
                                                    <?php
                 include ("../../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE  tb_student_tb_std_id='$tb_std_id' AND tb_evm_no='tb_ev'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_fetch_array($query_eva);

        ?>
                                                    <textarea placeholder="ข้อเสนอแนะ..." rows="10" class="form-control"
                                                        id="tb_evm_comment" name="tb_evm_comment" disabled> <?php echo $rows['tb_evm_comment'];?> </textarea>
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