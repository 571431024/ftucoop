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
				<a class="navbar-brand" href="#"><span>F T U</span>&nbsp; CCOP</a>
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
			<li><a href="student_per.php"><em class="fa fa-download">&nbsp;</em> Record perfermance</a></li>
			<li ><a href="document.php"><em class="fa fa-leanpub">&nbsp;</em> Apprenticeship manual
					<!-- &amp; --></a></li>
			<li class="active"><a href="Webboard.php"><em class="fa fa-comment">&nbsp;</em> Webboard</a></li>
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

		</div>
		<!--/.row-->

		<?php
/********** เริ่ม LOOP แสดงกระทู้และความเห็น **********/
/*
เนื่องจากเราได้รวมกระทู้และความเห็นเข้าเป็น array เดียวกัน (ดู view.php)
จึงทำให้ไม่ต้องเขียนโค้ด HTML ซ้ำซ้อน 
เพียงแค่ตรวจว่า $no เป็น 0 หรือไม่ ก็จะทราบว่า $item นั้นเป็นกระทู้
*/
foreach ($ITEMS as $no => $item):
	/*
	กำหนดตัวแปรเพื่อบอกว่า $item ปัจจุบันเป็นกระทู้หรือความเห็น
	*/
	$isTopic = $no === 0;
	/*
	ตรวจเงื่อนไขว่า $no เป็น 1 หรือไม่ หากมันเป็น 1 แสดงว่าขณะนี้ $item คือความเห็นแรก
	ดังนั้นเราจะสร้าง <div id="comments"></div> เพื่อให้ browser scroll มายังจุดนี้
	เมื่อมี hash tag #comments อยู่ใน URL
	*/
	if ($no === 1):
	?>
		<div id="comments"></div>
		<?php
		/*
		หากจำนวนหน้ามากกว่า 1 เราจะสร้าง pagination
		*/
		if ($NUM_PAGES > 1):
			/*
			เนื่องจากเราจะแสดง pagination ทั้งก่อนแสดงความเห็น และหลังแสดงความเห็น
			จึงใช้ ob_start() เพื่อเก็บ output ที่ได้ไปใช้ในภายหลัง โดยไม่ต้องเขียนโค้ดซ้ำซ้อน
			*/
			ob_start();
			?>
		<div class="text-center">
			<ul class="pagination">
				<?php
					/********** เริ่ม LOOP แสดงหน้าของ pagination **********/
					/*
					โดยให้ $i เริ่มจาก 1 ไปถึงจำนวนหน้าซึ่งคือ $NUM_PAGES
					และหาก $i เท่ากับ $PAGE ที่เป็นหมายเลขหน้าปัจจุบัน
					เราก็จะเพิ่ม class 'active' เข้าไปใน <li> เพื่อให้เน้นว่าเป็นหน้าปัจจุบัน
					ใน href ของ <a> จะกำหนด query string ได้แก่
					topic_id และ page เพื่อส่งต่อไปเป็นค่าใน array $_GET ใน view.php
					ซึ่งค่าเหล่านี้จะทำให้ view.php รู้ว่าจะแสดงกระทู้ id อะไร
					และรู้ว่าจะต้อง SELECT ข้อมูลจากตาราง comment โดยเริ่มจาก offset ใด
					และกำหนด hash tag #comments เพื่อให้ browser scroll ไปที่ความเห็นแรก
					*/
					for ($i = 1; $i <= $NUM_PAGES; ++$i):
					?>
				<li class="<?php if ($i === $PAGE) { echo 'active'; } ?>">
					<a href="view.php?topic_id=<?php
						echo $TOPIC_ID;
						?>&page=<?php
						echo $i;
						?>#comments">
						<?php echo $i; ?>
					</a>
				</li>
				<?php
					endfor;
					/********** จบ LOOP แสดงหน้าของ pagination **********/
					?>
			</ul>
		</div>
		<?php
			/*
			เก็บ output ที่อยู่ใน output buffer หมดหลังเรียกใช้ ob_start()
			เข้ามาไว้ในตัวแปร $PAGINATION พร้อมกับแสดงผล และปิด output buffering
			*/
			$PAGINATION = ob_get_flush();
		endif;
	endif;
	?>
		<div id="<?php
	/*
	หาก $item ไม่ใช่กระทู้
	กำหนด id ให้กับ <div> เพื่อให้ browser scroll มายังจุดนี้
	เมื่อมี hash tag #comment-<id ของความเห็น> อยู่ใน URL
	*/
	if (!$isTopic) {
		echo "
		 comment-{$item['id']}"; } ?>" class="panel
			<?php
	/*
	หาก $item เป็นกระทู้ ให้ใช้ class 'panel-info' เพื่อเน้นสีว่าเป็นกระทู้
	นอกนั้นใช้ 'panel-default'
	*/
	echo $isTopic
		? 'panel-info'
		: 'panel-default';
	?>">
			<?php
		/*
		หาก $item เป็นกระทู้ เราจะแสดงหัวข้อกระทู้ด้วย
		*/
		if ($isTopic):
		?>
			<div class="panel-heading" style="background: #FFA500;">
				<h4>
					<span class="badge pull-right">
						<span class="glyphicon glyphicon-eye-open"></span>&nbsp;
						<?php
					/*
					แสดงจำนวนการเข้าชมและจำนวนความเห็น
					โดยใช้ number_format() เพื่อใส่ , เข้าไปในตัวเลขให้ดูสวยงาม
					เช่น 1234 จะเป็น 1,234
					*/
					echo number_format($item['num_views']);
					?>&nbsp;&nbsp;<span
						 class="glyphicon glyphicon-comment"></span>&nbsp;
						<?php
					echo number_format($item['num_comments']);
					?>
					</span>
					<?php
				echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8');
				?>
				</h4>
			</div>
			<?php
		/*
		หาก $item เป็นความเห็น
		*/
		else:
		?>
			<span class="badge">
				<?php
		/*
		แสดงเลขลำดับความเห็น
		*/
		echo $START_OFFSET + $no;
		?>
			</span>
			<?php
		endif;
		?>
			<div class="panel-body">
				<?php
			/*
			แสดงรายละเอียดของกระทู้หรือข้อความของความเห็น
			โดยใช้ nl2br() เพื่อเปลี่ยน newline (\n) ให้เป็น tag <br>
			*/
			echo nl2br(htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'));
			?>
			</div>
			<div class="panel-footer">
				<small class="text-muted">โดย (By):</small>
				<strong class="text-info">
					<?php
			/*
			แสดงชื่อ
			*/
			echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8');
			?></strong>
				<small class="text-muted">เมื่อ (Date posted):</small>
				<span class="text-info" title="<?php
			/*
			แปลงวันที่ให้เป็นภาษาไทยด้วยฟังก์ชั่น thai_datetime() ที่กำหนดไว้ใน inc/main.inc.php
			โดยใส่ไว้ใน attribute title เพื่อให้แสดงขึ้นมาเมื่อผู้ใช้เอาเมาส์ไปชี้
			*/
			echo thai_datetime($item['created']);    /* echo thai_datetime($item['created']);  */
			?>">
					<?php
			/*
			แปลงวันที่ให้เป็นช่วงห่างของเวลาภาษาไทยด้วยฟังก์ชั่น thai_time()
			ที่กำหนดไว้ใน inc/main.inc.php
			*/
			echo $item['created'];   /* echo thai_datetime($item['created']);  */
			?></span>
				<small class="text-muted">จาก (From):</small>
				<span class="text-warning">
					<?php
			/*
			แสดง IP
			*/
			echo $item['ip'];
			?></span>
			</div>
		</div>
		<?php
endforeach;
/********** จบ LOOP แสดงกระทู้และความเห็น **********/
/*
ตรวจสอบว่ามีตัวแปร $PAGINATION ถูกกำหนดค่าไว้หรือไม่
ถ้ามี ก็ให้แสดงผล pagination อีกครั้ง
*/
if (isset($PAGINATION)) {
	echo $PAGINATION;
}
/********** เริ่ม FORM แสดงความเห็น **********/
/*
โดย form นี้จะใช้ method POST ในการส่งข้อมูลไปยัง view.php
จะเห็นว่าใน action ของ form มี hash tag #comment-form อยู่ด้วย
ใช้เพื่อให้ browser scroll มาจุดนี้เมื่อมี error เกิดขึ้น เช่น เมื่อไม่ได้ระบุ 'ชื่อ'
ข้อมูลที่จะส่งให้กับ view.php ก็ได้แก่
topic_id เป็น hidden input ซึ่งจะไม่แสดงผลให้ผู้ใช้เห็น
description เป็น textarea
และ name เป็น input type=text
*/
?>
		<form action="view.php#comment-form" method="post" id="comment-form" class="form-horizontal panel color">
			<input type="hidden" name="topic_id" value="<?php echo $TOPIC_ID; ?>">
			<div class="panel-heading">
				<h4>
					<span class="glyphicon glyphicon-comment"></span>
					แสดงความเห็น (Comment)
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
		ถ้ามี key ชื่อ 'description' อยู่ใน array $FORM_ERRORS
		ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
		*/
		if (isset($FORM_ERRORS['description'])) {
			echo 'has-error';
		}
		?>">
					<label for="descriptionTextarea" class="col-sm-2 control-label">*ข้อความ (Message)</label>
					<div class="col-sm-10">
						<textarea id="descriptionTextarea" name="description" rows="10" placeholder="ข้อความ" spellcheck="false" class="form-control"><?php
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
			</div>
			<hr>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block">
						แสดงความเห็น (Comment)
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