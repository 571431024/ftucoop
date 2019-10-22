<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../admin/index.php");

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

  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>


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
      <img src="../../picture/<?php  echo $row['tb_dept_img'];?>" alt="stack photo" class="img"> 
            </div>
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
      <li><a href="department_bio.php"><em class="fa fa-user">&nbsp;</em>  Manage Profile</a></li>
      <li><a href="advisor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลอาจารย์ที่ปรึกษา</a></li>
      <li class="active"><a href="student.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลนักศึกษา</a></li>
      <li><a href="mentor.php"><em class="fa fa-users">&nbsp;</em> จัดการข้อมูลพี่เลี้ยง
          <!-- &amp; --></a></li>
      <li><a href="location.php"><em class="fa fa-map-marker">&nbsp;</em> จัดการข้อมูลสถานที่</a></li>
      <li><a href="document.php"><em class="fa fa-file-text">&nbsp;</em> จัดการเอกสาร</a></li>
      <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> จัดการตารางนิเทศ</a></li>
      <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน</a></li>
      <li><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ผลการประเมิณนักศึกษา</a></li>
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

      <li><a href="../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
  </div>
  <!--/.sidebar-->

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
        <li class="active">Student Detail</li>
      </ol>
    </div>
    <!--/.row-->

    <div id="page-wrapper">

      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              จัดการ <small>โปรไฟล์</small>
            </h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-user"></i> รายละเอียดข้อมูลนักศึกษา
              </li>
            </ol>
          </div>
        </div>
        <br>
        <!-- /.row -->



        <?php


                            include ("../../sql_function/connect.php");

                            extract($_GET);
                            $tb_std_id = $flag;
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
                                    WHERE tb_student.tb_std_id ='$tb_std_id' ";
                            $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $studentimg =  $row['tb_std_img'];
                            $preID = $row['tb_prefix_id'];
                            $proID = $row['Pid'];
                            $AmID = $row['Aid'];
                            $TmID = $row['Tid'];

                            $stcID = $row['tb_std_id'];
                            $status =  $row['tb_std_status_id'];
                            $advisor = $row['tb_advisor_tb_ads_id'];
                            $advisorname = $row['tb_ads_name'];
                            $advisorlastname = $row['tb_ads_lastname'];
                            $mentor_id = $row['tb_mentor_tb_mentor_id'];

                            $mentername = $row['tb_mentor_name'];
                            $menterlastname = $row['tb_mentor_lastname'];
                            $wen = "    ";
                            $std_imggpa = $row['tb_std_imggpa'];
                           

                          
                            mysql_close();
                            ?>
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading"> <i class="fa fa-info-circle"></i> รายละเอียดข้อมูลนักศึกษา</div>
            <div class="panel-body">









              <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../../sql_function/sql_edit_student_bio_admin.php">
                <fieldset>
                  <div align="center"><img src="../../student_pic/<?php echo $row['tb_std_img']; ?>" width=140 height=160>
                  </div>
                  </br>

                  <legend>1.รายละเอียดเกี่ยวกับนักศึกษา
                    <div align="right"> <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                        data-target="#editHis">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>

                  </legend>

                  <div class="form-group">
                    <label class="control-label col-md-2">ชื่อ</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_prefix_name']; ?> <?php echo $row['tb_std_name']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-1">นามสกุล</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_lastname']; ?> " disabled>
                    </div>
                  </div>




                  <div class="form-group">
                    <label class="control-label col-md-2">รหัสนักศึกษา</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_identification']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-1">สาขาวิชา</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_major']; ?> " disabled>

                    </div>

                    <label class="control-label col-md-1">ชั้นปี</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_year']; ?> " disabled>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">คะแนนเฉลี่ยสะสม</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_gpa']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">วันเกิด</label>
                    <div class="col-md-2">
                      <input class="form-control" value="<?php echo $row['tb_std_birthday']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">เพศ</label>
                    <div class="col-md-1">
                      <input class="form-control" value="<?php echo $row['tb_std_sex']; ?> " disabled>
                    </div>



                    <label class="control-label col-md-1">ส่วนสูง</label>
                    <div class="col-md-1">
                      <input class="form-control" value="<?php echo $row['tb_std_tall']; ?> " disabled>
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2">น้ำหนัก</label>
                    <div class="col-md-1">
                      <input class="form-control" value="<?php echo $row['tb_std_weight']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">เลขที่บัตรประชาชน</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_identi']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">สัญชาติ</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_nationality']; ?> "
                        disabled>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">ศาสนา </label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_religion']; ?> " disabled>
                    </div>
                  </div>

                  <div class="modal fade" id="editHis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูลรายละเอียดเกี่ยวกับนักศึกษา</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../../sql_function/sql_edit_student_bio_admin.php">
                            <!--hidden  -->
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_draft" value="<?php echo $row['tb_std_draft']; ?>">
                            <input type="hidden" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?>">
                            <input type="hidden" name="tb_std_address" value="<?php echo $row['tb_std_address']; ?>">
                            <input type="hidden" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?>">
                            <input type="hidden" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?>">
                            <input type="hidden" name="tb_std_province" value="<?php echo $proID ?>">
                            <input type="hidden" name="tb_std_amphur" value="<?php echo $AmID ?>">
                            <input type="hidden" name="tb_std_tumbon" value="<?php echo $TmID ?>">
                            <input type="hidden" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?>">
                            <input type="hidden" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?>">
                            <input type="hidden" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?>">
                            <input type="hidden" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?>">
                            <input type="hidden" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?>">
                            <input type="hidden" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?>">
                            <input type="hidden" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?>">
                            <input type="hidden" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?>">
                            <input type="hidden" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?>">
                            <input type="hidden" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?>">
                            <input type="hidden" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?>">
                            <input type="hidden" name="tb_std_ability" value="<?php echo $row['tb_std_ability']; ?>">
                            <input type="hidden" name="tb_std_workings" value="<?php echo $row['tb_std_workings']; ?>">
                            <div class="form-group">
                              <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                              <div class="col-md-3">
                                <?php
                  include ("../../sql_function/connect.php");
                  $sql = "SELECT * FROM tb_prefix ORDER BY tb_prefix_name";
                  $result = mysql_query($sql) or die (mysql_error());
                  ?>
                                <select class="form-control" id="tb_prefix_id" name="tb_prefix_id">
                                  <option value="no">เลือกคำนำหน้าชื่อ</option>
                                  <?php
                      while($row2 = mysql_fetch_array($result)){
                      ?>
                                  <option value="<?php echo $row2['tb_prefix_id']; ?>" <?php if($preID==$row2['tb_prefix_id']){
                                    echo "selected" ; } ?>>
                                    <?php echo $row2['tb_prefix_name']; ?>
                                  </option>
                                  <?php
                      }
                      mysql_close();
                      ?>
                                </select>
                              </div>
                              <label class="control-label col-md-2">ชื่อ</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_std_name" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">นามสกุล</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_std_lastname" name="tb_std_lastname"
                                  value="<?php echo $row['tb_std_lastname']; ?>">
                              </div>
                              <label class="control-label col-md-2">รหัสนักศึกษา</label>
                              <div class="col-md-3">
                                <input readonly type="text" class="form-control" id="tb_std_identification" name="tb_std_identification"
                                  value="<?php echo $row['tb_std_identification']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">รหัสผ่าน</label>
                              <div class="col-md-3">
                                <input type="password" class="form-control" id="tb_std_password" name="tb_std_password"
                                  value="<?php echo $row['tb_std_password']; ?>">
                              </div>
                              <label class="control-label col-md-2">สาขา</label>
                              <div class="col-md-3">
                                <input name="tb_std_major" id="tb_std_major" class="form-control" size="3" list="No1"
                                  value="<?php echo $row['tb_std_major']; ?>">
                                <datalist id="No1">
                                  <option value="Information technology">
                                  <option value="R & D">
                                </datalist>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">ชั้นปี</label>
                              <div class="col-md-3">
                                <input name="tb_std_year" id="tb_std_year" class="form-control" size="1" list="No2"
                                  value="<?php echo $row['tb_std_year']; ?>">
                                <datalist id="No2">
                                  <option value="3">
                                  <option value="4">
                                </datalist>
                              </div>
                              <label class="control-label col-md-2">GPA</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_std_gpa" name="tb_std_gpa" value="<?php echo $row['tb_std_year']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">วันเกิด</label>
                              <div class="col-md-3">
                                <input class="form-control" type="date" id="tb_std_birthday" name="tb_std_birthday"
                                  value="<?php echo $row['tb_std_birthday']; ?>">
                              </div>
                              <label class="control-label col-md-2">เพศ</label>
                              <div class="col-md-3">
                                <input name="tb_std_sex" id="tb_std_sex" class="form-control" size="3" list="No" value="<?php echo $row['tb_std_sex']; ?>">
                                <datalist id="No">
                                  <option value="ชาย">
                                  <option value="หญิง">
                                </datalist>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">ส่วนสูง</label>
                              <div class="col-md-3">
                                <input class="form-control" type="text" id="tb_std_tall" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                              </div>
                              <label class="control-label col-md-2">น้ำหนัก</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_std_weight" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">บัตรประชาชน</label>
                              <div class="col-md-3">
                                <input class="form-control" type="text" id="tb_std_identi" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                              </div>
                              <label class="control-label col-md-2">สัญชาติ</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_std_nationality" name="tb_std_nationality"
                                  value="<?php echo $row['tb_std_nationality']; ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">ศาสนา</label>
                              <div class="col-md-3">
                                <input class="form-control" type="text" id="tb_std_religion" name="tb_std_religion"
                                  value="<?php echo $row['tb_std_religion']; ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <legend>2.การเกณฑ์ทหาร <div align="right"> <button type="button" class="btn btn-info btn-xs"
                        data-toggle="modal" data-target="#editHis1">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>
                  </legend>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">การเกณฑ์ทหาร</label>
                    <div class="col-lg-4">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_draft']; ?> " disabled>
                    </div>
                  </div>

                  <div class="modal fade" id="editHis1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูล การเกณฑ์ทหาร</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_student_bio_admin.php">
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_address" value="<?php echo $row['tb_std_address']; ?>">
                            <input type="hidden" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?>">
                            <input type="hidden" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?>">
                            <input type="hidden" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?>">
                            <input type="hidden" name="tb_std_province" value="<?php echo $proID ?>">
                            <input type="hidden" name="tb_std_amphur" value="<?php echo $AmID ?>">
                            <input type="hidden" name="tb_std_tumbon" value="<?php echo $TmID ?>">
                            <input type="hidden" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?>">
                            <input type="hidden" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?>">
                            <input type="hidden" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?>">
                            <input type="hidden" name="tb_prefix_id" value="<?php echo $row['tb_prefix_id']; ?>">
                            <input type="hidden" name="tb_std_identification" value="<?php echo $row['tb_std_identification']; ?>">
                            <input type="hidden" name="tb_std_password" value="<?php echo $row['tb_std_password']; ?>">
                            <input type="hidden" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                            <input type="hidden" name="tb_std_lastname" value="<?php echo $row['tb_std_lastname']; ?>">
                            <input type="hidden" name="tb_std_sex" value="<?php echo $row['tb_std_sex']; ?>">
                            <input type="hidden" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                            <input type="hidden" name="tb_std_gpa" value="<?php echo $row['tb_std_gpa']; ?>">
                            <input type="hidden" name="tb_std_birthday" value="<?php echo $row['tb_std_birthday']; ?>">
                            <input type="hidden" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                            <input type="hidden" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                            <input type="hidden" name="tb_std_nationality" value="<?php echo $row['tb_std_nationality']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_year" value="<?php echo $row['tb_std_year']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_religion" value="<?php echo $row['tb_std_religion']; ?>">
                            <input type="hidden" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?>">
                            <input type="hidden" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?>">
                            <input type="hidden" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?>">
                            <input type="hidden" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?>">
                            <input type="hidden" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?>">
                            <input type="hidden" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?>">
                            <input type="hidden" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?>">
                            <input type="hidden" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?>">
                            <input type="hidden" name="tb_std_ability" value="<?php echo $row['tb_std_ability']; ?>">
                            <input type="hidden" name="tb_std_workings" value="<?php echo $row['tb_std_workings']; ?>">



                            <div class="form-group">
                              <label class="control-label col-md-2">การเกณฑ์ทหาร</label>
                              <div class="col-md-5">
                                <input name="tb_std_draft" id="tb_std_draft" class="form-control" size="3" list="id1"
                                  value="<?php echo $row['tb_std_draft']; ?>">
                                <datalist id="id1">
                                  <option value="ผ่านการเกณฑ์แล้ว">
                                  <option value="ยังไม่ได้เกณฑ์/อยู่ระหว่างการขอผ่อนผัน">
                                  <option value="ได้รับการยกเว้น">

                                </datalist>


                              </div>
                            </div>



                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>



                  <legend>3.ที่อยู่ปัจจุบัน <div align="right"> <button type="button" class="btn btn-info btn-xs"
                        data-toggle="modal" data-target="#editHis2">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>
                  </legend>
                  <div class="form-group">
                    <label class="control-label col-md-2">เลขที่</label>
                    <div class="col-md-1">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_homeno']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">ตรอก/ซอย</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_soi']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">ถนน</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_rode']; ?> " disabled>
                    </div>

                  </div>



                  <div class="form-group">
                    <label class="control-label col-md-2">จังหวัด</label>
                    <div class="col-md-2">
                      <input class="form-control" value="<?php echo $row['Pname']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">อำเภอ</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['Aname']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">เขต/ตำบล</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['Tname']; ?> " disabled>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">รหัสไปรษณย์</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_post']; ?> " disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Address </br>(นักศึกษาต่างชาติ)</label>
                    <div class="col-lg-8">
                      <textarea class="form-control" rows="5" name="tb_std_address" disabled> <?php echo $row['tb_std_address']; ?>

        </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">โทรศัพท์</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_tel']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-1">Email</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_email']; ?> " disabled>
                    </div>

                  </div>
                  <div class="modal fade" id="editHis2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูลที่อยู่ปัจจุบัน</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_student_bio_admin.php">
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_draft" value="<?php echo $row['tb_std_draft']; ?>">


                            <input type="hidden" name="tb_prefix_id" value="<?php echo $row['tb_prefix_id']; ?>">
                            <input type="hidden" name="tb_std_identification" value="<?php echo $row['tb_std_identification']; ?>">
                            <input type="hidden" name="tb_std_password" value="<?php echo $row['tb_std_password']; ?>">
                            <input type="hidden" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                            <input type="hidden" name="tb_std_lastname" value="<?php echo $row['tb_std_lastname']; ?>">
                            <input type="hidden" name="tb_std_sex" value="<?php echo $row['tb_std_sex']; ?>">
                            <input type="hidden" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                            <input type="hidden" name="tb_std_gpa" value="<?php echo $row['tb_std_gpa']; ?>">
                            <input type="hidden" name="tb_std_birthday" value="<?php echo $row['tb_std_birthday']; ?>">
                            <input type="hidden" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                            <input type="hidden" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                            <input type="hidden" name="tb_std_nationality" value="<?php echo $row['tb_std_nationality']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_year" value="<?php echo $row['tb_std_year']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_religion" value="<?php echo $row['tb_std_religion']; ?>">
                            <input type="hidden" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?>">
                            <input type="hidden" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?>">
                            <input type="hidden" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?>">
                            <input type="hidden" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?>">
                            <input type="hidden" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?>">
                            <input type="hidden" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?>">
                            <input type="hidden" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?>">
                            <input type="hidden" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?>">
                            <input type="hidden" name="tb_std_ability" value="<?php echo $row['tb_std_ability']; ?>">
                            <input type="hidden" name="tb_std_workings" value="<?php echo $row['tb_std_workings']; ?>">

                            <div class="form-group">
                              <label class="control-label col-md-2">เลขที่</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?> ">
                              </div>
                              <label class="control-label col-md-2">ตรอก/ซอย</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?> ">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-2">ถนน</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?> ">
                              </div>

                              <label class="control-label col-md-2">จังหวัด
                                <?php echo $AmID ?> </label>
                              <div class="col-md-3">
                                <?php
                                                                        include ("../../sql_function/connect.php");
                                                                        $sql = "SELECT * FROM province ORDER BY Pname";
                                                                        $result = mysql_query($sql) or die (mysql_error());
                                                                        ?>
                                <select class="form-control" id="tb_std_province" name="tb_std_province">
                                  <option value="no">เลือกจังหวัด</option>
                                  <?php
                                                                            while($row2 = mysql_fetch_array($result)){
                                                                            ?>
                                  <option value="<?php echo $row2['Pid']; ?>" <?php if($proID==$row2['Pid']){ echo
                                    "selected" ; } ?>>
                                    <?php echo $row2['Pname']; ?>
                                  </option>
                                  <?php
                                                                            }
                                                                            mysql_close();
                                                                            ?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-2">อำเภอ</label>
                              <div class="col-md-3">
                                <?php
                                                                        include ("../../sql_function/connect.php");
                                                                        $sql = "SELECT * FROM amphur ORDER BY Aname";
                                                                        $result = mysql_query($sql) or die (mysql_error());
                                                                        ?>
                                <select class="form-control" id="tb_std_amphur" name="tb_std_amphur">
                                  <option value="no">เลือกอำเภอ</option>
                                  <?php
                                                                            while($row2 = mysql_fetch_array($result)){
                                                                            ?>
                                  <option value="<?php echo $row2['Aid']; ?>" <?php if($AmID==$row2['Aid']){ echo
                                    "selected" ; } ?>>
                                    <?php echo $row2['Aname']; ?>
                                  </option>
                                  <?php
                                                                            }
                                                                            mysql_close();
                                                                            ?>
                                </select>
                              </div>
                              <label class="control-label col-md-2">ตำบล </label>
                              <div class="col-md-3">
                                <?php
                                                                        include ("../../sql_function/connect.php");
                                                                        $sql = "SELECT * FROM tumbon ORDER BY Tname";
                                                                        $result = mysql_query($sql) or die (mysql_error());
                                                                        ?>
                                <select class="form-control" id="tb_std_tumbon" name="tb_std_tumbon">
                                  <option value="no">เลือกตำบล</option>
                                  <?php
                                                                            while($row2 = mysql_fetch_array($result)){
                                                                            ?>
                                  <option value="<?php echo $row2['Tid']; ?>" <?php if($TmID==$row2['Tid']){ echo
                                    "selected" ; } ?>>
                                    <?php echo $row2['Tname']; ?>
                                  </option>
                                  <?php
                                                                            }
                                                                            mysql_close();
                                                                            ?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-2">รหัสไปรษณีย์</label>
                              <div class="col-md-3">
                                <input type="text" class="form-control" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?> ">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="textArea" class="col-lg-2 control-label">Address (นักศึกษาต่างชาติ)</label>
                              <div class="col-lg-8">
                                <textarea class="form-control" rows="5" name="tb_std_address"> <?php echo $row['tb_std_address']; ?>

                                </textarea>

                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">โทรศัพท์</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?> ">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-2">อีเมลล์</label>
                              <div class="col-md-4">
                                <input type="email" class="form-control" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?> ">
                              </div>
                            </div>


                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>




                  <legend>4.ข้อมูลเกี่ยวกับครอบครัว <div align="right"> <button type="button" class="btn btn-info btn-xs"
                        data-toggle="modal" data-target="#editHis3">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>
                  </legend>
                  <div class="form-group">
                    <label class="control-label col-md-2">ชื่อ-สกุลบิดา</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_fathername']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-2">อาชีพ</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_fatheroccu']; ?> " disabled>
                    </div>


                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">สถานที่ทำงาน</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_fatherocculo']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_fathertel']; ?> " disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">ชื่อ-สกุลมารดา</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_mothername']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-2">อาชีพ</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_motheroccu']; ?> " disabled>
                    </div>


                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-2">สถานที่ทำงาน</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_motherocculo']; ?> "
                        disabled>
                    </div>
                    <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                    <div class="col-md-3">
                      <input class="form-control" value="<?php echo $row['tb_std_mothertel']; ?> " disabled>
                    </div>


                  </div>








                  <div class="modal fade" id="editHis3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูลเกี่ยวกับครอบครัว</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_student_bio_admin.php">
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_draft" value="<?php echo $row['tb_std_draft']; ?>">
                            <input type="hidden" name="tb_std_address" value="<?php echo $row['tb_std_address']; ?>">
                            <input type="hidden" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?>">
                            <input type="hidden" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?>">
                            <input type="hidden" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?>">
                            <input type="hidden" name="tb_std_province" value="<?php echo $proID ?>">
                            <input type="hidden" name="tb_std_amphur" value="<?php echo $AmID ?>">
                            <input type="hidden" name="tb_std_tumbon" value="<?php echo $TmID ?>">
                            <input type="hidden" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?>">
                            <input type="hidden" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?>">
                            <input type="hidden" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?>">
                            <input type="hidden" name="tb_prefix_id" value="<?php echo $row['tb_prefix_id']; ?>">
                            <input type="hidden" name="tb_std_identification" value="<?php echo $row['tb_std_identification']; ?>">
                            <input type="hidden" name="tb_std_password" value="<?php echo $row['tb_std_password']; ?>">
                            <input type="hidden" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                            <input type="hidden" name="tb_std_lastname" value="<?php echo $row['tb_std_lastname']; ?>">
                            <input type="hidden" name="tb_std_sex" value="<?php echo $row['tb_std_sex']; ?>">
                            <input type="hidden" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                            <input type="hidden" name="tb_std_gpa" value="<?php echo $row['tb_std_gpa']; ?>">
                            <input type="hidden" name="tb_std_birthday" value="<?php echo $row['tb_std_birthday']; ?>">
                            <input type="hidden" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                            <input type="hidden" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                            <input type="hidden" name="tb_std_nationality" value="<?php echo $row['tb_std_nationality']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_year" value="<?php echo $row['tb_std_year']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_religion" value="<?php echo $row['tb_std_religion']; ?>">

                            <input type="hidden" name="tb_std_ability" value="<?php echo $row['tb_std_ability']; ?>">
                            <input type="hidden" name="tb_std_workings" value="<?php echo $row['tb_std_workings']; ?>">

                            <div class="form-group">
                              <label class="control-label col-md-2">ชื่อ-สกุลบิดา</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?> ">
                              </div>
                              <label class="control-label col-md-2">อาชีพ</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?> ">
                              </div>


                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">สถานที่ทำงาน</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?> ">
                              </div>
                              <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?> ">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">ชื่อ-สกุลมารดา</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?> ">
                              </div>
                              <label class="control-label col-md-2">อาชีพ</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?> ">
                              </div>


                            </div>


                            <div class="form-group">
                              <label class="control-label col-md-2">สถานที่ทำงาน</label>
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?> ">
                              </div>
                              <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                              <div class="col-md-3">
                                <input class="form-control" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?> ">
                              </div>


                            </div>


                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>


                  <legend>5.ความสามารถทางด้านคอมพิวเตอร์ <div align="right"> <button type="button" class="btn btn-info btn-xs"
                        data-toggle="modal" data-target="#editHis4">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>
                  </legend>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">โปรแกรมคอมพิวเตอร์</label>
                    <div class="col-lg-8">
                      <textarea class="form-control" rows="5" disabled> <?php echo $row['tb_std_ability']; ?>

                      </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">ผลงาน/รางวัลที่เคยได้รับ</label>
                    <div class="col-lg-8">
                      <textarea class="form-control" rows="5" disabled> <?php echo $row['tb_std_workings']; ?>

                      </textarea>

                    </div>
                  </div>
                  <div class="modal fade" id="editHis4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูลความสามารถทางด้านคอมพิวเตอร์</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_student_bio_admin.php">
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_draft" value="<?php echo $row['tb_std_draft']; ?>">
                            <input type="hidden" name="tb_std_address" value="<?php echo $row['tb_std_address']; ?>">
                            <input type="hidden" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?>">
                            <input type="hidden" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?>">
                            <input type="hidden" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?>">
                            <input type="hidden" name="tb_std_province" value="<?php echo $proID ?>">
                            <input type="hidden" name="tb_std_amphur" value="<?php echo $AmID ?>">
                            <input type="hidden" name="tb_std_tumbon" value="<?php echo $TmID ?>">
                            <input type="hidden" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?>">
                            <input type="hidden" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?>">
                            <input type="hidden" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?>">
                            <input type="hidden" name="tb_prefix_id" value="<?php echo $row['tb_prefix_id']; ?>">
                            <input type="hidden" name="tb_std_identification" value="<?php echo $row['tb_std_identification']; ?>">
                            <input type="hidden" name="tb_std_password" value="<?php echo $row['tb_std_password']; ?>">
                            <input type="hidden" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                            <input type="hidden" name="tb_std_lastname" value="<?php echo $row['tb_std_lastname']; ?>">
                            <input type="hidden" name="tb_std_sex" value="<?php echo $row['tb_std_sex']; ?>">
                            <input type="hidden" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                            <input type="hidden" name="tb_std_gpa" value="<?php echo $row['tb_std_gpa']; ?>">
                            <input type="hidden" name="tb_std_birthday" value="<?php echo $row['tb_std_birthday']; ?>">
                            <input type="hidden" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                            <input type="hidden" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                            <input type="hidden" name="tb_std_nationality" value="<?php echo $row['tb_std_nationality']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_year" value="<?php echo $row['tb_std_year']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_religion" value="<?php echo $row['tb_std_religion']; ?>">
                            <input type="hidden" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?>">
                            <input type="hidden" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?>">
                            <input type="hidden" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?>">
                            <input type="hidden" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?>">
                            <input type="hidden" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?>">
                            <input type="hidden" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?>">
                            <input type="hidden" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?>">
                            <input type="hidden" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?>">




                            <div class="form-group">
                              <label for="textArea" class="col-lg-2 control-label">โปรแกรมคอมพิวเตอร์</label>
                              <div class="col-lg-8">
                                <textarea class="form-control" rows="5" name="tb_std_ability"> <?php echo $row['tb_std_ability']; ?>

        </textarea>

                              </div>
                            </div>
                            <div class="form-group">
                              <label for="textArea" class="col-lg-2 control-label">ผลงาน/รางวัลที่เคยได้รับ</label>
                              <div class="col-lg-8">
                                <textarea class="form-control" rows="5" name="tb_std_workings"> <?php echo $row['tb_std_workings']; ?>

        </textarea>

                              </div>
                            </div>




                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>


                  <legend>6.การเลือกสถานที่ฝึกงาน</legend>
                  <div class="form-group">
                    <label class="control-label col-md-2">พื้นที่จังหวัด</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['PLname']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">งานประเภท</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['CLname']; ?> " disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">สถานที่</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" value="<?php echo $row['LNname']; ?> " disabled>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">ชื่อสถานที่แนะนำ</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_offerlo']; ?> " disabled>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">รายละเอียดอสถานที่</label>
                    <div class="col-lg-8">
                      <textarea class="form-control" rows="5" disabled> <?php echo $row['tb_std_offerlo_d']; ?>  

                      </textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">สมัครตำแหน่ง</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_offerposi']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">สมัครโครการ</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_stdcate_cate']; ?> " disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">ระยะเวลาฝึกวิชาชีพ </br>(นศ ฝึกวิชาชีพ)</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_std_duration']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">ระยะเวลาสหกิจ </br>(นศ สหกิจศึกษา)</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="25/8/2016 ถึง 25/12/2016 " disabled>
                    </div>
                  </div>
                  <legend>7.เอกสารประกอบการสมัคร <div align="right"> <button type="button" class="btn btn-info btn-xs"
                        data-toggle="modal" data-target="#editHis5">
                        <i class="glyphicon glyphicon-edit"></i> Edit</button></div>
                  </legend>
                  <div class="form-group">
                    <label class="control-label col-md-2">รูปประจำตัว</label>
                    <div class="col-md-4">
                      <a href="../../student_pic/<?php  echo $studentimg ?>" target="_blank"><img src="../../student_pic/<?php  echo $studentimg ?>"
                          width=140 height=160> </a>

                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2">Transcript</label>
                    <div class="col-md-4">
                      <a href="../../student_tran/<?php  echo $std_imggpa ?>" target="_blank"> <img src="../../student_tran/<?php  echo $std_imggpa ?>"
                          width=140 height=160S> </a>

                    </div>
                  </div>
                  <div class="modal fade" id="editHis5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i>
                            แก้ไขข้อมูลเอกสารประกอบการสมัคร</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_student_bio_admin.php">
                            <input type="hidden" name="tb_std_id" value="<?php echo $row['tb_std_id']; ?>">
                            <input type="hidden" name="tb_std_draft" value="<?php echo $row['tb_std_draft']; ?>">
                            <input type="hidden" name="tb_std_address" value="<?php echo $row['tb_std_address']; ?>">
                            <input type="hidden" name="tb_std_homeno" value="<?php echo $row['tb_std_homeno']; ?>">
                            <input type="hidden" name="tb_std_soi" value="<?php echo $row['tb_std_soi']; ?>">
                            <input type="hidden" name="tb_std_rode" value="<?php echo $row['tb_std_rode']; ?>">
                            <input type="hidden" name="tb_std_province" value="<?php echo $proID ?>">
                            <input type="hidden" name="tb_std_amphur" value="<?php echo $AmID ?>">
                            <input type="hidden" name="tb_std_tumbon" value="<?php echo $TmID ?>">
                            <input type="hidden" name="tb_std_post" value="<?php echo $row['tb_std_post']; ?>">
                            <input type="hidden" name="tb_std_tel" value="<?php echo $row['tb_std_tel']; ?>">
                            <input type="hidden" name="tb_std_email" value="<?php echo $row['tb_std_email']; ?>">
                            <input type="hidden" name="tb_prefix_id" value="<?php echo $row['tb_prefix_id']; ?>">
                            <input type="hidden" name="tb_std_identification" value="<?php echo $row['tb_std_identification']; ?>">
                            <input type="hidden" name="tb_std_password" value="<?php echo $row['tb_std_password']; ?>">
                            <input type="hidden" name="tb_std_name" value="<?php echo $row['tb_std_name']; ?>">
                            <input type="hidden" name="tb_std_lastname" value="<?php echo $row['tb_std_lastname']; ?>">
                            <input type="hidden" name="tb_std_sex" value="<?php echo $row['tb_std_sex']; ?>">
                            <input type="hidden" name="tb_std_identi" value="<?php echo $row['tb_std_identi']; ?>">
                            <input type="hidden" name="tb_std_gpa" value="<?php echo $row['tb_std_gpa']; ?>">
                            <input type="hidden" name="tb_std_birthday" value="<?php echo $row['tb_std_birthday']; ?>">
                            <input type="hidden" name="tb_std_tall" value="<?php echo $row['tb_std_tall']; ?>">
                            <input type="hidden" name="tb_std_weight" value="<?php echo $row['tb_std_weight']; ?>">
                            <input type="hidden" name="tb_std_nationality" value="<?php echo $row['tb_std_nationality']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_year" value="<?php echo $row['tb_std_year']; ?>">
                            <input type="hidden" name="tb_std_major" value="<?php echo $row['tb_std_major']; ?>">
                            <input type="hidden" name="tb_std_religion" value="<?php echo $row['tb_std_religion']; ?>">
                            <input type="hidden" name="tb_std_fathername" value="<?php echo $row['tb_std_fathername']; ?>">
                            <input type="hidden" name="tb_std_fatheroccu" value="<?php echo $row['tb_std_fatheroccu']; ?>">
                            <input type="hidden" name="tb_std_fatherocculo" value="<?php echo $row['tb_std_fatherocculo']; ?>">
                            <input type="hidden" name="tb_std_fathertel" value="<?php echo $row['tb_std_fathertel']; ?>">
                            <input type="hidden" name="tb_std_mothername" value="<?php echo $row['tb_std_mothername']; ?>">
                            <input type="hidden" name="tb_std_motheroccu" value="<?php echo $row['tb_std_motheroccu']; ?>">
                            <input type="hidden" name="tb_std_motherocculo" value="<?php echo $row['tb_std_motherocculo']; ?>">
                            <input type="hidden" name="tb_std_mothertel" value="<?php echo $row['tb_std_mothertel']; ?>">
                            <input type="hidden" name="tb_std_ability" value="<?php echo $row['tb_std_ability']; ?>">
                            <input type="hidden" name="tb_std_workings" value="<?php echo $row['tb_std_workings']; ?>">

                            <div class="form-group">
                              <label class="control-label col-md-2">รูปโปรไฟล์</label>
                              <div class="col-md-4">
                                <img src="../../student_pic/<?php echo $row['tb_std_img']; ?>" width=140 height=160>

                                <input type="file" class="form-control" name="tb_std_img" id="input050"> <br>
                                <input type="hidden" class="form-control" name="hdnOldFile" value="<?php echo $row['tb_std_img'];?>">


                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-2">Transcript</label>
                              <div class="col-md-4">
                                <img src="../../student_tran/<?php echo $row['tb_std_imggpa']; ?>" width=140 height=16 0>

                                <input type="file" class="form-control" name="tb_std_imggpa" id="input05"> <br>
                                <input type="hidden" class="form-control" name="hdnOldFile" value="<?php echo $row['tb_std_imggpa'];?>">


                              </div>
                            </div>





                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
                                ยกเลิก</button>
                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                                แก้ไขข้อมูล</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <legend>8.สถานะนักศึกษา</legend>
                  <div class="form-group">
                    <label class="control-label col-md-2">สถานะนักศึกษา</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_sta_name']; ?> " disabled>
                    </div>
                    <label class="control-label col-md-2">พี่เลี้ยง</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_mentor_name']; ?> <?php echo $row['tb_mentor_lastname']; ?>  "
                        disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-2">อาจารย์ที่ปรึกษา</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" value="<?php echo $row['tb_ads_name']; ?> <?php echo $row['tb_ads_lastname']; ?> "
                        disabled>
                    </div>

                  </div>


                  <?php



