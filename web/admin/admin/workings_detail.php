<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

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
        <ul class="nav navbar-top-links navbar-right">
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
          </li>
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
      <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
          <em class="fa fa-bullhorn">&nbsp;</em> จักการข้อมูลหน้าเว็บ <span data-toggle="collapse" href="#sub-item-1"
            class="icon pull-right"><em class="fa fa-plus"></em></span>
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
      <li><a href="student_come.php"><em class="fa fa-calendar-check-o">&nbsp;</em> บันทึกการเข้าฝึกประจำวัน</a></li>
      <li><a href="result_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ผลการประเมิณนักศึกษา</a></li>


      <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
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
    <br>

    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->




    <div class="container marketing">



      <div class="panel-group">
        <div class="panel panel-default">

          <ol class="breadcrumb">
            <li class="active">
              <i class="fa fa-lightbulb-o fa-2x"></i> <strong>รายละเอียด</strong>
            </li>
          </ol>


          <div class="panel-body">

            <div class="row">
              <div class="col-lg-12">

                <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                  <div class="form-group">


                  </div>
                </form>
              </div>
            </div>
            <!--/.row -->


            <!-- Panel for table -->


            <?php

                                    
                                    if(empty($submit))
                                    {
                                        include ("../sql_function/connect.php");
                                        extract($_GET);
                                        $tb_work_id = $flag;
                                        $query = "SELECT * FROM tb_workings
                                        WHERE  tb_work_id='$tb_work_id' ";



                                        $result = mysql_query($query);
                                        while($result_row = mysql_fetch_row($result))
                                                                      

                                        {
                                        $tb_work_id = $result_row[0];
                                        $tb_work_title = $result_row[1];
                                        $tb_work_description = $result_row[2];
                                        $tb_work_date = $result_row[3];
                                        $tb_work_by= $result_row[4];
                                        $tb_work_img = $result_row[5];
                                       
                                  
                                        
                                        }
                                    }
                                    else
                                    {
                                        include ("connect.php");
                                        $tb_work_id=$_POST['tb_work_id'];
                                        $tb_work_title=$_POST['tb_work_title'];
                                        $tb_work_description=$_POST['tb_work_description'];
                                        $tb_work_date=$_POST['tb_work_date'];
                                        $tb_work_by=$_POST['tb_work_by'];
                                        $tb_work_img=$_POST['tb_work_img'];
                                       

                                       
                                 

                                    }
                                    ?>



            <table class="table table-hover">

              <tbody>
                <tr>
                  <th align="right" scope="row">&nbsp;</th>
                  <th>วันที่อัพโหลด</th>
                  <td>
                    <?php echo $tb_work_date ?>
                  </td>
                </tr>

                <tr>
                  <th align="right" scope="row">&nbsp;</th>
                  <th>หัวข้อ</th>
                  <td>
                    <?php echo $tb_work_title ?>
                  </td>
                </tr>

                <tr>
                  <th align="right" scope="row">&nbsp; </th>
                  <th width="20%">คำอธิบาย <br><br><br><br><br><br><br><br> </th>
                  <td>
                    <?php echo $tb_work_description ?>
                  </td>
                </tr>
                <tr>
                  <th align="right" scope="row">&nbsp;</th>
                  <th>ผลงานโดย</th>
                  <td>
                    <?php echo $tb_work_by ?>
                  </td>
                </tr>


                <tr>
                  <th align="right" scope="row">&nbsp;</th>
                  <th>รูป</th>
                  <td> <img src="../img_frontweb/<?php  echo $tb_work_img ?>" width=150 height=150></td>
                </tr>

                </tr>


              </tbody>

            </table>
            

          </div>
        </div>
        <ol class="breadcrumb">
              <li class="active">
                <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
              </li>
            </ol>
      </div>
    </div><!-- /.container -->
    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>