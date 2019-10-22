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
                <img src="../../../student_pic/<?php  echo $_SESSION['picture']; ?>" class="img-responsive" alt="">
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
            <li><a href="mentor_bio.php"><em class="fa fa-user">&nbsp;</em>Manage Profile</a></li>
            <li class="active"><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>


            <li><a href="student_come.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการมาฝึกวิชาชีพรายวัน</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศอาจารย์
                    <!-- &amp; --></a></li>
            <li><a href="mentor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
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
                <li class="active">Student Detail</li>
            </ol>
        </div>
        <!--/.row-->



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายละเอียด <small>ข้อมูลนักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-flag"></i> รายละเอียดข้อมูลนักศึกษา
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- add new advisor button -->
                <?php
include ("../../department_Info/add_location.php");
?>
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
                            <th>ชื่อ </th>
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
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>วันเดือนปีเกิด</th>
                            <td>
                                <?php echo $row['tb_std_birthday']; ?>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>อีเมลล์</th>
                            <td>
                                <?php echo $row['tb_std_email']; ?>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>เบอร์โทรติดต่อ</th>
                            <td>
                                <?php echo $row['tb_std_tel']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ที่อยู่อาศัย</th>
                            <td>
                                <?php echo $row['tb_std_address']; ?>
                                <?php echo $row['tb_std_homeno']; ?>
                                <?php echo $row['tb_std_soi']; ?>
                                <?php echo $row['tb_std_rode']; ?>
                                <?php echo $row['Tname']; ?>
                                <?php echo $row['Aname']; ?>
                                <?php echo $row['Pname']; ?>
                                <?php echo $row['tb_std_post']; ?>
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
                                <?php if($mentor_id == '0' || '')  
            {
              echo '<button class="btn btn-danger btn-xs">  
              <i class="glyphicon glyphicon-remove-circle"> ยังไม่ได้เพิ่มข้อมูลพี่เลี้ยง</i></button>';
            }else

               echo $mentername.$wen.$menterlastname
            


             ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>อาจารย์ที่ปรึกษา</th>
                            <td>
                                <?php if($advisor == '0' || '')  
            {
              echo '<button class="btn btn-danger btn-xs">  
              <i class="glyphicon glyphicon-remove-circle"> ยังไม่ได้เพิ่มข้อมูลอาจารย์ที่ปรึกษา</i></button>';
            }else

               echo $advisorname.$wen.$advisorlastname
            


             ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>สถานที่ปฏิบัติงาน</th>
                            <td>
                                <?php echo $row['LNname'];?>
                                <?php echo $row['PLname'];?>
                                <?php echo $row['tb_std_offerlo'];?>
                                <?php echo $row['tb_std_offerlo_d'];?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>สถานะนักศึกษา</th>
                            <td>
                                <?php if($status == '1')  
            {
              echo '<button class="btn btn-success btn-xs">  
                                                    <i class="glyphicon glyphicon-ok-circle"> อนุมัติแล้ว(Approval) </i></button>';
            }else if($status == '2') {
              echo '   <button class="btn btn-warning btn-xs">  
                                                    <i class="glyphicon glyphicon-time"> รอการอนุมัติ(Processing)  </i></button>';
            }else

              echo '  <button class="btn btn-danger btn-xs">  
                                                    <i class="glyphicon glyphicon-remove-circle"> ไม่อนุมัติ(Disapprove)  </i></button>';
            


             ?>
                            </td>
                        </tr>


                    </tbody>

                </table>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
                    </li>
                </ol>



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