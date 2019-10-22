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
    <link rel="stylesheet" type="text/css" href="../../../../library/DataTables/datatables.min.css"/>

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
            <li><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>


            <li><a href="student_come.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการมาฝึกวิชาชีพรายวัน</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศอาจารย์
                    <!-- &amp; --></a></li>
            <li class="active"><a href="mentor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
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
                <li class="active">Evaluate </li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            การประเมิน <small>นักศึกษา (พี่เลี้ยง)</small>
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-check"></i> ประเมินนักศึกษา (พี่เลี้ยง)
                            </li>
                        </ol> -->
                    </div>
                </div>
                <br>
                <!-- /.row -->

                <!-- add new advisor button -->
                <?php
                    include ("../../department_Info/add_student.php");
                ?>
               
                <br />
                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_mentorEva">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ลำดับ</center>
                                        </th>
                                        <th>
                                            <center>ชื่อ</center>
                                        </th>
                                        <th>
                                            <center>นามสกุล</center>
                                        </th>
                                        <th>
                                            <center>ประเภทนักศึกษา</center>
                                        </th>
                                        <th>
                                            <center>สถานที่ฝึกงาน</center>
                                        </th>
                                        <th>
                                            <center>ประเมิน</center>
                                        </th>
                                        <th>
                                            <center>คะแนน(เต็ม80)</center>
                                        </th>
                                        <th>
                                            <center>คิดเป็นร้อยละ</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include ("../../../sql_function/connect.php");
                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
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
                                    where tb_mentor_tb_mentor_id='$id' AND tb_std_name LIKE '%".$keyword."%'"; 
                                    
                                    
                                    
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

                                                $sql .=" ORDER BY tb_std_id ASC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                $count++;

                                                ?>
                                    <tr>
                                        <td>
                                            <center>
                                                <?php echo $count ?>
                                            </center>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_prefix_name']; ?>
                                            <?php echo $row['tb_std_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_std_lastname']; ?>
                                        </td>
                                        <td>
                                            <div style="  width: 150px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <?php echo $row['tb_stdcate_cate']; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="  width: 200px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <?php echo $row['LNname'];?>
                                                <?php echo $row['PLname'];?>
                                                <?php echo $row['tb_std_offerlo'];?>
                                                <?php echo $row['tb_std_offerlo_d'];?>
                                            </div>
                                        </td>
                                        <td>
                                            <?php
                                                include ("../../../sql_function/connect.php");

                                                $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]'";
                                                $query_eva=mysql_query($sql_eva);
                                                $rows=mysql_num_rows($query_eva);

                                                if ($rows>=1    ) {
                                            ?>

                                            <center> <a href="view_mentor_eva.php?flag= <?=$row['tb_std_id']; ?>">
                                                    <button class="btn btn-info btn-xs">
                                                        <i class="glyphicon glyphicon-eye-open"> ดูผลการประเมิน</i></button></a>
                                            </center>
                                            <?php } else {?>
                                            <center> <a href="mentor_eva_detail.php?flag= <?=$row['tb_std_id']; ?>">
                                                    <button class="btn btn-danger btn-xs">
                                                        <i class="glyphicon glyphicon-thumbs-up"> ประเมินนักศึกษา </i></button></a>
                                            </center>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <center>
                                                <?php
                                                    $allscore = 0;
                                                    $sqlScore="SELECT tb_evm_score FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]' ";
                                                    
                                                    $queryScore=mysql_query($sqlScore);
                                                    while($rowScore = mysql_fetch_array($queryScore)){
                                                    
                                                    $allscore +=  $rowScore['tb_evm_score'];


                                                    /*
                                                    if($rwScore['sumScore'] != "")
                                                        echo $rwScore['sumScore'];
                                                    else
                                                        echo "ยังไม่ประเมิน";

                                                        */
                                                    }
                                                    if($allscore != ""){
                                                        echo $allscore; 
                                                    }
                                                        
                                                    else {  
                                                ?>
                                                <center> <a href="#"> <button class="btn btn-warning btn-xs">
                                                            <i class="glyphicon glyphicon-warning-sign">
                                                                ยังไม่ได้ประเมิน </i></button></a> </center>
                                                <?php }  ?>

                                            </center>
                                        </td>
                                        <td>
                                            <center>

                                                <?php
                                                    $allscore = 0;
                                                    $sqlScore="SELECT tb_evm_score FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]' ";
                                                    
                                                    $queryScore=mysql_query($sqlScore);
                                                    while($rowScore = mysql_fetch_array($queryScore)){
                                                    
                                                    $allscore +=  $rowScore['tb_evm_score']*100/80;
                                                    $f = sprintf ("%.2f", $allscore);

                                                    /*
                                                    if($rwScore['sumScore'] != "")
                                                        echo $rwScore['sumScore'];
                                                    else
                                                        echo "ยังไม่ประเมิน";

                                                        */
                                                    }
                                                    if($allscore != ""){
                                                        echo $f."%"; 
                                                    }
                                                        
                                                    else {  
                                                ?>
                                                <center> <a href="#"> <button class="btn btn-warning btn-xs">
                                                            <i class="glyphicon glyphicon-warning-sign">
                                                                ยังไม่ได้ประเมิน </i></button></a> </center>
                                                <?php }  ?>
                                            </center>
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

    <!-- jQuery -->
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
            $('#table_mentorEva').DataTable();

        });
    </script>
</body>

</html>