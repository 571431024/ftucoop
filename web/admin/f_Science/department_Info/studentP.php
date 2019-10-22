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
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="../admin/advisor.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลอาจารย์ที่ปรึกษา</a>
                    </li>
                    <li>
                        <a href="../admin/student.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลนักศึกษา</a>
                    </li>
                    <li class="active">
                        <a href="../admin/mentor.php"><i class="glyphicon glyphicon-user"></i> จัดการข้อมูลพี่เลี้ยง</a>
                    </li>
                    <li>
                        <a href="../admin/location.php"><i class="glyphicon glyphicon-flag"></i> จัดการข้อมูลสถานที่</a>
                    </li>
                    <li>
                        <a href="../admin/document.php"><i class="glyphicon glyphicon-file"></i> จัดการเอกสาร</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> จัดการตาางนิเทศ</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-globe"></i> จัดการหน้าเว็บ</a>
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
                            จัดการ <small>ข้อมูลพี่เลี้ยง</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> พี่เลี้ยง
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <!-- add new advisor button -->
<?php
include ("../admin/add_mentor.php");
?>
                <div class="row">
                	<div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_mentor"><i class="glyphicon glyphicon-plus"></i> เพิ่มพี่เลี้ยง</button>
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
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมลล์</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>สถานที่ฝึกงาน</th>
                                        <th>ดูข้อมูล</th>
                                        <th>แก้ไข</th>
                                        <th>ลบ</th>
                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ("../sql_function/connect.php");
                                    $sql = "SELECT tb_student.tb_std_id, 
                                    tb_student.tb_std_identification, tb_student.tb_std_password, 
                                    tb_student.tb_std_name, tb_student.tb_std_lastname, 
                                    tb_student.tb_std_sex, tb_student.tb_std_major,
                                    tb_student.tb_std_year, tb_student.tb_std_birthday, 
                                    tb_student.tb_std_email, tb_student.tb_std_tel, 
                                    tb_student.tb_std_address,

                                    tb_student.tb_prefix_tb_prefix_id,
                                    tb_student.tb_student_category_tb_stdcate_id,
                                    tb_student.tb_localtion_tb_lo_id,

                                    tb_prefix.tb_prefix_name,
                                    tb_student_category.tb_stdcate_cate,
                                    tb_localtion.tb_lo_name


                                    FROM tb_student 
                                    INNER JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    INNER JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id   = tb_student_category.tb_stdcate_id  
                                    INNER JOIN tb_localtion ON tb_student.tb_localtion_tb_lo_id = tb_localtion.tb_lo_id";

                                    
                                    
                                     $rs = mysql_query($sql) or die(mysql_error());
                                                $Num_Rows = mysql_num_rows($result);

                                                $Per_Page = 3;   // Per Page
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

                                                $sql .=" ORDER BY tb_std_id ASC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                ?>
									
                                    <tr>
                                        <td><?php echo $row['tb_std_identification']; ?></td>
                                        <td><?php echo $row['tb_prefix_name']; ?> <?php echo $row['tb_std_name']; ?></td>
                                        <td><?php echo $row['tb_std_lastname']; ?></td>
                                        <td><?php echo $row['tb_std_email']; ?></td>
                                        <td><?php echo $row['tb_std_tel']; ?></td>
                                        <td><?php echo $row['tb_lo_name']; ?></td>
                                        <td>
                                         <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editmentor<?php echo $i; ?>">
                                         <i class="glyphicon glyphicon-edit"></i> แก้ไข</button>
                                           <!-- Modal -->
                                                    <div class="modal fade" id="editmentor<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลพี่เลี้ยง</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="../sql_function/sql_edit_mentor.php">
                                                            <input type="hidden" name="tb_mentor_id" value="<?php echo $row['tb_mentor_id']; ?>">
                                                                <div class="form-group">
              <label class="control-label col-md-2">ไอดีพี่ลี้ยง</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_mentor_id_log" name="tb_mentor_id_log" value="<?php echo $row['tb_mentor_id_log']; ?>">
              </div>
            </div>
                 <div class="form-group">
             <label class="control-label col-md-2">รหัสผ่าน</label>
              <div class="col-md-3">  
                <input type="password" class="form-control" id="tb_mentor_password" name="tb_mentor_password" value="<?php echo $row['tb_mentor_password']; ?>">
              </div>
            </div>
           
             <div class="form-group">
             <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                                                            <div class="col-md-4">
                                                                       <select class="form-control" id="tb_prefix_id" name="tb_prefix_id">
                                                                            <option value="no">-เลือกคำนำหน้าชื่อ-</option>
                                                                            <?php

                                                                          
                                                                            $sqlm = "SELECT * FROM tb_prefix";
                                                                            $rsm = mysql_query($sqlm) or die(mysql_error());

                                                                            while($rowm = mysql_fetch_array($rsm)){
                                                                            ?>
                                                                            <option value="<?php echo $rowm['tb_prefix_id']; ?>" <?php if($rowm['tb_prefix_id'] == $row['tb_prefix_tb_prefix_id']){ echo "selected"; } ?>><?php echo $rowm['tb_prefix_name'] ?></option>
                                                                            <?php
                                                                            }
                                                                            //mysql_close();
                                                                            ?>
                                                                        </select>
                                                                       
                                                                       
                                                                    </div>
                                                                         </div>

                
          
            <div class="form-group">
              <label class="control-label col-md-2">ชื่อ</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_mentor_name" name="tb_mentor_name" value="<?php echo $row['tb_mentor_name']; ?>">
              </div>
               <label class="control-label col-md-2">นามสกุล</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_mentor_lastname" name="tb_mentor_lastname" value="<?php echo $row['tb_mentor_lastname']; ?>">
                </div>
            </div>
            
            
            
            <div class="form-group">
                <label class="control-label col-md-2">Email</label>
                <div class="col-md-3">
                 <input type="email" class="form-control" id="tb_mentor_email" name="tb_mentor_email" value="<?php echo $row['tb_mentor_email']; ?>">
                  
                </div>
                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_mentor_tel" name="tb_mentor_tel" value="<?php echo $row['tb_mentor_tel']; ?>">
                </div>
             </div>
             
               <div class="form-group">
    <label class="control-label col-md-2">สถานที่ประกอบการ</label>
    <div class="col-md-7">
      <input class="form-control" type="text" id="tb_mentor_workplace" name="tb_mentor_workplace" value="<?php echo $row['tb_mentor_workplace']; ?>">
    </div>
  </div>
        </div><!-- /.row-->
     
                                                                
                                                                
                                                     
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> แก้ไขข้อมูล</button>
                                                          </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>                                                
                                                </td>
                                        
                                        
                                 
                                       <td><center><a href="../sql_function/sql_delete_mentor.php?flag= <?=$row['tb_mentor_id']; ?> "> 
                                        <i class="glyphicon glyphicon-remove" onClick="return confirm('Are you sure to delete?') </i></a><center>;
"></a><center></td>
                                        
                                    </tr>
                                    <?php
                                                $i++;
                                                }
                                                ?> 
                             
                                </tbody>
                            </table>
                              <div align="center">
                                                <nav>
                                                    <ul class="pagination">
                                                        <li>
                                                        <?php
                                                        if($Prev_Page){
                                                            echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page' aria-label=Previous'><span aria-hidden='true'>&laquo;</span> ก่อนหน้า</a></li> ";
                                                        }

                                                        for($i=1; $i<=$Num_Pages; $i++){
                                                            if($i != $Page){
                                                                echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a></li>";
                                                            }else{
                                                                echo "<li class='active'><a>$i<span class='sr-only'>$i</span></a></li>";
                                                            }
                                                        }
                                                        if($Page!=$Num_Pages){
                                                            echo " <li><a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'aria-label='Next'>ถัดไป <span aria-hidden='true'>&raquo;</span></a></li> ";
                                                        }
                                                        ?>
                                                        </li>
                                                    </ul>
                                                </nav>
                                        </div>
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
