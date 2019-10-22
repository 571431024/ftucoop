<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
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
                <img src="../../../picture/<?php  echo $_SESSION['picture'];?>" alt="stack photo" class="img-responsive">
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
            <li><a href="advisor_bio.php"><em class="fa fa-user">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศ</a></li>
            <li><a href="student_per.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการฝึกวิชาชีพ นศ
                    <!-- &amp; --></a></li>
            <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน นศ</a></li>
            <li class="active"><a href="webboard.php"><em class="fa fa-commenting-o">&nbsp;</em> Webboard</a></li>
            <li><a href="advisor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
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

        </div>
        <!--/.row-->




        <?php
/********** เริ่ม FORM ตั้งกระทู้ใหม่ **********/
/*
โดย form นี้จะใช้ method POST ในการส่งข้อมูลไปยัง post.php
ข้อมูลที่จะส่งให้กับ post.php ก็ได้แก่
title เป็น input type=text
description เป็น textarea
และ name เป็น input type=text
*/
?>
        <form action="post.php" method="post" class="form-horizontal panel panel-default">
            <div class="panel-heading">
                <h4>
                    <span class="glyphicon glyphicon-pencil"></span>
                    ตั้งกระทู้ใหม่ (New topic)
                </h4>
            </div>
            <div class="panel-body">
                <?php
		/*
		แสดง errors (ถ้ามี)
		ดูคำอธิบายใน inc/form_errors.inc.php
		*/
		require 'inc/form_errors.inc.php';
		?>
                <div class="form-group <?php
		/*
		ถ้ามี key ชื่อ 'title' อยู่ใน array $FORM_ERRORS
		ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
		*/
		if (isset($FORM_ERRORS['title'])) {
			echo 'has-error';
		}
		?>">
                    <label for="titleInput" class="col-sm-2 control-label">*หัวข้อ (Topic name)</label>
                    <div class="col-sm-10">
                        <input type="text" id="titleInput" name="title" value="<?php
					echo htmlspecialchars($DATA['title'], ENT_QUOTES, 'UTF-8');
					?>"
                            placeholder="หัวข้อ" spellcheck="false" class="form-control">
                    </div>
                </div>
                <div class="form-group <?php
		/*
		ถ้ามี key ชื่อ 'description' อยู่ใน array $FORM_ERRORS
		ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
		*/
		if (isset($FORM_ERRORS['description'])) {
			echo 'has-error';
		}
		?>">
                    <label for="descriptionTextarea" class="col-sm-2 control-label">*รายละเอียด (Detail)</label>
                    <div class="col-sm-10">
                        <textarea id="descriptionTextarea" name="description" rows="10" placeholder="รายละเอียด"
                            spellcheck="false" class="form-control"><?php
				echo htmlspecialchars($DATA['description'], ENT_QUOTES, 'UTF-8');
				?></textarea>
                    </div>
                </div>
                <div class="form-group <?php
		/*
		ถ้ามี key ชื่อ 'name' อยู่ใน array $FORM_ERRORS
		ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
		*/
		if (isset($FORM_ERRORS['name'])) {
			echo 'has-error';
		}
		?>">
                    <label for="nameInput" class="col-sm-2 control-label">*ชื่อ (Name)</label>
                    <div class="col-sm-4">
                        <input type="text" id="nameInput" name="name" value="<?php
					echo htmlspecialchars($DATA['name'], ENT_QUOTES, 'UTF-8');
					?>"
                            placeholder="ชื่อ" spellcheck="false" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            ตั้งกระทู้ (Insert)
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.row -->








        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>
</body>

<!--
    <div class="panel panel-default">
  
  <div class="panel-footer">Copyright © 2014 Design bootstrap sb admin 3 CSS Modify by Chid Clever & Su Haimee</div>
</div>
-->

</html>