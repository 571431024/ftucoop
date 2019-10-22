<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");

}
$id = $_SESSION['id'];

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
            <img src="../../picture/<?php  echo $row['tb_dept_img'];?>" alt="stack photo" class="img"> 
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
            <li class="active"><a href="department_bio.php"><em class="fa fa-user">&nbsp;</em> Manage Profile</a></li>
            <li><a href="advisor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลอาจารย์ที่ปรึกษา</a></li>
            <li><a href="student.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลนักศึกษา</a></li>
            <li><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลพี่เลี้ยง
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
                <li class="active">Profile</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Manage <small>Profile</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="container">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Profile</h4>
                        </div>
                        <div class="panel-body">
                            <?php
                            include ("../../sql_function/connect.php");
                            $sql = "SELECT tb_department.*, tb_prefix.*
                                    FROM tb_prefix 
                                    LEFT JOIN  tb_department ON tb_prefix.tb_prefix_id =  tb_department.tb_prefix_tb_prefix_id 
                                    
                                    WHERE  tb_department.tb_dept_id = '$id'";
                            $result = mysql_query($sql) or die (mysql_error());
                            $row = mysql_fetch_array($result);
                            
                            $preID = $row['tb_prefix_tb_prefix_id'];
                            $advisorimg = $row['tb_dept_img'];
                          
                            mysql_close();
                            ?>


                            <div class="container">
                                <div class="jumbotron">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                                            <div class="thumbnail text-center photo_view_postion_b">
                                                <?php if($advisorimg == ""){ ?>
                                                <img src="../../picture/no_image.gif" />
                                                <?php }else{?>
                                                <img src="../../picture/<?php  echo $row['tb_dept_img'];?>" alt="stack photo"
                                                    class="img">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                                            <div class="" style="border-bottom:1px solid black">
                                                <h2><span class="fa " style="width:0px;"></span>
                                                    <?php echo $row['tb_prefix_name']; ?>
                                                    <?php echo $row['tb_dept_name']; ?>
                                                    <?php echo $row['tb_dept_lastname']; ?>
                                                    <p><br>
                                                    <?php echo $_SESSION['stt']; ?>
                                                    </p>
                                            </div>
                                            <br>
                                            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-9">
                                                <p><span class="fa fa-google" style="width:50px;"></span>
                                                    <a href="mailto:<?php echo $row['tb_dept_email']; ?>">
                                                        <?php echo $row['tb_dept_email']; ?></a></p>
                                                <p><span class="fa fa-phone" style="width:50px;"></span>
                                                    <?php echo $row['tb_dept_tel']; ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-warning btn-md " data-toggle="modal" data-target="#editHis">
                                    <i class="glyphicon glyphicon-edit"></i> แก้ไข
                                </button>


                                </form>
                                <!--/.form-->
                                <!-- Modal -->
                                <div class="modal fade" id="editHis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                    แก้ไขข้อมูลส่วนตัว</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" enctype="multipart/form-data" method="post"
                                                    action="../../sql_function/sql_edit_department_department.php">
                                                    <input type="hidden" name="tb_dept_id" value="<?php echo $row['tb_dept_id']; ?>">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">รหัสบุคลากร</label>
                                                        <div class="col-md-4">
                                                            <input readonly type="text" class="form-control" id="tb_dept_id_log"
                                                                name="tb_dept_id_log" value="<?php echo $row['tb_dept_id_log']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">รหัสผ่านใหม่</label>
                                                        <div class="col-md-4">
                                                            <input type="password" class="form-control" id="tb_dept_password"
                                                                name="tb_dept_password" value="<?php echo $row['tb_dept_password']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                                                        <div class="col-md-3">
                                                            <?php
                            include ("../../sql_function/connect.php");
                            $sql = "SELECT * FROM tb_prefix ORDER BY tb_prefix_name";
                            $result = mysql_query($sql) or die (mysql_error());
                            ?>
                                                            <select class="form-control" id="tb_prefix_id" name="tb_prefix_id">
                                                                <option value="no">เลือกคำนำหน้าชื่อ</option>
                                                                <?php
                                while($row2 = mysql_fetch_array($result)){
                                ?>
                                                                <option value="<?php echo $row2['tb_prefix_id']; ?>"
                                                                    <?php if($preID==$row2['tb_prefix_id']){ echo
                                                                    "selected" ; } ?>>
                                                                    <?php echo $row2['tb_prefix_name']; ?>
                                                                </option>
                                                                <?php
                                }
                                mysql_close();
                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">ชื่อ</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="tb_dept_name"
                                                                name="tb_dept_name" value="<?php echo $row['tb_dept_name']; ?>">
                                                        </div>
                                                        <label class="control-label col-md-2">นามสกุล</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="tb_dept_lastname"
                                                                name="tb_dept_lastname" value="<?php echo $row['tb_dept_lastname']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">Email</label>
                                                        <div class="col-md-4">
                                                            <input type="email" class="form-control" id="tb_dept_email"
                                                                name="tb_dept_email" value="<?php echo $row['tb_dept_email']; ?>">
                                                        </div>
                                                        <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="tb_dept_tel"
                                                                name="tb_dept_tel" value="<?php echo $row['tb_dept_tel']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-2">รูปโปรไฟล์</label>
                                                        <div class="col-md-4">
                                                            <img src="../../picture/<?php echo $advisorimg ?>" width=150
                                                                height=150>

                                                            <input type="file" class="form-control" name="fileUpload"
                                                                id="fileUpload"> <br>
                                                            <input type="hidden" class="form-control" name="hdnOldFile"
                                                                value="<?php echo $advisorimg ?>">


                                                        </div>
                                                    </div>



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
                                </div>
                            </div>
                        </div>


                        <!-- /.row -->





                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->


</body>

<!--
    <div class="panel panel-default">
  
  <div class="panel-footer">Copyright © 2014 Design bootstrap sb admin 3 CSS Modify by Chid Clever & Su Haimee</div>
</div>
-->

</html>