require('../department_Info/fpdf.php');

class pdf extends fpdf {
  function SetThaiFont() {
    $this->AddFont('AngsanaNew','','angsa.php');
    $this->AddFont('AngsanaNew','B','angsab.php');
    $this->AddFont('AngsanaNew','I','angsai.php');
    $this->AddFont('AngsanaNew','IB','angsaz.php');
    $this->AddFont('CordiaNew','','cordia.php');
    $this->AddFont('CordiaNew','B','cordiab.php');
    $this->AddFont('CordiaNew','I','cordiai.php');
    $this->AddFont('CordiaNew','IB','cordiaz.php');
    $this->AddFont('Tahoma','','tahoma.php');
    $this->AddFont('Tahoma','B','tahomab.php');
    $this->AddFont('BrowalliaNew','','browa.php');
    $this->AddFont('BrowalliaNew','B','browab.php');
    $this->AddFont('BrowalliaNew','I','browai.php');
    $this->AddFont('BrowalliaNew','IB','browaz.php');
    $this->AddFont('KoHmu','','kohmu.php');
    $this->AddFont('KoHmu2','','kohmu2.php');
    $this->AddFont('KoHmu3','','kohmu3.php');
    $this->AddFont('MicrosoftSansSerif','','micross.php');
    $this->AddFont('PLE_Cara','','plecara.php');
    $this->AddFont('PLE_Care','','plecare.php');
    $this->AddFont('PLE_Care','B','plecareb.php');
    $this->AddFont('PLE_Joy','','plejoy.php');
    $this->AddFont('PLE_Tom','','pletom.php');
    $this->AddFont('PLE_Tom','B','pletomb.php');
    $this->AddFont('PLE_TomOutline','','pletomo.php');
    $this->AddFont('PLE_TomWide','','pletomw.php');
    $this->AddFont('DilleniaUPC','','dill.php');
    $this->AddFont('DilleniaUPC','B','dillb.php');
    $this->AddFont('DilleniaUPC','I','dilli.php');
    $this->AddFont('DilleniaUPC','IB','dillz.php');
    $this->AddFont('EucrosiaUPC','','eucro.php');
    $this->AddFont('EucrosiaUPC','B','eucrob.php');
    $this->AddFont('EucrosiaUPC','I','eucroi.php');
    $this->AddFont('EucrosiaUPC','IB','eucroz.php');
    $this->AddFont('FreesiaUPC','','free.php');
    $this->AddFont('FreesiaUPC','B','freeb.php');
    $this->AddFont('FreesiaUPC','I','freei.php');
    $this->AddFont('FreesiaUPC','IB','freez.php');
    $this->AddFont('IrisUPC','','iris.php');
    $this->AddFont('IrisUPC','B','irisb.php');
    $this->AddFont('IrisUPC','I','irisi.php');
    $this->AddFont('IrisUPC','IB','irisz.php');
    $this->AddFont('JasmineUPC','','jasm.php');
    $this->AddFont('JasmineUPC','B','jasmb.php');
    $this->AddFont('JasmineUPC','I','jasmi.php');
    $this->AddFont('JasmineUPC','IB','jasmz.php');
    $this->AddFont('KodchiangUPC','','kodc.php');
    $this->AddFont('KodchiangUPC','B','kodc.php');
    $this->AddFont('KodchiangUPC','I','kodci.php');
    $this->AddFont('KodchiangUPC','IB','kodcz.php');
    $this->AddFont('LilyUPC','','lily.php');
    $this->AddFont('LilyUPC','B','lilyb.php');
    $this->AddFont('LilyUPC','I','lilyi.php');
    $this->AddFont('LilyUPC','IB','lilyz.php');
  }
  
