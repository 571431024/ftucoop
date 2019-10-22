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
    <link rel="stylesheet" type="text/css" href="../../library/DataTables/datatables.min.css" />

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
                <ul class="nav navbar-top-links navbar-right">
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
                    </li>
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
            <!-- <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div> -->
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
            <li><a href="dean_bio.php"><em class="fa fa-user">&nbsp;</em> Manage Profile</a></li>
            <li class="active"><a href="advisor.php"><em class="fa fa-users">&nbsp;</em> ดูข้อมูลอาจารย์ที่ปรึกษา</a></li>
            <li><a href="student.php"><em class="fa fa-users">&nbsp;</em> ดูข้อมูลนักศึกษา</a></li>
            <li><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> ดูข้อมูลพี่เลี้ยง
                    <!-- &amp; --></a></li>
            <li><a href="location.php"><em class="fa fa-map-marker">&nbsp;</em> ดูข้อมูลสถานที่</a></li>
            <li><a href="document.php"><em class="fa fa-file-text">&nbsp;</em> จัดการเอกสาร</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ดูตารางนิเทศ</a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> ดูการเข้าฝึกประจำวันนักศึกษา</a></li>
            <li><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ดูผลการประเมิณนักศึกษา</a></li>
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

            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Advisor</li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            จัดการ <small>ข้อมูลอาจารย์ที่ปรึกษา</small>
                        </h1>
                    </div>
                </div>
                <br>
                <!-- /.row -->

                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_advisor">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ลำดับ</center>
                                        </th>

                                        <th>
                                            <center>รหัสบุคลากร</center>
                                        </th>
                                        <th>
                                            <center>ชื่อ</center>
                                        </th>
                                        <th>
                                            <center>นามสกุล</center>
                                        </th>
                                        <th>
                                            <center>คณะ</center>
                                        </th>
                                        <th>
                                            <center>สาขา</center>
                                        </th>
                                        <th>
                                            <center>อีเมลล์</center>
                                        </th>
                                        <th>
                                            <center>เบอร์โทรศัพท์</center>
                                        </th>
                                        <!-- <th>
                                            <center>แก้ไข</center>
                                        </th>
                                        <th>
                                            <center>ลบ</center>
                                        </th> -->


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									include ("../sql_function/connect.php");
                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';

                                    $faculty = $_SESSION['faculty'];
									$sql = "SELECT tb_advisor.tb_ads_id, 
									tb_advisor.tb_ads_id_log, tb_advisor.tb_ads_password, 
									tb_advisor.tb_ads_name, tb_advisor.tb_ads_lastname,tb_advisor.tb_ads_faculty,tb_advisor.tb_ads_major, 
									tb_advisor.tb_ads_email, tb_advisor.tb_ads_tel,tb_advisor.tb_prefix_tb_prefix_id,
									tb_prefix.tb_prefix_name FROM tb_advisor 
									INNER JOIN tb_prefix ON tb_advisor.tb_prefix_tb_prefix_id =tb_prefix.tb_prefix_id
                        
                                    WHERE  tb_advisor.tb_ads_faculty = '$faculty' AND (tb_ads_name LIKE '%".$keyword."%') ";
		
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

                                                $sql .=" ORDER BY tb_ads_id ASC LIMIT $Page_Start , $Per_Page";
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
                                            <?php echo $row['tb_ads_id_log']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_prefix_name']; ?>
                                            <?php echo $row['tb_ads_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_lastname']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_faculty']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_major']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_ads_tel']; ?>
                                        </td>


                                        <!-- <center>
                                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                                                    data-target="#editsub<?php echo $i; ?>">
                                                    <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center> -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="editsub<?php echo $i; ?>" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                            แก้ไขข้อมูลอาจารย์</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="../../sql_function/sql_edit_advisor.php">
                                                            <input type="hidden" name="tb_ads_id" value="<?php echo $row['tb_ads_id']; ?>">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">รหัสบุคลากร</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="tb_ads_id_log"
                                                                        name="tb_ads_id_log" value="<?php echo $row['tb_ads_id_log']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">รหัสผ่านใหม่</label>
                                                                <div class="col-md-4">
                                                                    <input type="password" class="form-control" id="tb_ads_password"
                                                                        name="tb_ads_password" value="<?php echo $row['tb_ads_password']; ?>">
                                                                </div>
                                                                <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" id="tb_prefix_id" name="tb_prefix_id">
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
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="tb_ads_name"
                                                                        name="tb_ads_name" value="<?php echo $row['tb_ads_name']; ?>">
                                                                </div>
                                                                <label class="control-label col-md-2">นามสกุล</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="tb_ads_lastname"
                                                                        name="tb_ads_lastname" value="<?php echo $row['tb_ads_lastname']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">Email</label>
                                                                <div class="col-md-4">
                                                                    <input type="email" class="form-control" id="tb_ads_email"
                                                                        name="tb_ads_email" value="<?php echo $row['tb_ads_email']; ?>">
                                                                </div>
                                                                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="tb_ads_tel"
                                                                        name="tb_ads_tel" value="<?php echo $row['tb_ads_tel']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                                                    ยกเลิก</button>
                                                                <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                                                    แก้ไขข้อมูล</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <td>
                                            <center><a href="../sql_function/sql_delete_advisor.php?flag= <?=$row['tb_ads_id']; ?>"
                                                    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')">
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="glyphicon glyphicon-trash"></i></button></a> </center>
                                        </td> -->
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
    <script type="text/javascript" src="../../library/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_advisor').DataTable();

        });
    </script>

</body>

</html>