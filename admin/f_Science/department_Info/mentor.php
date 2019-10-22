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
    <link rel="stylesheet" type="text/css" href="../../../library/DataTables/datatables.min.css"/>

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>


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
            <li class="active"><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลพี่เลี้ยง
                    <!-- &amp; --></a></li>
            <li><a href="location.php"><em class="fa fa-map-marker">&nbsp;</em> จัดการข้อมูลสถานที่</a></li>
            <li><a href="document.php"><em class="fa fa-file-text">&nbsp;</em> จัดการเอกสาร</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> จัดการตารางนิเทศ</a></li>
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
                <li class="active">Mentor</li>
            </ol>
        </div>
        <!--/.row-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            จัดการ <small>ข้อมูลพี่เลี้ยง</small>
                        </h1>
                    </div>
                </div>
                <!-- add new advisor button -->
                <?php
                    include ("add_mentor.php");
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal"
                            data-target="#add_mentor"><i class="glyphicon glyphicon-plus"></i> เพิ่มพี่เลี้ยง</button>
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                            
                        </form>
                    </div>
                </div>
                <!--/.row -->
                <br />

                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_mentor">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ลำดับ</center>
                                        </th>
                                        <th>
                                            <center>รหัส</center>
                                        </th>
                                        <th>
                                            <center>ชื่อ</center>
                                        </th>
                                        <th>
                                            <center>นามสกุล</center>
                                        </th>
                                        <th>
                                            <center>อีเมลล์</center>
                                        </th>
                                        <th>
                                            <center>เบอร์โทรศัพท์</center>
                                        </th>
                                        <th>
                                            <center>สถานที่ประกอบการ</center>
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
                                    include ("../../sql_function/connect.php");
                                    $major_id = $_SESSION['major_id'];
                                    $faculty_id = $_SESSION['faculty_id'];

                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
									$sql = "SELECT tb_mentor.*, 
                                    tb_prefix.tb_prefix_name, 
                                    tb_localtion.tb_lo_name 
                                    FROM tb_mentor 
                                    LEFT JOIN tb_localtion ON tb_mentor.tb_localtion_tb_lo_id = tb_localtion.tb_lo_id 
                                    LEFT JOIN tb_prefix ON tb_mentor.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    LEFT JOIN tb_faculty ON tb_mentor.faculty_id = tb_faculty.tb_faculty_id
                                    LEFT JOIN tb_major ON tb_mentor.major_id = tb_major.tb_major_id
									WHERE tb_mentor.faculty_id='$faculty_id' AND tb_mentor.major_id='$major_id' AND (tb_mentor.tb_mentor_name LIKE '%".$keyword."%') ";
									
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

                                                $sql .=" ORDER BY tb_mentor_id ASC LIMIT $Page_Start , $Per_Page";
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
                                            <?php echo $row['tb_mentor_id_log']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_prefix_name']; ?>
                                            <?php echo $row['tb_mentor_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_mentor_lastname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_mentor_email']; ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['tb_mentor_tel']; ?>
                                        </td>
                                        <td>
                                            <div style="  width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <?php echo $row['tb_lo_name']; ?>
                                            </div>
                                        </td>

                                        <td>
                                            <center>
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
                                                    data-target="#editmentor<?php echo $i; ?>">
                                                    <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center>
                                            <!-- Modal -->
                                            <div class="modal fade" id="editmentor<?php echo $i; ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                                แก้ไขข้อมูลพี่เลี้ยง</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="../../sql_function/sql_edit_mentor.php">
                                                                <input type="hidden" name="tb_mentor_id" value="<?php echo $row['tb_mentor_id']; ?>">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">ไอดีพี่ลี้ยง</label>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control" id="tb_mentor_id_log"
                                                                            name="tb_mentor_id_log" value="<?php echo $row['tb_mentor_id_log']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">รหัสผ่าน</label>
                                                                    <div class="col-md-3">
                                                                        <input type="password" class="form-control" id="tb_mentor_password"
                                                                            name="tb_mentor_password" value="<?php echo $row['tb_mentor_password']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" id="tb_prefix_id"
                                                                            name="tb_prefix_id">
                                                                            <option value="no">-เลือกคำนำหน้าชื่อ-</option>
                                                                            <?php

                                                                          
                                                                            $sqlm = "SELECT * FROM tb_prefix";
                                                                            $rsm = mysql_query($sqlm) or die(mysql_error());

                                                                            while($rowm = mysql_fetch_array($rsm)){
                                                                            ?>
                                                                            <option value="<?php echo $rowm['tb_prefix_id']; ?>"
                                                                                <?php if($rowm['tb_prefix_id']==$row['tb_prefix_tb_prefix_id']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_prefix_name'] ?>
                                                                            </option>
                                                                            <?php
                                                                            }
                                                                            //mysql_close();
                                                                            ?>
                                                                        </select>


                                                                    </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">ชื่อ</label>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control" id="tb_mentor_name"
                                                                            name="tb_mentor_name" value="<?php echo $row['tb_mentor_name']; ?>">
                                                                    </div>
                                                                    <label class="control-label col-md-2">นามสกุล</label>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control" id="tb_mentor_lastname"
                                                                            name="tb_mentor_lastname" value="<?php echo $row['tb_mentor_lastname']; ?>">
                                                                    </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">Email</label>
                                                                    <div class="col-md-3">
                                                                        <input type="email" class="form-control" id="tb_mentor_email"
                                                                            name="tb_mentor_email" value="<?php echo $row['tb_mentor_email']; ?>">

                                                                    </div>
                                                                    <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control" id="tb_mentor_tel"
                                                                            name="tb_mentor_tel" value="<?php echo $row['tb_mentor_tel']; ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">สถานที่ประกอบการ</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" id="tb_lo_id" name="tb_lo_id">
                                                                            <option value="no">-เลือกสถานที่ปฏิบัติงาน-</option>
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
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                                                    class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                                                แก้ไขข้อมูล</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td align="center"><a href="../../sql_function/sql_delete_mentor.php?flag= <?=$row['tb_mentor_id']; ?>"
                                                onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')"> <button
                                                    class="btn btn-danger btn-xs">
                                                    <i class="glyphicon glyphicon-trash"></i></button></a> </td>

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
                $('#table_mentor').DataTable();

            });
        </script>
</body>

</html>