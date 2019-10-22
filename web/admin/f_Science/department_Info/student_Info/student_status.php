<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");

}
$status = $_SESSION['status'];
$id = $_SESSION['id'];



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
                <a class="navbar-brand" href="#"><span>F T U</span>&nbsp; COOP</a>
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
            <li class="active"><a href="student_status.php"><em class="fa fa-check">&nbsp;</em> Check Status</a></li>

            <?php if($status == '1') { ?>
            <li><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
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
                <li class="active">Status</li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Check <small>Status</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-inline pull-right">
                            <div class="form-group">
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.row -->
                <br />

                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_studentStatus">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ชื่อ</br>(Name)</center>
                                        </th>
                                        <th>
                                            <center>นามสกุล</br>(Lastname)</center>
                                        </th>
                                        <th>
                                            <center>พื้นที่ ที่ร้องขอ </br>(Location requesting)</center>
                                        </th>
                                        <th>
                                            <center>สถานะ</br> (Status)</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                            include ("../../../sql_function/connect.php");
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
                                    WHERE tb_student.tb_std_id ='$id' ";

                            $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $status = $row['tb_std_status_id'];
                         
                           

                          
                            mysql_close();
                            ?>

                                    <tr>
                                        <td align="center">
                                            <?php echo $row['tb_prefix_name']; ?>
                                            <?php echo $row['tb_std_name']; ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['tb_std_lastname']; ?>
                                        </td>
                                        </form>

                                        <td>
                                            <div style="  width: 600px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <?php echo $row['LNname'];?>
                                                <?php echo $row['PLname'];?>
                                                <?php echo $row['tb_std_offerlo'];?>
                                                <?php echo $row['tb_std_offerlo_d'];?>
                                            </div>
                                            <?php 
                        if($status == '2'){
                            echo "<button type=\"button\" class=\"btn btn-warning btn-xs\" data-toggle=\"modal\" data-target=\"#editHis\">
                                <i class=\"glyphicon glyphicon-edit\"></i> แก้ไขสถานที่ (Find new location)</button></center> ";
                        }else if($status == '3'){
                            echo "<button type=\"button\" class=\"btn btn-warning btn-xs\" data-toggle=\"modal\" data-target=\"#editHis\">
                                <i class=\"glyphicon glyphicon-edit\"></i> แก้ไขสถานที่ (Find new location)</button></center> "; 
                        }
                    ?>
                                            <!-- Modal add location -->
                                            <div class="modal fade" id="editHis" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                                                                แก้ไขข้อมูลสถานที่ฝึกงานและสหกิจ (Find new location)</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" method="post" enctype="multipart/form-data"
                                                                action="../../../sql_function/sql_edit_trlo.php">
                                                                <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                                                                <input type="hidden" name="tb_std_seprovince" value="0">
                                                                <input type="hidden" name="tb_std_secate" value="0">
                                                                <input type="hidden" name="tb_std_senamelo" value="0">
                                                                <input type="hidden" name="tb_std_status_id" value="2">

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">ชื่อสถานที่
                                                                        (Location name)</label>
                                                                    <div class="col-md-7">
                                                                        <input type="text" class="form-control" id="tb_std_offerlo"
                                                                            name="tb_std_offerlo" value="<?php echo $row['tb_std_offerlo']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-2">รายละเอียดที่ตั้ง
                                                                        (Location detail)</label>
                                                                    <div class="col-md-7">
                                                                        <textarea type="text" rows="4" class="form-control"
                                                                            id="tb_std_offerlo_d" name="tb_std_offerlo_d">  <?php echo $row['tb_std_offerlo_d']; ?> </textarea>
                                                                    </div>
                                                                </div>
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

                                        <td align="center">
                                            <?php 
            if($status == '1'){
                echo '<center><button class="btn btn-success btn-xs">  
                    <i class="glyphicon glyphicon-ok-circle"> อนุมัติ(Approval) </i></button></center>';
            }else if($status == '2'){
            echo ' <center><button class="btn btn-warning btn-xs">  
                    <i class="glyphicon glyphicon-time"> รอการอนุมัติ(Processing) </i></button></center>';
            }else
            echo ' <center><button class="btn btn-danger btn-xs">  
                    <i class="glyphicon glyphicon-remove-circle"> ไม่อนุมัติ(Disapprove)  </i></button></center>';
            ?>
                                        </td>



                                    </tr>


                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->
            </form>
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
                    $('#table_studentStatus').DataTable();

                });
            </script>
</body>


</html>