  function conv($string) {
    return iconv('UTF-8', 'TIS-620', $string);
  }
}
?>

                  <?php



   include ("../../sql_function/connect.php");
                                    extract($_GET);
                                    $tb_std_id = $flag;


                  $sql = "SELECT  tb_student.*,
                                    province.*,amphur.*,tumbon.*,tb_prefix.*,province_lo.*,
                                    cate_lo.*,lo_name.*,tb_student_category.*


                                    FROM tb_student
                                    LEFT JOIN  province ON tb_student.tb_std_province = province.Pid
                                    LEFT JOIN  amphur ON tb_student.tb_std_amphur = amphur.Aid  
                                    LEFT JOIN  tumbon ON tb_student.tb_std_tumbon = tumbon.Tid  
                                    LEFT JOIN  tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id  
                                    LEFT JOIN  province_lo ON tb_student.tb_std_seprovince = province_lo.id 
                                    LEFT JOIN  cate_lo ON tb_student.tb_std_secate = cate_lo.id 
                                    LEFT JOIN  lo_name ON tb_student.tb_std_senamelo = lo_name.id
                                    LEFT JOIN  tb_student_category ON tb_student.tb_student_category_tb_stdcate_id = tb_student_category.tb_stdcate_id

                                    
                                    
                                    WHERE tb_student.tb_std_id = '$tb_std_id'";
                            $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $stdpre_id = $row['tb_std_id'];
                            $stdpre_name = $row['tb_std_name'];
                            $stdpre_lastname = $row['tb_std_lastname'];
                            $stdpre_idcard= $row['tb_std_identification'];
                            $stdpre_year= $row['tb_std_year'];
                            $stdpre_major= $row['tb_std_major'];
                            $stdpre_sex= $row['tb_std_sex'];
                            $stdpre_gpa= $row['tb_std_gpa'];
                            $stdpre_birth= $row['tb_std_birthday'];
                            $stdpre_tall= $row['tb_std_tall'];
                            $stdpre_weight= $row['tb_std_weight'];
                            $stdpre_identification= $row['tb_std_identi'];
                            $stdpre_nationality= $row['tb_std_nationality'];
                            $stdpre_religion= $row['tb_std_religion'];
                            $stdpre_draft= $row['tb_std_draft'];
                            $stdpre_homeno= $row['tb_std_homeno'];
                            $stdpre_soi= $row['tb_std_soi'];
                            $stdpre_rode= $row['tb_std_rode'];
                            $Pname= $row['Pname'];


                            $Aname= $row['Aname'];
                            $Tname= $row['Tname'];
                            $stdpre_post= $row['tb_std_post'];
                            $stdpre_tel= $row['tb_std_tel'];
                            $stdpre_email= $row['tb_std_email'];
                            $stdpre_fathername= $row['tb_std_fathername'];
                            $stdpre_fatheroccu= $row['tb_std_fatheroccu'];
                            $stdpre_fatherocculo= $row['tb_std_fatherocculo'];
                            $stdpre_fathertel= $row['tb_std_fathertel'];
                            $stdpre_mothername= $row['tb_std_mothername'];
                            $stdpre_motheroccu= $row['tb_std_motheroccu'];
                            $stdpre_motherocculo= $row['tb_std_motherocculo'];
                            $stdpre_mothertel= $row['tb_std_mothertel'];
                            $stdpre_ability= $row['tb_std_ability'];
                            $stdpre_workings= $row['tb_std_workings'];
                            $stdpre_seprovince= $row['tb_std_seprovince'];
                            $stdpre_secate= $row['tb_std_secate'];
                            $LNname= $row['LNname'];
                            $stdpre_offerlo= $row['tb_std_offerlo'];
                            $tb_std_offerlo_d= $row['tb_std_offerlo_d'];
                            $stdpre_offerposi= $row['tb_std_offerposi'];
                            $tb_stdcate_cate= $row['tb_stdcate_cate'];
                            $stdpre_duration= $row['tb_std_duration'];
                            $stdpre_imgpro = $row['tb_std_img'];
                            $stdpre_imggpa = $row['tb_std_imggpa'];
                            $tb_std_address = $row['tb_std_address'];





                            //ตัวแปรเนื้อหา
                            $seeyc = 'อื่นๆ :';
                            $seeyc = 'อื่นๆ :';
                            $stucate = 'สมัครโครงการ :';
                            $position = 'สมัครตำแหน่ง :';
                            $seetc = 'อื่นๆ :';
                            $seplace = 'สถานที่ :';
                            $sepro = 'พื้นที่จังหวัด :';
                            $secate = 'งานประเภท :';
                            $sepro = 'พื้นที่จังหวัด';
                            $workings = 'ผลงาน/รางวัลที่เคยได้รับ :';
                            $program = 'โปรแกรมคอมพิวเตอร์ :';
                            $mtel = 'เบอร์โทรติดต่อ :';
                            $mocculo = 'สถานที่ทำงาน :';
                            $moccu = 'อาชีพ :';
                            $mname = 'ชื่อ-สกุลมารดา :';
                            $ftel = 'เบอร์โทรติดต่อ :';
                            $focculo = 'สถานที่ทำงาน :';
                            $foccu = 'อาชีพ :';
                            $fname = 'ชื่อ-สกุลบิดา :';
                            $Email = 'Email :';
                            $tel = 'โทรศัพท์ :';
                            $post = 'รหัสไปรษณย์ :';
                            $tambon = 'เขต/ตำบล :';
                            $amphur = 'อำเภอ :';
                            $province = 'จังหวัด :';
                            $rode = 'ถนน';
                            $soi = 'ตรอก/ซอย :';
                            $homeno = 'เลขที่ :';
                            $draf = 'การเกณฑ์ทหาร :';
                            $reli = 'ศาสนา :';
                            $nation = 'สัญชาติ :';
                            $iden = 'บัตรประชาชน :';
                            $birth = 'วันเกิด :';
                            $weigth = 'น้ำหนัก :';
                            $tall = 'ความสูง :';
                            $birth = 'วันเกิด :';
                            $gpa = 'เกรดเฉลี่ย :';
                            $sex = 'เพศ :';
                            $major = 'สาขา :';
                            $code = 'รหัสนักศึกษา :';
                            $year = 'ชั้นปี :';
                            $wenL = '           ';
                            $wenS = ' ';
                            $address = 'ที่อยู่ (สำหรับ นศ ต่างชาติ)';
                            $intern = '(สำหรับนักศึกษาโครงการฝึกงาน)';
                            $coop = '(สำหรับนักศึกษาโครงการสหกิจ)';
                            $coopdu = '25/8/2016 ถึง 25/12/2016';
                            mysql_close();
                             
