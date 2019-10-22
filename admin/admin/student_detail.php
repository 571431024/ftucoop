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
                <a class="navbar-brand" href="index.php">ระบบสหกิจศึกษาและการฝึกงานคณะวิทยาศาตร์และเทคโนโลยี
</a>
            </div>
            
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['stt']; ?> <?php echo $_SESSION['name']; ?>  <b class="caret"></b></a>
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
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="../admin/advisor.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลอาจารย์ที่ปรึกษา</a>
                    </li>
                    <li class="active">
                        <a href="../admin/student.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลนักศึกษา</a>
                    </li>
                    <li>
                        <a href="../admin/mentor.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลพี่เลี้ยง</a>
                    </li>
                    <li >
                        <a href="../admin/location.php"><i class="glyphicon glyphicon-flag"></i> จัดการข้อมูลสถานที่</a>
                    </li>
                    <li>
                        <a href="../admin/document.php"><i class="glyphicon glyphicon-file"></i> จัดการเอกสาร</a>
                    </li>
                    <li>
                        <a href="../admin/supervision_schedule.php"><i class="glyphicon glyphicon-list-alt"></i> จัดการตาางนิเทศ</a>
                    </li>
                     <li>
                        <a href="../admin/student_come.php"><i class="glyphicon glyphicon-calendar"></i> บันทึกการเข้าฝึกประจำวัน</a>
                    </li>
                   
                    
                    <li>
                        <a href="../admin/result_eva.php"><i class="glyphicon glyphicon-ok"></i> ผลการประเมิณนักศึกษา</a>
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
                            รายละเอียด <small>ข้อมูลนักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-flag"></i> รายละเอียดข้อมูลนักศึกษา
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <!-- add new advisor button -->
<?php
include ("../admin/add_location.php");
?>
                <div class="row">
                	<div class="col-lg-12">
                        
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                            <div class="form-group">
                         
                               
                            </div>
                        </form>
                    </div>
                </div><!--/.row -->
               
                
                <!-- Panel for table -->
            

                                    <?php

                                        include ("../sql_function/connect.php");
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
                                    WHERE tb_student.tb_std_id ='$tb_std_id'";

                            $result = mysql_query($sql) or die ("ข้อมูลผิดพลาด".mysql_error());
                            $row = mysql_fetch_array($result);
                            $studentimg =  $row['tb_std_img'];
                            $status =  $row['tb_std_status_id'];
                            $advisor = $row['tb_advisor_tb_ads_id'];
                            $advisorname = $row['tb_ads_name'];
                            $advisorlastname = $row['tb_ads_lastname'];
                            $mentor_id = $row['tb_mentor_tb_mentor_id'];


                            $mentername = $row['tb_mentor_name'];
                            $menterlastname = $row['tb_mentor_lastname'];
                            $wen = "    ";

                           
                            ?>
                                        
                          

                           <table class ="table table-hover" >
                           
                           <tbody>
                             <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                <th>&nbsp;</th>
                                 <td><img src="../student_pic/<?php  echo $studentimg ?>" width=150 height=150 ></td>
                              </tr>
                              <tr>
                                 <th align="right"  scope="row">&nbsp;</th>
                                 <th>รหัสนักศึกษา</th>
                                 <td><?php echo $row['tb_std_identification']; ?> </td>
                              
                              </tr>

                             
                              
                              <tr>

                               
                               <th align="right"  scope="row">&nbsp;</th>
                                 <th>ชื่อ  </th>
                                 <td><?php echo $row['tb_prefix_name']; ?><?php echo $row['tb_std_name']; ?>  </td>
                              </tr>
                              
                              <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>นามสกุล</th>
                                 <td><?php echo $row['tb_std_lastname']; ?> </td>
                              </tr>

                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>เพศ</th>
                                 <td> <?php echo $row['tb_std_sex']; ?></td>
                              </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>สาขา</th>
                                 <td> <?php echo $row['tb_std_major']; ?></td>
                              </tr>
                               </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>ชั้นปี</th>
                                 <td> <?php echo $row['tb_std_year']; ?></td>
                              </tr>
                               </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>วันเดือนปีเกิด</th>
                                 <td> <?php echo $row['tb_std_birthday']; ?></td>
                              </tr>
                               </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>อีเมลล์</th>
                                 <td> <?php echo $row['tb_std_email']; ?></td>
                              </tr>
                               </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>เบอร์โทรติดต่อ</th>
                                 <td> <?php echo $row['tb_std_tel']; ?></td>
                              </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>ที่อยู่อาศัย</th>
                                 <td><?php echo $row['tb_std_address']; ?></td>
                              </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>ประเภทนักศึกษา</th>
                                 <td> <?php echo $row['tb_stdcate_cate']; ?> </td>
                              </tr>
                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>พี่เลี้ยง</th>
                                 <td> <?php if($mentor_id == '0' || '')  
            {
              echo '<button class="btn btn-danger btn-xs">  
              <i class="glyphicon glyphicon-remove-circle"> ยังไม่ได้เพิ่มข้อมูลพี่เลี้ยง</i></button>';
            }else

               echo $mentername.$wen.$menterlastname
            


             ?>   </td>
                              </tr>
                              <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>อาจารย์ที่ปรึกษา</th>
                                 <td><?php if($advisor == '0' || '')  
            {
              echo '<button class="btn btn-danger btn-xs">  
              <i class="glyphicon glyphicon-remove-circle"> ยังไม่ได้เพิ่มข้อมูลอาจารย์ที่ปรึกษา</i></button>';
            }else

               echo $advisorname.$wen.$advisorlastname
            


             ?>   </td>
                              </tr>

                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>สถานที่ปฏิบัติงาน</th>
                                 <td> <?php echo $row['LNname'];?> <?php echo $row['PLname'];?> <?php echo $row['tb_std_offerlo'];?> <?php echo $row['tb_std_offerlo_d'];?> </td>
                              </tr>
                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>สถานะนักศึกษา</th>
                                 <td><?php if($status == '1')  
            {
              echo '<button class="btn btn-success btn-xs">  
                                                    <i class="glyphicon glyphicon-ok-circle"> อนุมัติแล้ว(Approval) </i></button>';
            }else if($status == '2') {
              echo '   <button class="btn btn-warning btn-xs">  
                                                    <i class="glyphicon glyphicon-time"> รอการอนุมัติ(Processing)  </i></button>';
            }else

              echo '  <button class="btn btn-danger btn-xs">  
                                                    <i class="glyphicon glyphicon-remove-circle"> ไม่อนุมัติ(Disapprove)  </i></button>';
            


             ?>  </td>
                              </tr>

                             
                           </tbody>
                           
                        </table>
                         <ol class="breadcrumb">
                            <li class="active">
                               <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
                            </li>
                        </ol>
                                    
                                   
                             
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
    <script src="../admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../admin/js/plugins/morris/raphael.min.js"></script>
    <script src="../admin/js/plugins/morris/morris.min.js"></script>
    <script src="../admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
