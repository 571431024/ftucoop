<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];
$status = $_SESSION['status'];
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../library/DataTables/datatables.min.css" />

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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span
                        class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>F T U</span>&nbsp; COOP </a>
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
            <li><a href="student_bio.php"><em class="fa fa-users">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_status.php"><em class="fa fa-check">&nbsp;</em> Check Status</a></li>

            <?php if($status == '1') { ?>
            <li class="active"><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
            <li><a href="document.php"><em class="fa fa-leanpub">&nbsp;</em> Apprenticeship manual
                    <!-- &amp; --></a></li>
            <li><a href="webboard.php"><em class="fa fa-comment">&nbsp;</em> Webboard</a></li>
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
            <?php }  ?>
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
                <li class="active">Record perfermance</li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Record <small>Perfermance</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-save"></i> บันทึกการฝึกวิชาชีพ
                                    </li>
                                </ol> -->
                            </div>
                        </div>
                        <br>
                        <!-- /.row -->
                        <!-- add new advisor button -->
                        <?php
                            include ("../student_Info/add_studen_per.php");
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-success pull-left" data-toggle="modal"
                                    data-target="#add_student"><i class="glyphicon glyphicon-plus"></i> บันทึกรายวัน
                                    (Add record)</button>
                            </div>
                        </div>
                        <!--/.row -->
                        <br />

                        <!-- Panel for table -->
                        <div class="table-responsive">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="display responsive no-wrap" width="100%" id="table_studentPer">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>ลำดับ</br>No.</center>
                                                </th>
                                                <th>
                                                    <center>วันที่โพส</br>Date posted</center>
                                                </th>

                                                <th>
                                                    <center>ผู้บันทึก</br>Recorder</center>
                                                </th>
                                                <th>
                                                    <center>หัวข้อ</br>Topic</center>
                                                </th>
                                                <th>
                                                    <center>รายละเอียด</br>Detail</center>
                                                </th>
                                                <th>
                                                    <center>ดูข้อมูล</br>View</center>
                                                </th>
                                                <th>
                                                    <center>แก้ไข</br>Edit</center>
                                                </th>
                                                <th>
                                                    <center>ลบ</br>Delete</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                include ("../../../sql_function/connect.php");
                                                isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
                                                $sql = "SELECT  tb_record_performance.*, tb_student.*

                                                FROM tb_record_performance

                                                INNER JOIN tb_student ON tb_record_performance.tb_student_tb_std_id = tb_student.tb_std_id

                                                WHERE tb_student.tb_std_id = '$id'  AND tb_rp_topic LIKE '%".$keyword."%'";
                                                        
                                                    $rs = mysql_query($sql) or die(mysql_error());
                                                        $Num_Rows = mysql_num_rows($rs); //warming

                                                        
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

                                                        $sql .=" ORDER BY tb_rp_date ASC LIMIT $Page_Start , $Per_Page";
                                                        $rs  = mysql_query($sql);
                                                        $i = 1;
                                                        while($row = mysql_fetch_array($rs)){
                                                        $count++;

                                            ?>
                                            <tr>
                                                <td align="center">
                                                    <?php echo $count?>
                                                </td>
                                                <td align="center">
                                                    <?php echo $row['tb_rp_date']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['tb_std_name'];?>
                                                    <?php echo $row['tb_std_lastname'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['tb_rp_topic']; ?>
                                                </td>
                                                <td>
                                                    <div style="  width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                        <?php echo $row['tb_rp_describtion'];?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <center><a href="../student_Info/student_per_detail.php?flag= <?=$row['tb_rp_id']; ?> ">
                                                            <button class="btn btn-info btn-xs">
                                                                <i class="glyphicon glyphicon-eye-open">
                                                                    รายละเอียด
                                                                </i>
                                                            </button></a>
                                                    </center>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal"
                                                        data-target="#editstudent_per<?php echo $i; ?>">
                                                        <i class="glyphicon glyphicon-edit"></i> Edit</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editstudent_per<?php echo $i; ?>"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                                        แก้ไขบันทึกการฝึกวิชาชีพ (Edit student record
                                                                        perfermance)
                                                                    </h4>
                                                                </div>
                                                                <!-- Edit ecord -->
                                                                <div class="modal-body">
                                                                    <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                                                        action="../../../sql_function/sql_edit_student_per.php">
                                                                        <input type="hidden" name="tb_rp_id" value="<?php echo $row['tb_rp_id']; ?>">

                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2">หัวข้อ
                                                                                </br>(Topic name)</label>
                                                                            <div class="col-md-6">
                                                                                <input type="text" class="form-control"
                                                                                    id="tb_rp_topic" name="tb_rp_topic"
                                                                                    value="<?php echo $row['tb_rp_topic']; ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2">รายละเอียด
                                                                                </br>(Detail)</label>
                                                                            <div class="col-md-8">
                                                                                <textarea type="text" rows="15" class="form-control"
                                                                                    id="tb_rp_describtion" name="tb_rp_describtion"> <?php echo $row['tb_rp_describtion']; ?>  </textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2">ไฟล์แนบ
                                                                                </br>(File attachment)</label>
                                                                            <div class="col-md-4">
                                                                                <?php echo $row['tb_rp_file'];?>
                                                                                <input type="file" class="form-control"
                                                                                    name="tb_rp_file" id="tb_rp_file" />
                                                                                <input type="hidden" class="form-control"
                                                                                    name="hdnOldFile" value="<?php echo $row['tb_rp_file'];?>">
                                                                            </div>
                                                                        </div>
                                                                </div><!-- /.row-->

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                                                        ยกเลิก</button>
                                                                    <button type="submit" class="btn btn-success"><i
                                                                            class="glyphicon glyphicon-ok"></i>
                                                                        แก้ไขข้อมูล</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Delete data -->
                                                <td align="center">
                                                    <a href="../../../sql_function/sql_delete_student_per.php?flag= <?=$row['tb_rp_id']; ?>"
                                                        onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')">
                                                        <button class="btn btn-danger btn-xs">
                                                            <i class="glyphicon glyphicon-trash"></i></button></a>
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

            <!-- Footer  -->
            <!-- <style>
                .footer {
                    position: fixed;
                    left: 100px;
                    bottom: 0;
                }
            </style>
            <div class="footer col-sm-12">
                <p class="back-link">Copyright © 2019 - <a href="">Fatoni University</a></p>
            </div> -->



            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/chart.min.js"></script>
            <script src="js/chart-data.js"></script>
            <script src="js/easypiechart.js"></script>
            <script src="js/easypiechart-data.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/custom.js"></script>
            <script type="text/javascript" src="../../../../library/DataTables/datatables.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#table_studentPer').DataTable();

                });
            </script>

</body>

</html>