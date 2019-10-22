<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_DEPRECATED);  ?>
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");

}

?>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Co-insystem</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css_file/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript" src="src/bootstrap-filestyle.js"></script>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    </head>
    <body>
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="navbar-brand" href="control_web.php"><i class="fa fa-globe"></i> ระบบสหกิจศึกษาและการฝึกงานคณะวิทยาศาตร์และเทคโนโลยี</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <li class="active">
                            <a href="control_web.php"><i class="fa fa-globe"></i> จัดการเนื้อหาหน้าเว็บ</a>
                        </li>
                        

              <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> ออกจากระบบ</a>
                        </li>
                   
                        
                       
                      
              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->
<style>
body {
    background-color: #FAFAFA;


}
</style>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img_frontweb/a2.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>
          <p></p>
          <p><a class="btn btn-large btn-primary" href="form.php" target="_blank">สมัครโครงการสหกิจศึกษาและโครงการฝึกงานที่นี่</a></p>
          
     
        </div>
      </div>
    </div>
    <div class="item">
      <img src="img_frontweb/a1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>
          <p></p>
          <p><a class="btn btn-large btn-primary" href="form.php" target="_blank">สมัครโครงการสหกิจศึกษาและโครงการฝึกงานที่นี่</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="img_frontweb/a3.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1></h1>
          <p></p>
          <p><a class="btn btn-large btn-primary" href="form.php" target="_blank">สมัครโครงการสหกิจศึกษาและโครงการฝึกงานที่นี่</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->
  

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->




<div class="container marketing"> 

  <ol class="breadcrumb">
                            <li class="active">
                               <i class="fa fa-globe fa-2x"></i> ข้อมูลหน้าเว็บไซต์ ส่วนข่าวกิจกรรมนักศึกษา
                            </li>
  </ol>


    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-refresh"></i> อัพเดตข้อมูล ส่วนข่าวกิจกรรมนักศึกษา</div>
      <div class="panel-body">
        


  

   <?php
include ("add_student_activity.php");
?>
                <div class="row">
                  <div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_student_activity"><i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูล</button>
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                            <div class="form-group">
                         
                                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="ระบุชื่อหัวข้อ เพื่อค้นหา...">
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
                                        <th><center>หัวข้อ</center></th>
                                        <th><center>คำอธิบาย</center></th>
                                        <th><center>วันที่อัพโหลด</center></th>
                                        
                                        <th><center>ดูข้อมูล</center></th>
                                        <th><center>แก้ไข</center></th>
                                        <th><center>ลบ</center></th>
                                        
                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ("connect.php");
                                    isset($_POST['keyword']) ? $keyword = $_POST['keyword'] : $keyword = '';
                                    $sql = "SELECT * FROM tb_activity_news
                                    WHERE (   tb_act_title LIKE '%".$keyword."%') ";
                                    
                                    
                                     $rs = mysql_query($sql) or die(mysql_error());
                                                $Num_Rows = mysql_num_rows($rs);

                                                $Per_Page = 10;   // Per Page
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

                                                $sql .=" ORDER BY tb_act_id DESC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                    $count++;
                                                ?>
                                    
                                    <tr>
                                        <td align="center"><?php echo $count ?></td>
                                        <td><?php echo $row['tb_act_title']; ?></td>
                                        <td><div style="width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $row['tb_act_description']; ?> </div></td>
                                        <td align="center"><?php echo $row['tb_act_date']; ?></td>
                                       
                                       
                                       <td>
<center><a href="student_activity_detail.php?flag= <?=$row['tb_act_id']; ?> "> <button class="btn btn-primary btn-xs">  
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
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลข่าวกิจกรรมนักศึกษา</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="sql_edit_student_act.php">
                                                            <input type="hidden" name="tb_act_id" value="<?php echo $row['tb_act_id']; ?>">
                                                                

                                                              <div class="form-group">
              <label class="control-label col-md-2">หัวข้อ</label>
              <div class="col-md-6">  
                <input type="text" class="form-control" id="tb_act_title" name="tb_act_title" value="<?php echo $row['tb_act_title']; ?>">
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">คำอธิบาย</label>
                <div class="col-md-8">
                 <textarea type="text" rows="8" class="form-control" id= "tb_act_description" name="tb_act_description"> <?php echo $row['tb_act_description']; ?> </textarea>
                </div>
                  </div>
           
            
            
            
           
             
               <div class="form-group">
    <label class="control-label col-md-2">รูป</label>
    <div class="col-md-4">
        <img src="img_frontweb/<?php  echo $row['tb_act_img']; ?>" width=150 height=150 >
         <input  type="file" id="input101" class="form-control" name="tb_act_img" id="tb_act_img"> <br>
         <input type="hidden" class="form-control"  name="hdnOldFile" value="<?php echo $row['tb_act_img'];?>">   

     
    </div>
  </div>

   <div class="form-group">
    <label class="control-label col-md-2">ไฟล์แนบ: </label>
    <div class="col-md-4">
       
         <?php echo $row['tb_act_file']; ?> <input  type="file" id="input10" class="form-control" name="tb_act_file" id="tb_act_file" value="<?php echo $row['tb_act_file']; ?>"> <br>
         <input type="hidden" class="form-control"  name="hdnOldFilen" value="<?php echo $row['tb_act_file'];?>">   

     
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
<td align="center">  <a href="sql_delete_student_act.php?flag= <?=$row['tb_act_id']; ?>" 
    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')"> <button class="btn btn-danger btn-xs">  
    <i class="glyphicon glyphicon-trash"></i></button></a> </td>
 

 


                                    </tr>
                                    <?php
                                                $i++;
                                                }
                                                ?> 
                             
                                </tbody>
                            </table>


    </div>
    </div>
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

