<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");

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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>F T U</span>&nbsp; Apprenticeship Training System</a>
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
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-bullhorn">&nbsp;</em> จักการข้อมูลหน้าเว็บ <span data-toggle="collapse"
                        href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li><a class="" href="web_news.php">
                            <span class="fa fa-arrow-right">&nbsp;</span> จัดการอัพเดตข่าวสาร
                        </a></li>
                    <li><a class="" href="web_stdWork.php">
                            <span class="fa fa-arrow-right">&nbsp;</span> จัดการอัพเดตผลงาน นศ.
                        </a></li>
                </ul>
            </li>
            <li><a href="dean.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลคณะบดี</a></li>
            <li><a href="department.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลอาจารย์สาขา</a></li>
            <li><a href="advisor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลอาจารย์ที่ปรึกษา</a></li>
            <li><a href="student.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลนักศึกษา</a></li>
            <li><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลพี่เลี้ยง
                    <!-- &amp; --></a></li>
            <li><a href="location.php"><em class="fa fa-map-marker">&nbsp;</em> จัดการข้อมูลสถานที่</a></li>
            <li><a href="document.php"><em class="fa fa-file-text">&nbsp;</em> จัดการเอกสาร</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> จัดการตารางนิเทศ</a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน</a>
            </li>
            <li><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ผลการประเมิณนักศึกษา</a></li>



        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">News</li>
            </ol>
        </div>
        <!--/.row-->

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    จัดการ <small>ข่าวสารหน้าเว็บ (ส่วนข่าวสาร)</small>
                </h1>
            </div>
        </div>

        <div class="container marketing">

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-globe fa-2x"></i> ข้อมูลหน้าเว็บไซต์ ส่วนข่าวกิจกรรมนักศึกษา
                </li>
            </ol><br>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-refresh"></i> อัพเดตข้อมูล ส่วนข่าวกิจกรรมนักศึกษา</div>
                    <div class="panel-body">

                        <?php
                            include ("add_student_activity.php");
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-success pull-left" data-toggle="modal"
                                    data-target="#add_student_activity"><i class="glyphicon glyphicon-plus"></i>
                                    เพิ่มข้อมูล</button>
                            </div>
                        </div>
                        <!--/.row -->
                        <br />

                        <!-- Panel for table -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="display responsive no-wrap" width="100%" id="table_location">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>ลำดับ</center>
                                                </th>
                                                <th>
                                                    <center>หัวข้อ</center>
                                                </th>

                                                <th>
                                                    <center>วันที่อัพโหลด</center>
                                                </th>

                                                <th>
                                                    <center>ดูข้อมูล</center>
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
                                    include ("../sql_function/connect.php");
                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
                                    $sql = "SELECT * FROM tb_activity_news
                                    WHERE (   tb_act_title LIKE '%".$keyword."%') ";
                                    
                                    
                                     $rs = mysql_query($sql) or die(mysql_error());
                                                $Num_Rows = mysql_num_rows($rs);

                                                $Per_Page = 10;   // Per Page
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

                                                $sql .=" ORDER BY tb_act_id DESC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                    $count++;
                                                ?>

                                            <tr>
                                                <td align="center">
                                                    <?php echo $count ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['tb_act_title']; ?>
                                                </td>

                                                <td align="center">
                                                    <?php echo $row['tb_act_date']; ?>
                                                </td>


                                                <td>
                                                    <center><a
                                                            href="student_activity_detail.php?flag= <?=$row['tb_act_id']; ?> ">
                                                            <button class="btn btn-info btn-xs">
                                                                <i class="glyphicon glyphicon-eye-open">
                                                                    รายละเอียด</i></button></a>
                                                    </center>
                                                </td>

                                                <td>
                                                    <center>
                                                        <button type="button" class="btn btn-warning btn-xs"
                                                            data-toggle="modal"
                                                            data-target="#editNews<?php echo $i; ?>">
                                                            <i class="glyphicon glyphicon-edit"></i> แก้ไข</button>
                                                    </center>


                                                    <!-- Modal editNews-->
                                                    <div class="modal fade" id="editNews<?php echo $i; ?>" tabindex="-1"
                                                        role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"><span
                                                                            aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title" id="myModalLabel"><i
                                                                            class="glyphicon glyphicon-edit"></i>
                                                                        แก้ไขข้อมูลข่าวกิจกรรมนักศึกษา</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="form-horizontal"
                                                                        enctype="multipart/form-data" method="post"
                                                                        action="../sql_function/sql_edit_student_act.php">
                                                                        <input type="hidden" name="tb_act_id"
                                                                            value="<?php echo $row['tb_act_id']; ?>">

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-2">หัวข้อ</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control"
                                                                                    id="tb_act_title"
                                                                                    name="tb_act_title"
                                                                                    value="<?php echo $row['tb_act_title']; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-2">คำอธิบาย</label>
                                                                            <div class="col-md-8">
                                                                                <textarea type="text" rows="8"
                                                                                    class="form-control"
                                                                                    id="tb_act_description"
                                                                                    name="tb_act_description"> <?php echo $row['tb_act_description']; ?> </textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-2">รูป</label>
                                                                            <div class="col-md-8">
                                                                                <img src="../../img_frontweb/<?php  echo $row['tb_act_img']; ?>"
                                                                                    width=200 height=160>
                                                                                <input type="file" id="input101"
                                                                                    class="form-control"
                                                                                    name="tb_act_img" id="tb_act_img">
                                                                                <br>
                                                                                <input type="hidden"
                                                                                    class="form-control"
                                                                                    name="hdnOldFile"
                                                                                    value="<?php echo $row['tb_act_img'];?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label col-md-2">ไฟล์แนบ:
                                                                            </label>
                                                                            <div class="col-md-8">

                                                                                <?php echo $row['tb_act_file']; ?>
                                                                                <input type="file" id="input10"
                                                                                    class="form-control"
                                                                                    name="tb_act_file" id="tb_act_file"
                                                                                    value="<?php echo $row['tb_act_file']; ?>">
                                                                                <br>
                                                                                <input type="hidden"
                                                                                    class="form-control"
                                                                                    name="hdnOldFilen"
                                                                                    value="<?php echo $row['tb_act_file'];?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                    <label class="control-label col-md-2">คณะ</label>
                                                                    <div class="col-md-3">
                                                                        <select class="form-control" id="tb_ads_faculty"
                                                                            name="tb_act_faculty">
                                                                            <option value="no">-เลือกคณะ-</option>
                                                                            <?php
                                                                        
                                                                    $sqlm = "SELECT * FROM tb_faculty";
                                                                    $rsm = mysql_query($sqlm) or die(mysql_error());
    
                                                                    while($rowm = mysql_fetch_array($rsm)){
                                                                    ?>
                                                                            <option value="<?php echo $rowm['tb_faculty_name']; ?>"
                                                                                <?php if($rowm['tb_faculty_name']==$row['tb_act_faculty']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_faculty_name'] ?>
                                                                            </option>
                                                                            <?php
                                                                    }
                                                                    //mysql_close();
                                                                    ?>
                                                                        </select>

                                                                    </div>
                                                                    <label class="control-label col-md-2">สาขา</label>
                                                                    <div class="col-md-3">
                                                                        <select class="form-control" id="tb_ads_major"
                                                                            name="tb_act_major">
                                                                            <option value="no">-เลือกสาขา-</option>
                                                                            <?php
                                                                        
                                                                    $sqlm = "SELECT * FROM tb_major";
                                                                    $rsm = mysql_query($sqlm) or die(mysql_error());
    
                                                                    while($rowm = mysql_fetch_array($rsm)){
                                                                    ?>
                                                                            <option value="<?php echo $rowm['tb_major_name']; ?>"
                                                                                <?php if($rowm['tb_major_name']==$row['tb_act_major']){
                                                                                echo "selected" ; } ?>>
                                                                                <?php echo $rowm['tb_major_name'] ?>
                                                                            </option>
                                                                            <?php
                                                                    }
                                                                    //mysql_close();
                                                                    ?>
                                                                        </select>


                                                                    </div>
                                                                </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal"><i
                                                                            class="glyphicon glyphicon-remove"></i>
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
                                                <td align="center"> <a
                                                        href="../sql_function/sql_delete_student_act.php?flag= <?=$row['tb_act_id']; ?>"
                                                        onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')">
                                                        <button class="btn btn-danger btn-xs">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                        </button></a></td>

                                            </tr>
                                            <?php
                                                $i++;
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.table reponsive -->
                    </div>
                </div>
                <!-- /.row -->


                <script src="js/jquery-1.11.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/chart.min.js"></script>
                <script src="js/chart-data.js"></script>
                <script src="js/easypiechart.js"></script>
                <script src="js/easypiechart-data.js"></script>
                <script src="js/bootstrap-datepicker.js"></script>
                <script src="js/custom.js"></script>
                <script src="add_news.js"></script>
                <script type="text/javascript" src="../../library/DataTables/datatables.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#table_location').DataTable();

                    });
                </script>
</body>

</html>