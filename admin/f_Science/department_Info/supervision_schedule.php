<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>



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
            <li class="active"><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em>
                    จัดการตารางนิเทศ</a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน</a></li>
            <li><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ผลการประเมิณนักศึกษา</a></li>
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
                <li class="active">Supervision Schedule</li>
            </ol>
        </div>
        <!--/.row-->


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            จัดการ <small>ข้อมูลตารางนิเทศ</small>
                        </h1>
                    </div>
                </div>
                <!-- add new advisor button -->
                <?php
                    include ("../department_Info/add_supervision_schedule.php");
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_ss"><i
                                class="glyphicon glyphicon-plus"></i> เพิ่มตารางนิเทศ</button>
                    </div>
                </div>
                <br />
                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_supervision">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ลำดับ</center>
                                        </th>
                                        <th>
                                            <center>วันเวลานิเทศ</center>
                                        </th>
                                        <th>
                                            <center>เวลาเริ่มนิเทศ</center>
                                        </th>
                                        <th>
                                            <center>เวลาสิ้นสุดนิเทศ</center>
                                        </th>
                                        <th>
                                            <center>อาจารย์นิเทศ</center>
                                        </th>
                                        <th>
                                            <center>สถานที่นิเทศ</center>
                                        </th>
                                        <th>
                                            <center>พี่เลี้ยง</center>
                                        </th>
                                        <th>
                                            <center>ดูปฏิทิน</center>
                                        </th>
                                        <th>
                                            <center>แก้ไข</center>
                                        </th>
                                        <th>
                                            <center>ลบ</center>
                                        </th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
                                    include ("../../sql_function/connect.php");

                                    $major_id = $_SESSION['major_id'];
                                    $faculty_id = $_SESSION['faculty_id'];

                                    $sql = "SELECT tb_supervision_schedule.*, 
                                    tb_advisor.tb_ads_name, 
                                    tb_localtion.tb_lo_name,
                                    tb_mentor.tb_mentor_name,
                                    tb_advisor.tb_ads_lastname,
                                     tb_mentor.tb_mentor_lastname
                                    FROM tb_supervision_schedule 
                                    LEFT JOIN tb_advisor ON tb_supervision_schedule.tb_advisor_tb_ads_id = tb_advisor.tb_ads_id 
                                    LEFT JOIN tb_mentor ON tb_supervision_schedule.tb_mentor_tb_mentor_id = tb_mentor.tb_mentor_id 
                                    LEFT JOIN tb_localtion ON tb_supervision_schedule.tb_localtion_tb_lo_id = tb_localtion.tb_lo_id
                                    LEFT JOIN tb_faculty ON tb_supervision_schedule.faculty_id = tb_faculty.tb_faculty_id
                                    LEFT JOIN tb_major ON tb_supervision_schedule.major_id = tb_major.tb_major_id   
                                    WHERE tb_supervision_schedule.faculty_id='$faculty_id' AND tb_supervision_schedule.major_id='$major_id' AND ( tb_ads_name LIKE '%".$keyword."%') ";
                                    
                                    
                                     $rs = mysql_query($sql) or die(mysql_error());
                                                $Num_Rows = mysql_num_rows($rs);

                                                $Per_Page = 5;   // Per Page
                                                if(!isset($_GET['Page'])){
                                                    $_GET['Page'] = 1;
                                                }
                                                $Page = $_GET['Page'];
                                                if(!$_GET['Page']){
                                                    $Page=1;
                                                }

                                                $Prev_Page = $Page-1;
                                                $Next_Page = $Page+1;

                                                $Page_Start = (($Per_Page*$Page)-$Per_Page);
                                                if($Num_Rows<=$Per_Page){
                                                    $Num_Pages =1;
                                                }else if(($Num_Rows % $Per_Page)==0){
                                                    $Num_Pages =($Num_Rows/$Per_Page) ;
                                                }else{
                                                    $Num_Pages =($Num_Rows/$Per_Page)+1;
                                                    $Num_Pages = (int)$Num_Pages;
                                                }
                                                $offset=($Page-1)*$Per_Page; 
                                                $count=$offset; 

                                                $sql .=" ORDER BY tb_ss_id ASC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                    $count++;
                                                ?>

                                    <tr>
                                        <td align="center">
                                            <?php echo $count ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['tb_ss_date']; ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['tb_ss_timestart']; ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['tb_ss_timefinish']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_name']; ?>
                                            <?php echo $row['tb_ads_lastname']; ?>
                                        </td>
                                        <td>
                                            <div style="  width: 200px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <?php echo $row['tb_lo_name']; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_mentor_name']; ?>
                                            <?php echo $row['tb_mentor_lastname']; ?>
                                        </td>
                                        <td align="center">
                                            <center><a href="calendar.php" target="_blank">
                                                    <button class="btn btn-info btn-xs">
                                                        <i class="glyphicon glyphicon-calendar">ดูปฏิทิน</i></button></a>
                                            </center>
                                        </td>


                                        <td>
                                            <center>
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
                                                    data-target="#edit_ss<?php echo $i; ?>">
                                                    <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_ss<?php echo $i; ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                                แก้ไขข้อมูลตารางนิเทศ</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="../../sql_function/sql_edit_ss.php">
                                                                <input type="hidden" name="tb_ss_id" value="<?php echo $row['tb_ss_id']; ?>">


                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">วันที่</label>
                                                                    <div class="col-md-3">
                                                                        <input type="date" class="form-control" id="tb_ss_date"
                                                                            name="tb_ss_date" value="<?php echo $row['tb_ss_date']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">เริ่มเวลา</label>
                                                                    <div class="col-md-3">
                                                                        <input type="time" class="form-control" id="tb_ss_timestart"
                                                                            name="tb_ss_timestart" value="<?php echo $row['tb_ss_timestart']; ?>">
                                                                    </div>
                                                                </div>




                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">เวลาสิ้นสุด</label>
                                                                    <div class="col-md-3">
                                                                        <input type="time" class="form-control" id="tb_ss_timefinish"
                                                                            name="tb_ss_timefinish" value="<?php echo $row['tb_ss_timefinish']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">อาจารย์นิเทศ</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" id="tb_ads_id"
                                                                            name="tb_ads_id">
                                                                            <option value="no">-เลือกอาจารย์นิเทศ-</option>
                                                                            <?php

                                                                          
                                                                            $sqlm = "SELECT * FROM tb_advisor";
                                                                            $rsm = mysql_query($sqlm) or die(mysql_error());

                                                                            while($rowm = mysql_fetch_array($rsm)){
                                                                            ?>
                                                                            <option value="<?php echo $rowm['tb_ads_id']; ?>"
                                                                                <?php if($rowm['tb_ads_id']==$row['tb_advisor_tb_ads_id']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_ads_name'] ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            //mysql_close();
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">พี่เลี้ยง</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" id="tb_mentor_id"
                                                                            name="tb_mentor_id">
                                                                            <option value="no">-เลือกพี่เลี้ยง-</option>
                                                                            <?php

                                                                          
                                                                            $sqlm = "SELECT * FROM tb_mentor";
                                                                            $rsm = mysql_query($sqlm) or die(mysql_error());

                                                                            while($rowm = mysql_fetch_array($rsm)){
                                                                            ?>
                                                                            <option value="<?php echo $rowm['tb_mentor_id']; ?>"
                                                                                <?php if($rowm['tb_mentor_id']==$row['tb_mentor_tb_mentor_id']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_mentor_name'] ?>
                                                                                <?php echo $rowm['tb_mentor_lastname']; ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            //mysql_close();
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">สถานที่นิเทศ</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" id="tb_lo_id" name="tb_lo_id">
                                                                            <option value="no">-เลือกสถานที่นิเทศ-</option>
                                                                            <?php

                                                                          
                                                                            $sqlm = "SELECT * FROM tb_localtion";
                                                                            $rsm = mysql_query($sqlm) or die(mysql_error());

                                                                            while($rowm = mysql_fetch_array($rsm)){
                                                                            ?>
                                                                            <option value="<?php echo $rowm['tb_lo_id']; ?>"
                                                                                <?php if($rowm['tb_lo_id']==$row['tb_localtion_tb_lo_id']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_lo_name'] ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            //mysql_close();
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                        </div><!-- /.row-->




                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                                                    class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                                                แก้ไขข้อมูล</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>



                                        <td align="center">
                                            <center><a href="../../sql_function/sql_delete_ss.php?flag= <?=$row['tb_ss_id']; ?> "
                                                    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')">
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="glyphicon glyphicon-trash"></i></button></a> </center>
                                        </td>


                                    </tr>
                                    <?php
                                                $i++;
                                                }
                                                ?>

                                </tbody>
                            </table>


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
    <script type="text/javascript" src="../../../library/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_supervision').DataTable();

        });
    </script>
</body>

</html>