</br>    </br>  </br> 




           <!--     next table -->
            <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-globe fa-2x"></i> ข้อมูลหน้าเว็บไซต์ ส่วนผลงานที่ผ่านมาของนักศึกษา
                            </li>
                        </ol>


    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-refresh"></i> อัพเดตข้อมูลส่วน ผลงานที่ผ่านมาของนักศึกษา</div>
      <div class="panel-body">
        
 <?php
include ("add_workings.php");
?>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add_workings"><i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูล</button>
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                            <div class="form-group">
                         
                                <input type="text" class="form-control" id="keywordn" name="keywordn" placeholder="ระบุชื่อหัวข้อ เพื่อค้นหา...">
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
                                        <th><center>คำอธิบาย</center></th>
                                        <th><center>โพสวันที่</center></th>
                                       
                                       
                                        <th><center>ดูข้อมูล</center></th>
                                        <th><center>แก้ไข</center></th>
                                        <th><center>ลบ</center></th>
                                        
                                        
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ("connect.php");
                                    isset($_POST['keywordn']) ? $keywordn = $_POST['keywordn'] : $keywordn = '';
                                    $sqln = "SELECT * FROM tb_workings
                                    WHERE ( tb_work_title LIKE '%".$keywordn."%') ";
                                    
                                    
                                     $rsn = mysql_query($sqln) or die(mysql_error());
                                                $Num_Rowsn = mysql_num_rows($rsn);

                                                $Per_Pagen = 10;   // Per Page
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

                                                $sqln .=" ORDER BY tb_work_id DESC LIMIT $Page_Startn , $Per_Pagen";
                                                $rsn  = mysql_query($sqln);
                                                $n = 1;
                                                while($rown = mysql_fetch_array($rsn)){
                                                    $countn++;


                                                ?>
                                    
                                    <tr>
                                        <td align="center"><?php echo $countn ?></td>
                                        <td><?php echo $rown['tb_work_title']; ?></td>
                                        <td><div style="  width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $rown['tb_work_description']; ?> </div></td>
                                        <td align="center"><?php echo $rown['tb_work_date']; ?></td>
                                        
                                       
                                       <td>
<center><a href="workings_detail.php?flag= <?=$rown['tb_work_id']; ?> "> <button class="btn btn-primary btn-xs">  
    <i class="glyphicon glyphicon-eye-open"> รายละเอียด</i></button></a> </center></td>
                                       
                                        <td><center>
                                         <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit_workings<?php echo $n; ?>">
                                         <i class="glyphicon glyphicon-edit"></i> แก้ไข</button></center>
                                           <!-- Modal -->
                                                    <div class="modal fade" id="edit_workings<?php echo $n; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลผลงานนักศึกษา</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="sql_edit_workings.php">
                                                            <input type="hidden" name="tb_work_id" value="<?php echo $rown['tb_work_id']; ?>">
                                                                

                                                              <div class="form-group">
              <label class="control-label col-md-2">หัวข้อ</label>
              <div class="col-md-6">  
                <input type="text" class="form-control" id="tb_work_title" name="tb_work_title" value="<?php echo $rown['tb_work_title']; ?>">
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">รายละเอียด</label>
                <div class="col-md-8">
                 <textarea type="text" rows="10" class="form-control" id= "tb_work_description" name="tb_work_description"> <?php echo $rown['tb_work_description']; ?> </textarea>
                </div>
                  </div>
           
            
            
            
           <div class="form-group">
                 <label class="control-label col-md-2">ผลงานโดย</label>
                <div class="col-md-3">
                 <input type="text" class="form-control" id="tb_work_by" name="tb_work_by" value="<?php echo $rown['tb_work_by']; ?>">
                  
                </div>
             </div>
             
               <div class="form-group">
    <label class="control-label col-md-2">รูป</label>
    <div class="col-md-4">
        <img src="img_frontweb/<?php  echo $rown['tb_work_img']; ?>" width=150 height=150 >
         <input  type="file" id="input051" class="form-control" name="tb_work_img" id="tb_work_img"> <br>
         <input type="hidden" class="form-control"  name="hdnOldFile" value="<?php echo $row['tb_work_img'];?>">   

     
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
<td align="center">  <a href="sql_delete_workings.php?flag= <?=$rown['tb_work_id']; ?>" 
    onclick="return confirm('คุณแน่ใจหรือไม่ ที่จะลบช้อมูลนี้?')"> <button class="btn btn-danger btn-xs">  
    <i class="glyphicon glyphicon-trash"></i></button></a> </td>
 

 


                                    </tr>
                                    <?php
                                                $n++;
                                                }
                                                ?> 
                             
                                </tbody>
                            </table>

  </div>
  </div>

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
                           
     
                
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script type="text/javascript" src="src/bootstrap-filestyle.js"></script>
  

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
            $('#input051').filestyle({
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
             $('#input080').filestyle({
                buttonText : ' File',
                buttonName : 'btn-info'
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
             $('#input101').filestyle({
                buttonText : 'File',
                buttonName : 'btn-success'
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



  
  
         

 </br>    </br>  </br> 
 
  


  <!-- FOOTER -->
  <footer>
    <a class="pull-right" href="#"> <button class="btn btn-info btn-xs"><i class="fa fa-arrow-circle-up fa-2x"></i> Back to top</button></a>
     <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-copyright"></i> <strong>Designed By Chid Clever 2016·</strong>
                            </li>
  </ol>
   
  </footer>

</div><!-- /.container -->
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>