?>

                  <?php


$pdf = new PDF();

$pdf->SetThaiFont();

$pdf->SetMargins(20, 20);

$pdf->AddPage();

$pdf->SetFont('AngsanaNew', 'B', 18);
$txt = $pdf->conv("กลุ่มงานส่งเสริมวิชาการและการวิจัย");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->SetFont('AngsanaNew', 'B', 16);
$pdf->Ln(10);
$txt = $pdf->conv("คณะวิทยาศาสตร์และเทคโนโลยีฯ มหาวิทยาลัยฟาฏอนี");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->Ln(10);
$txt = $pdf->conv("ใบสมัครโครงการสหกิจศึกษาและการฝึกงาน");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');
$pdf->Ln(10);
$txt = $pdf->conv("CO-OP JOB APPLICATION  FORM");
$pdf->Cell(0, 0, $txt, 0, 1, 'C');

$pdf->Image("../../student_pic/$stdpre_imgpro", 150, 20, 40);

$pdf->Ln(10);
$pdf->Image("../../student_pic/FIU-2015.jpg", 20, 18, 30);

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ประวัติส่วนตัวนักศึกษา");
$pdf->MultiCell(0, 7, $txt, 0, 'J');



$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 1 รายละเอียดเกี่ยวกับนักศึกษา");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ :".$wenS.$stdpre_name.$wenS.$stdpre_lastname.$wenL.$code.$wenS.$stdpre_idcard.
  $wenL.$year.$wenS.$stdpre_year.$wenL.$major.$wenS.$stdpre_major);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เพศ :".$wenS.$stdpre_sex.$wenL.$birth.$wenS.$stdpre_birth.
  $wenL.$tall.$wenS.$stdpre_tall.$wenL.$weigth.$wenS.$stdpre_weight.$wenL.$gpa.$wenS.$stdpre_gpa);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("บัตรปชระชาชน :".$wenS.$stdpre_identification.$wenL.$nation.$wenS.$stdpre_nationality.
  $wenL.$reli.$wenS.$stdpre_religion);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 2 การเกณฑ์ทหาร");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("การเกณฑ์ทหาร :".$wenS.$stdpre_draft);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 3 ที่อยู่ปัจจุบัน");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เลขที่ :".$wenS.$stdpre_homeno.$wenL.$soi.$wenS.$stdpre_soi.
  $wenL.$rode.$wenS.$stdpre_rode.$wenL.$province.$wenS.$Pname.$wenL.$amphur.$wenS.
  $Aname);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("เขต/ตำบล :".$wenS.$Tname.$wenL.$post.$wenS.$stdpre_post.
  $wenL.$tel.$wenS.$stdpre_tel);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("อีเมลล์ติดต่อ :".$wenS.$stdpre_email);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ที่อยู่ (สำหรับ นศ ต่างชาติ) :".$wenS.$tb_std_address);
