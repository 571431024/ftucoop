<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}

?>




<head>

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
                    <span class="icon-bar"></span></button>
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
            <li class="active"><a href="student_per.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการฝึกวิชาชีพ นศ
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
                <li class="active">Student Training Detail</li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            บันทึก <small>การฝึกวิชาชีพนักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-save"></i> รายละเอียดบันทึกการฝึกวิชาชีพ
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
                <?php include("fn_return2.php"); ?>

                <?php

                                        include ("../../../sql_function/connect.php");
                                        extract($_GET);
                                        $tb_rp_id = $flag;
                                        $sql = "SELECT  tb_record_performance.*, tb_student.*, tb_prefix.*,tb_student_category.*

                                    FROM tb_record_performance

                                    LEFT JOIN tb_student ON tb_record_performance.tb_student_tb_std_id = tb_student.tb_std_id
                                    LEFT JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id 
                                    LEFT JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id = tb_student_category.tb_stdcate_id 
                                    WHERE tb_rp_id='$tb_rp_id' ";
                                      $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                           
                            $wen = "    ";

                            

                                    ?>



                <table class="table table-hover">

                    <tbody>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>วันที่โพส</th>
                            <td>
                                <?php echo $row['tb_rp_date']; ?>
                            </td>
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
                            <th>ชื่อ-สกุล</th>
                            <td>
                                <?php echo $row['tb_prefix_name']; ?>
                                <?php echo $row['tb_std_name']; ?>
                                <?php echo $row['tb_std_lastname']; ?>
                            </td>
                        </tr>
                        <tr>


                            <th align="right" scope="row">&nbsp;</th>
                            <th>นักศึกษาประเภท</th>
                            <td>
                                <?php echo $row['tb_stdcate_cate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>หัวข้อ</th>
                            <td>
                                <?php echo $row['tb_rp_topic']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp; </th>
                            <th width="20%">รายละเอียด <br><br><br><br><br><br><br><br> </th>
                            <td>
                                <?php echo $row['tb_rp_describtion']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th align="right" scope="row">&nbsp;</th>
                            <th>ไฟล์แนบ</th>
                            <td><a href=../file_rec/ <?php echo $row['tb_rp_file']; ?> target="_blank"> <button class="btn btn-primary btn-xs">
                                        <i class="glyphicon glyphicon-cloud-download"> ดาวน์โหลด
                                            <?php echo $row['tb_rp_file']; ?> </i></button></a> </td>
                        </tr>
                        </tr>
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