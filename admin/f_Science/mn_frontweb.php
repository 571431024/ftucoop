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

   
    <script type="text/javascript" src="../admin/src/bootstrap-filestyle.js"></script>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
                    <li>
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
                        <a href="../admin/supervision_schedule.php"><i class="glyphicon glyphicon-list-alt"></i> จัดการตารางนิเทศ</a>
                    </li>
                     <li>
                        <a href="../admin/student_come.php"><i class="glyphicon glyphicon-calendar"></i> บันทึกการเข้าฝึกประจำวัน</a>
                    </li>
                   
                   
                    <li>
                        <a href="../admin/result_eva.php"><i class="glyphicon glyphicon-ok"></i> ผลการประเมิณนักศึกษา</a>
                    </li>
                     <li class="active">
                        <a href="../admin/mn_frontweb.php"><i class="glyphicon glyphicon-globe"></i> จัดการหน้าเว็บ</a>
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
                            จัดการ <small>ข้อมูลหน้าเว็บไซต์</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-globe"></i> ข้อมูลหน้าเว็บไซต์ ส่วนข่าวกิจกรรมนักศึกษา
                            </li>

                        </ol>
                           
                    </div>
                </div>
                <!-- /.row -->

               <!-- add new advisor button -->
<?php
include ("../admin/add_student_activity.php");
?>
                <div class="row">
                	<div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_student_activity"><i class="glyphicon glyphicon-plus"></i> เพิ่มสถานที่</button>
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
                                        <th><center>ลำดับ</center></th>
                                        <th><center>ชื่อหัวข้อ</center></th>
                                        <th><center>ที่ตั้ง</center></th>
                                        <th><center>เบอร์โทร</center></th>
                                        <th><center>อีเมลล์</center></th>
                                        <th><center>ดูข้อมูล</center></th>
                                        <th><center>แก้ไข</center></th>
                                        <th><center>ลบ</center></th>
                                        
                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ("../sql_function/connect.php");
                                    $sql = "SELECT * FROM tb_activity_news";
                                    
                                    
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

                                                $sql .=" ORDER BY tb_act_id ASC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                    $count++;
                                                ?>
                                    
                                    <tr>
                                        <td align="center"><?php echo $count ?></td>
                                        <td><?php echo $row['tb_act_title']; ?></td>
                                        <td><?php echo $row['tb_act_description']; ?> </td>
                                        <td align="center"><?php echo $row['tb_act_date']; ?></td>
                                        <td align="center"><img src="../pic_frontweb/<?php  echo $row['tb_act_img']; ?>" width=150 height=150 ></td>
                                       
                                       <td>
<center><a href="../admin/location_detail.php?flag= <?=$row['tb_lo_id']; ?> "> <button class="btn btn-primary btn-xs">  
    <i class="glyphicon glyphicon-eye-open"> รายละเอียด</i></button></a> </center></td>
                                       
                                        <td><center>
                                         <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editlocation<?php echo $i; ?>">
                                         <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center>
                                           <!-- Modal -->
                                                    <div class="modal fade" id="editlocation<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลสถานที่</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_location.php">
                                                            <input type="hidden" name="tb_lo_id" value="<?php echo $row['tb_lo_id']; ?>">
                                                                

                                                              <div class="form-group">
              <label class="control-label col-md-2">ชื่อสถานที่</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_lo_name" name="tb_lo_name" value="<?php echo $row['tb_lo_name']; ?>">
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">ที่ตั้ง</label>
                <div class="col-md-8">
                 <textarea type="text" rows="4" class="form-control" id= "tb_lo_address" name="tb_lo_address"> <?php echo $row['tb_lo_address']; ?> </textarea>
                </div>
                  </div>
           
            
            
            
            <div class="form-group">
               
                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_lo_tel" name="tb_lo_tel" value="<?php echo $row['tb_lo_tel']; ?>">
                </div>
                 <label class="control-label col-md-2">Email</label>
                <div class="col-md-3">
                 <input type="email" class="form-control" id="tb_lo_email" name="tb_lo_email" value="<?php echo $row['tb_lo_email']; ?>">
                  
                </div>
             </div>
             
               <div class="form-group">
    <label class="control-label col-md-2">แผนที่รูปภาพ</label>
    <div class="col-md-4">
        <img src="../picture/<?php  echo $row['tb_lo_img']; ?>" width=150 height=150 >
         <input  type="file" class="form-control" name="fileUpload" id="fileUpload"> <br>
         <input type="hidden" class="form-control"  name="hdnOldFile" value="<?php echo $row['tb_lo_img'];?>">   

     
    </div>
  </div>

        </div><!-- /.row-->
     
                                                                
                                                                
                                                     
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success" ><i class="glyphicon glyphicon-ok"></i> แก้ไขข้อมูล</button>
                                                          </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>                                                
                                                </td>