$pdf->MultiCell(0, 7, $txt, 0, 'J');


$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 4 ข้อมูลเกี่ยวกับครอบครัว");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ-สกุลบิดา :".$wenS.$stdpre_fathername.$wenL.$foccu.$wenS.$stdpre_fatheroccu);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ทำงาน :".$wenS.$stdpre_fatherocculo.$wenL.$ftel.$wenS.$stdpre_fatherocculo);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ชื่อ-สกุลมารดา :".$wenS.$stdpre_mothername.$wenL.$moccu.$wenS.$stdpre_motheroccu);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ทำงาน :".$wenS.$stdpre_motherocculo.$wenL.$mtel.$wenS.$stdpre_mothertel);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 5 ความสามารถด้านคอมพิวเตอร์");
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("โปรแกรมคอมพิวเตอร์ที่ถนัดได้แก่ :".$wenS.$stdpre_ability);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ผลงาน/รางวัลที่เคยได้รับได้แก่ :".$wenS.$stdpre_workings);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ส่วนที่ 6 การเลือกสถานที่ฝึกงาน :");
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สถานที่ฝึกงาน :".$wenS.$LNname);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("อื่นๆ :".$wenS.$stdpre_offerlo.$tb_std_offerlo_d);
$pdf->MultiCell(0, 7, $txt, 0, 'J');
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("สมัครตำแหน่ง :".$wenS.$stdpre_offerposi.$wenL.$stucate.$wenS.$tb_stdcate_cate);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ระยะเวลาฝึกงานตั้งแต่วันที่ :".$wenS.$stdpre_duration.$wenS.$intern);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("ระยะเวลาสหกิจศึกษาตั้งแต่วันที่ :".$wenS.$coopdu.$wenS.$coop);
$pdf->MultiCell(0, 7, $txt, 0, 'J');

