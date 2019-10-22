<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['name'])) {
	header("Location:../admin/index.php");
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>F T U</span>&nbsp; COOP</a>

				<?php

				include("../../../sql_function/connect.php");
				$sql = "SELECT tb_student.*,tb_student_status.*

				FROM tb_student 
				LEFT JOIN tb_student_status ON tb_student.tb_std_status_id = tb_student_status.tb_sta_id
				WHERE tb_student.tb_std_id ='$id'";

				$result = mysql_query($sql) or die("ข้อมูลผิดพลาด" . mysql_error());
				$row = mysql_fetch_array($result);
				$status = $row['tb_std_status_id'];

				
				?>

				<!-- <ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em><span class="label label-danger">1</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
								<div class="profile-userpic">
									<img src="../../../picture/<?php echo $_SESSION['picDept']; ?>" class="img-responsive" alt="">
								</div> 
									</a>
									<div class="message-body"><small class="pull-right"></small>
										<a href="student_status.php"><strong>สถานะของคุณได้</strong> <?php
																										if ($status == '1') {
																											echo '<button class="btn btn-success btn-xs">  
                                                                                                            <i class="glyphicon glyphicon-ok-circle"> อนุมัติ(Approval) </i></button>';
																										} else if ($status == '2') {
																											echo '<button class="btn btn-warning btn-xs">  
                                                                                                            <i class="glyphicon glyphicon-time"> รอการอนุมัติ(Processing) </i></button>';
																										} else
																											echo '<button class="btn btn-danger btn-xs">  
                                                                                                            <i class="glyphicon glyphicon-remove-circle"> ไม่อนุมัติ(Disapprove)  </i></button>';
																										?> <strong>แล้ว</strong>.</a>
										<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>

							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
										<em class="fa fa-inbox"></em> <strong> Messages</strong>
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
				<img src="../../../student_pic/<?php echo $_SESSION['picture']; ?>" class="img-responsive" alt="">
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
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="student_bio.php"><em class="fa fa-users">&nbsp;</em>Manage Profile</a></li>
			<li><a href="Student_status.php"><em class="fa fa-check">&nbsp;</em> Check Status</a></li>

			<?php if ($status == '1') { ?>
				<li><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
				<li><a href="document.php"><em class="fa fa-leanpub">&nbsp;</em> Manual
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
				<li class="active">Dashboard</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>
		<!--/.row-->

		<div class=" panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em style="color: #008080;" class="fa fa-5x fa-users"></em>
							<div class="">Manage Profile</div><br>
							<div class="text-muted"> <a href="student_bio.php">View</a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em style="color: #1874CD;" class="fa fa-5x fa-check-circle"></em>
							<div class="">Check Status</div><br>
							<div class="text-muted"> <a href="student_status.php">View</a></div>
						</div>
					</div>
				</div>

				<?php if ($status == '1') { ?>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-blue panel-widget border-right">
							<div class="row no-padding"><em style="color: #6f42c1;" class="fa fa-5x fa-pencil-square"></em>
								<div class="">Student Recording</div><br>
								<div class="text-muted"> <a href="student_per.php">View</a></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-blue panel-widget border-right">
							<div class="row no-padding"><em style="color: #e83e8c;" class="fa fa-5x fa-weixin"></em>
								<div class="">Webboard</div><br>
								<div class="text-muted"> <a href="webboard.php">View</a></div>
							</div>
						</div>
					</div>
				</div>
				<!--/.row-->
			</div>
			<div class=" panel-container">
				<div class="row">
					<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-teal panel-widget border-right">
							<div class="row no-padding"><em style="color: #EE0000;" class="fa fa-5x fa-leanpub"></em>
								<div class="">Apprenticeship manual </div><br>
								<div class="text-muted"> <a href="document.php">View</a></div>
							</div>
						</div>
					</div>
				<?php }  ?>

				<!-- Footer	 -->
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
				<script>
					window.onload = function() {
						var chart1 = document.getElementById("line-chart").getContext("2d");
						window.myLine = new Chart(chart1).Line(lineChartData, {
							responsive: true,
							scaleLineColor: "rgba(0,0,0,.2)",
							scaleGridLineColor: "rgba(0,0,0,.05)",
							scaleFontColor: "#c5c7cc"
						});
					};
				</script>

</body>

</html>