<td align="center">  <a href="../sql_function/sql_delete_location.php?flag= <?=$row['tb_lo_id']; ?>" 
    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')"> <button class="btn btn-danger btn-xs">  
    <i class="glyphicon glyphicon-trash"></i></button></a> </td>
 

 


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






           <!--     next table -->
            <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-globe"></i> ข้อมูลหน้าเว็บไซต์ ส่วนผลงานที่ผ่านมาของนักศึกษา
                            </li>
                        </ol>
 <?php
include ("../admin/add_location.php");
?>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_location"><i class="glyphicon glyphicon-plus"></i> เพิ่มสถานที่</button>
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                            <div class="form-group">
                         
                                <input type="text" class="form-control" id="search" name="search" placeholder="ระบรหัสบุคลากร เพื่อค้นหา...">
                                <button class="btn btn-primary" type="submit"> <i class="glyphicon glyphicon-search"></i> ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div><!--/.row -->
                <br />

 <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>ลำดับ</center></th>
                                        <th><center>ชื่อหัวข้อ</center></th>
                                        <th><center>ที่ตั้ง</center></th>
                                        <th><center>เบอร์โทร</center></th>
                                        <th><center>อีเมลล์</center></th>
                                        <th><center>ดูข้อมูล</center></th>
                                        <th><center>แก้ไข</center></th>
                                        <th><center>ลบ</center></th>
                                        
                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ("../sql_function/connect.php");
                                    $sqln = "SELECT * FROM tb_student";
                                    
                                    
                                     $rsn = mysql_query($sqln) or die(mysql_error());
                                                $Num_Rowsn = mysql_num_rows($rsn);

                                                $Per_Pagen = 2;   // Per Page
                                                if(!isset($_GET['Pagen'])){
                                                    $_GET['Pagen'] = 1;
                                                }
                                                $Pagen = $_GET['Pagen'];
                                                if(!$_GET['Pagen']){
                                                    $Pagen=1;
                                                }

                                                $Prev_Pagen = $Pagen-1;
                                                $Next_Pagen = $Pagen+1;

                                                $Page_Startn = (($Per_Pagen*$Pagen)-$Per_Pagen);
                                                if($Num_Rowsn<=$Per_Pagen){
                                                    $Num_Pagesn =1;
                                                }else if(($Num_Rowsn % $Per_Pagen)==0){
                                                    $Num_Pagesn =($Num_Rowsn/$Per_Pagen) ;
                                                }else{
                                                    $Num_Pagesn =($Num_Rowsn/$Per_Pagen)+1;
                                                    $Num_Pagesn = (int)$Num_Pagesn;
                                                }
                                                $offsetn=($Pagen-1)*$Per_Pagen; 
                                                $countn=$offsetn; 

                                                $sqln .=" ORDER BY tb_std_id ASC LIMIT $Page_Startn , $Per_Pagen";
                                                $rsn  = mysql_query($sqln);
                                                $n = 1;
                                                while($rown = mysql_fetch_array($rsn)){
                                                    $countn++;
                                                ?>
                                    
                                    <tr>
                                        <td align="center"><?php echo $countn ?></td>
                                        <td><?php echo $rown['tb_std_identification']; ?></td>
                                        <td><?php echo $rown['tb_std_name']; ?> </td>
                                        <td align="center"><?php echo $rown['tb_std_sex']; ?></td>
                                        <td align="center"><?php echo $rown['tb_std_major']; ?></td>
                                       
                                       <td>
<center><a href="../admin/location_detail.php?flag= <?=$rown['tb_std_id']; ?> "> <button class="btn btn-primary btn-xs">  
    <i class="glyphicon glyphicon-eye-open"> รายละเอียด</i></button></a> </center></td>
                                       
                                        <td><center>
                                         <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#editlocation<?php echo $n; ?>">
                                         <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center>
                                           <!-- Modal -->
                                                    <div class="modal fade" id="editlocation<?php echo $n; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลสถานที่</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="../sql_function/sql_edit_location.php">
                                                            <input type="hidden" name="tb_lo_id" value="<?php echo $row['tb_lo_id']; ?>">
                                                                

                                                              <div class="form-group">
              <label class="control-label col-md-2">ชื่อสถานที่</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_lo_name" name="tb_lo_name" value="<?php echo $row['tb_lo_name']; ?>">
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">ที่ตั้ง</label>
                <div class="col-md-8">
                 <textarea type="text" rows="4" class="form-control" id= "tb_lo_address" name="tb_lo_address"> <?php echo $row['tb_lo_address']; ?> </textarea>
                </div>
                  </div>
           
            
            
            
            <div class="form-group">
               
                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_lo_tel" name="tb_lo_tel" value="<?php echo $row['tb_lo_tel']; ?>">
                </div>
                 <label class="control-label col-md-2">Email</label>
                <div class="col-md-3">
                 <input type="email" class="form-control" id="tb_lo_email" name="tb_lo_email" value="<?php echo $row['tb_lo_email']; ?>">
                  
                </div>
             </div>
             
               <div class="form-group">
    <label class="control-label col-md-2">แผนที่รูปภาพ</label>
    <div class="col-md-4">
        <img src="../picture/<?php  echo $row['tb_lo_img']; ?>" width=150 height=150 >
         <input  type="file" class="form-control" name="fileUpload" id="fileUpload"> <br>
         <input type="hidden" class="form-control"  name="hdnOldFile" value="<?php echo $row['tb_lo_img'];?>">   

     
    </div>
  </div>

        </div><!-- /.row-->
     
                                                                
                                                                
                                                     
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
                                                            <button type="submit" class="btn btn-success" ><i class="glyphicon glyphicon-ok"></i> แก้ไขข้อมูล</button>
                                                          </div>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>                                                
                                                </td>
<td align="center">  <a href="../sql_function/sql_delete_location.php?flag= <?=$row['tb_lo_id']; ?>" 
    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')"> <button class="btn btn-danger btn-xs">  
    <i class="glyphicon glyphicon-trash"></i></button></a> </td>
 

 


                                    </tr>
                                    <?php
                                                $n++;
                                                }
                                                ?> 
                             
                                </tbody>
                            </table>
                              <div align="center">
                                                <nav>
                                                    <ul class="pagination">
                                                        <li>
                                                        <?php
                                                        if($Prev_Pagen){
                                                            echo " <a href='$_SERVER[SCRIPT_NAME]?Pagen=$Prev_Pagen' aria-label=Previous'><span aria-hidden='true'>&laquo;</span> ก่อนหน้า</a></li> ";
                                                        }

                                                        for($n=1; $n<=$Num_Pagesn; $n++){
                                                            if($n != $Pagen){
                                                                echo "<li><a href='$_SERVER[SCRIPT_NAME]?Pagen=$n'>$n</a></li>";
                                                            }else{
                                                                echo "<li class='active'><a>$n<span class='sr-only'>$n</span></a></li>";
                                                            }
                                                        }
                                                        if($Pagen!=$Num_Pagesn){
                                                            echo " <li><a href ='$_SERVER[SCRIPT_NAME]?Pagen=$Next_Pagen'aria-label='Next'>ถัดไป <span aria-hidden='true'>&raquo;</span></a></li> ";
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
    <script type="text/javascript" src="../admin/src/bootstrap-filestyle.js"></script>
  

</body>
<script type="text/javascript">
            $('#input01').filestyle()
            $('#input001').filestyle({
                'placeholder' : 'Placeholder test'
            });
            $('#input02').filestyle({
                buttonText : 'My filestyle'
            });

            $('#input03').filestyle({
                input : false,
                buttonName : 'btn-primary'
            });

            $('#input04').filestyle({
                icon : false
            });

            $('#input05').filestyle({
                buttonName : 'btn-warning'
            });

            $('#input050').filestyle({
                buttonName : 'btn-info'
            });

            $('#input07').filestyle({
                iconName : 'glyphicon glyphicon-plus',
                buttonText : 'Add'
            });

            $('#input08').filestyle({
                buttonText : ' File',
                buttonName : 'btn-success'
            });

            $('#clear').click(function() {
                $('#input08').filestyle('clear');
            });

            $('#input09').filestyle({
                buttonText : 'File',
                buttonName : 'btn-primary'
            });

            $('#toggleInput').click(function() {
                var fs = $('#input09');
                if (fs.filestyle('input'))
                    fs.filestyle('input', false);
                else
                    fs.filestyle('input', true);
            });

            $('#input10').filestyle({
                buttonText : 'File',
                buttonName : 'btn-primary'
            });

            $('#toggleIcon').click(function() {
                var fs = $('#input10');
                if (fs.filestyle('icon'))
                    fs.filestyle('icon', false);
                else
                    fs.filestyle('icon', true);
            });

            $('#input11').filestyle({
                buttonText : 'Multiple',
                buttonName : 'btn-danger'
            });

            $('#input12').filestyle({
                buttonText : ''
            });

            $('#input13').filestyle({
                disabled : true
            });

            $('#input14').filestyle({
                buttonBefore : true
            });
            $('#input15').filestyle({
                size : 'lg'
            });
            $('#input15').filestyle({
                input : false,
                badge: false
            });

            // nultiple initialize
            $('.test').filestyle({
                buttonName : 'btn-primary'
            });
        </script>

</html>