$pdf->Ln(10);
$pdf->SetFont('AngsanaNew', '', 16);
$txt = $pdf->conv("-----------------------------------------------------------------------------------------------------------------");
$pdf->MultiCell(0, 7, $txt, 0, 'C');

$pdf->SetFont('AngsanaNew', 'B', 16);
$txt = $pdf->conv("ติดต่อสอบถาม.. นางสาวรุสนาณี เบ็ญลาตีฟ เจ้าหน้าที่ส่งเสริมงานสหกิจศึกษาและฝึกงาน คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยฟาฏอนี 135/8 ม.3 ต.เขาตูม อ.ยะรัง จ.ปัตตานี 94160 โทรศัพท์/แฟกซ์. 073-418-584 มือถือ. 0828237925");
$pdf->MultiCell(0, 7, $txt, 0, 'J');








$pdf->Output("../department_Info/MyPDF/$stdpre_id.pdf","F");

?>

                  <a class="pull-right" href="../department_Info/MyPDF/<?php echo $stdpre_id ?>.pdf" target="_blank"><img src="../../student_pic/printer1.png"
                      width="80" height="80"></a>



            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


</body>


<!--
    <div class="panel panel-default">
  
  <div class="panel-footer">Copyright © 2014 Design bootstrap sb admin 3 CSS Modify by Chid Clever & Su Haimee</div>
</div>
-->

</html>