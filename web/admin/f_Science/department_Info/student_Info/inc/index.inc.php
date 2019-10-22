<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");

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
        <ul class="nav menu">
            <li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="student_bio.php"><em class="fa fa-users">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_status.php"><em class="fa fa-check">&nbsp;</em> Check Status</a></li>

            <?php if($status == '1') { ?>
            <li><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
            <li><a href="document.php"><em class="fa fa-leanpub">&nbsp;</em> Apprenticeship manual
                    <!-- &amp; --></a></li>
            <li class="active"><a href="webboard.php"><em class="fa fa-comment">&nbsp;</em> Webboard</a></li>
            <?php }  ?>
            <li><a href="../../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel">
                        <h4>&nbsp;&nbsp;<i class="fa fa-qq">&nbsp;เว็บบอร์ด(Webboard)</i></h4>
                        <p>&nbsp; ปัญหา ถาม-ตอบ นักศึกษา (Question-Answer) </p>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center width-15">กระทู้โดย</br>Topic by</th>
                                <th class="text-center width-60">หัวข้อ</br>Topic name</th>
                                <th class="text-center text-info width-10">
                                    <span class="glyphicon glyphicon-comment" title="จำนวนความเห็น"></span>
                                </th>
                                <th class="text-center text-info width-15">ความเห็นล่าสุดโดย</br>last commented</th>
                            </tr>
                            </head>
                        <tbody>
                            <?php
			/********** เริ่ม LOOP แสดงกระทู้ **********/
			foreach ($ITEMS as $item):
			?>
                            <tr class="<?php
			/*
			เพิ่ม class 'success' เข้าไปใน <tr> นี้ หาก id ของกระทู้ ตรงกับ $_GET['highlight_id']
			ซึ่งจะถูกส่งมาจาก post.php (ดู post.php)
			*/
			if ($item['id'] === $HIGHLIGHT_ID) {
				echo 'success';
			}
			?>">
                                <td>
                                    <strong>
                                        <?php
					echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
					?>
                                    </strong>
                                    <br>
                                    <small class="text-muted" title="<?php
					/*
					แปลงวันที่ให้เป็นภาษาไทยด้วยฟังก์ชั่น thai_datetime() ที่กำหนดไว้ใน inc/main.inc.php
					โดยใส่ไว้ใน attribute title เพื่อให้แสดงขึ้นมาเมื่อผู้ใช้เอาเมาส์ไปชี้
					*/
					echo thai_datetime($item['created']);
					?>">
                                        <?php
						/*
						แปลงวันที่ให้เป็นช่วงห่างของเวลาภาษาไทยด้วยฟังก์ชั่น thai_time()
						ที่กำหนดไว้ใน inc/main.inc.php
						*/
						echo $item['created'];   /* echo thai_time($item['created']);  */
						?>
                                    </small>
                                </td>
                                <td>
                                    <a href="view.php?topic_id=<?php echo $item['id']; ?>">
                                        <?php
					echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8');
					?>
                                    </a>
                                </td>
                                <td class="text-center text-info">
                                    <?php
					echo $item['num_comments'];
					?>
                                </td>
                                <td>
                                    <?php
					/*
					หาก $item['last_commented_name'] ไม่ใช่ค่าว่าง นั่นหมายถึงกระทู้นี้มีผู้แสดงความเห็น
					ก็ให้แสดงชื่อผู้แสดงความเห็น
					*/
					if ($item['last_commented_name'] !== ''):
					?>
                                    <strong class="text-info">
                                        <?php
						echo htmlspecialchars($item['last_commented_name'], ENT_QUOTES, 'UTF-8');
						?>
                                    </strong>
                                    <br>
                                    <small class="text-muted" title="<?php
					echo thai_datetime($item['last_commented']);
					?>">
                                        <?php
						echo $item['last_commented'];   /* echo thai_time($item['last_commented']);  */
						?>
                                    </small>
                                    <?php
					endif;
					?>
                                </td>
                            </tr>
                            <?php
			endforeach;
			/********** จบ LOOP แสดงกระทู้ **********/
			?>
                        </tbody>
                    </table>
                    <?php
	/*
	หากจำนวนหน้ามากกว่า 1 เราจะสร้าง pagination
	*/
	if ($NUM_PAGES > 1):
	?>
                    <div class="panel-footer text-center">
                        <ul class="pagination">
                            <?php
			/********** เริ่ม LOOP แสดงหน้าของ pagination **********/
			/*
			โดยให้ $i เริ่มจาก 1 ไปถึงจำนวนหน้าซึ่งคือ $NUM_PAGES
			และหาก $i เท่ากับ $PAGE ที่เป็นหมายเลขหน้าปัจจุบัน
			เราก็จะเพิ่ม class 'active' เข้าไปใน <li> เพื่อให้เน้นว่าเป็นหน้าปัจจุบัน
			ใน href ของ <a> จะกำหนด query string ได้แก่
			page เพื่อส่งต่อไปเป็นค่าใน array $_GET ใน index.php
			ซึ่งค่าเหล่านี้จะทำให้ index.php รู้ว่าจะต้อง SELECT ข้อมูลจากตาราง topic
			โดยเริ่มจาก offset ใด
			*/
			for ($page = 1; $page <= $NUM_PAGES; ++$page):
			?>
                            <li class="<?php
			if ($page === $PAGE) {
				echo 'active';
			}
			?>">
                                <a href="webboard.php?page=<?php echo $page; ?>">
                                    <?php echo $page; ?>
                                </a>
                            </li>
                            <?php
			endfor;
			/********** จบ LOOP แสดงหน้าของ pagination **********/
			?>
                        </ul>
                    </div>
                    <?php
	endif;
	?>
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

</body>

<!--
    <div class="panel panel-default">
  
  <div class="panel-footer">Copyright © 2014 Design bootstrap sb admin 3 CSS Modify by Chid Clever & Su Haimee</div>
</div>
-->

</html>