<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../index.php");

}
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
                <a class="navbar-brand" href="#"><span>F T U</span>&nbsp; COOP</a>              
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
        <ul class="nav menu">
            <li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="student_bio.php"><em class="fa fa-users">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_status.php"><em class="fa fa-check">&nbsp;</em> Check Status</a></li>

            <?php if($status == '1') { ?>
            <li><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
            <li class="active"><a href="document.php"><em class="fa fa-leanpub">&nbsp;</em> Apprenticeship manual
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
                <li class="active">Apprenticeship</li>
            </ol>
        </div>
        <!--/.row-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Apprenticeship <small>Manual</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <!-- add new advisor button -->
              
                <br />
                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="display responsive no-wrap" width="100%" id="table_document">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>ลำดับ</br>(No.)</center>
                                        </th>
                                        <th>
                                            <center>ชื่อเอกสาร</br>(Document name)</center>
                                        </th>
                                        <th>
                                            <center>คำอธิบาย</br>(Detail)</center>
                                        </th>
                                        <th>
                                            <center>วันที่อัพโหลด</br>(Date posted)</center>
                                        </th>
                                        <th>
                                            <center>ไฟล์อัพโหลด</br>(File upload)</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
                                    include ("../../../sql_function/connect.php");
                                    
                                    $faculty_id = $_SESSION['faculty_id'];
                                    $major_id = $_SESSION['major_id'];

                                    $sql = "SELECT * FROM tb_document
                                    LEFT JOIN tb_faculty ON tb_document.faculty_id = tb_faculty.tb_faculty_id
                                    LEFT JOIN tb_major ON tb_document.major_id = tb_major.tb_major_id
                                    WHERE tb_document.faculty_id='$faculty_id' AND tb_document.major_id='$major_id' AND ( tb_doc_name LIKE '%".$keyword."%') ";
                                    
                                    
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

                                                $sql .=" ORDER BY tb_doc_id ASC LIMIT $Page_Start , $Per_Page";
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
                                            <?php echo $row['tb_doc_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tb_doc_des']; ?>
                                        </td>
                                        <td align="center">
                                            <?php echo $row['date']; ?>
                                        </td>


                                        <td align="center">
                                            <center><a href=../document/ <?php echo $row['fileUpload'];?>
                                                    target="_blank"> <button class="btn btn-primary btn-xs">
                                                        <i class="glyphicon glyphicon-cloud-download"> Download</i></button></a>
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
                    $('#table_document').DataTable();

                });
            </script>
</body>

</html>