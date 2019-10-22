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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculty of Science and Technology</title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../admin/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Faculty of Science and Technology</a>
            </div>
            <!-- Top Menu Items -->
             <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> โปรไฟล์</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="../admin/mange_advisor.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลอาจารย์ที่ปรึกษา</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลนักศึกษา</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลพี่เลี้ยง</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-flag"></i> จัดการข้อมูลสถานที่</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-file"></i> จัดการเอกสาร</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> จัดการตาางนิเทศ</a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-ok"></i> การประเมิณนักศึกษา</a>
                    </li>
                </ul>
                
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            อาจารย์ <small>จัดการข้อมูลอาจารย์ในคณะ</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-user"></i> อาจารย์
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<!-- add new teacher button -->
                <div class="row">
                	<div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#addteacher"><i class="glyphicon glyphicon-plus"></i> เพิ่มอาจารย์</button>
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                            <div class="form-group">
                               
                                <input type="text" class="form-control" id="search" name="search" placeholder="ระบรหัสบุคลากร เพื่อค้นหา...">
                                <button class="btn btn-primary" type="submit"> <i class="glyphicon glyphicon-search"></i> ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div><!--/.row -->
                <br />
                
                <!-- Panel for table -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>รหัสบุคลากร</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>ตำแหน่ง</th>
                                        <th>สังกัดกลุ่มสาขา</th>
                                        <th></th>
                                    </tr>
                               
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="..admin/js/plugins/morris/raphael.min.js"></script>
    <script src="..admin/js/plugins/morris/morris.min.js"></script>
    <script src="..admin/js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="..admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="..admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="..admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="..admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="..admin/js/plugins/flot/flot-data.js"></script>
    <script src="..admin/scripts.js"></script>

</body>

</html>
