<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");


}

$id = $_SESSION['id'];

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
                    <li>
                        <a href="../mentor/mentor_bio.php"><i class="glyphicon glyphicon-user"></i> จัดการโปรไฟล์</a>
                    </li>
                     <li >
                        <a href="../mentor/student_re.php"><i class="glyphicon glyphicon-user"></i> นักศึกษาภายใต้การดูแล</a>
                    </li>
                    <li >
                        <a href="../mentor/student_come.php"><i class="glyphicon glyphicon-save"></i> บันทึกการมาฝึกวิชาชีพรายวัน</a>
                    </li>
                    <li>
                        <a href="../mentor/supervision_schedule.php"><i class="glyphicon glyphicon-list"></i> ตารางการนิเทศอาจารย์</a>
                    </li>
                     <li>
                        <a href="../admin/student_come.php"><i class="glyphicon glyphicon-calendar"></i> บันทึกการเข้าฝึกประจำวัน</a>
                    </li>
                   
                    <li class="active">
                        <a href="../mentor/mentor_eva.php"><i class="glyphicon glyphicon-check"></i> ประเมินนักศึกษา</a>
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
                            การประเมิน <small>นักศึกษา</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-check"></i> ประเมินนักศึกษา (พี่เลี้ยง)
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- add new advisor button -->
<?php
include ("../admin/add_student.php");
?>
                <div class="row">
                    <div class="col-lg-12">
                       
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
                                        <th>รหัสนักศึกษา</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                       
                                        <th>ประเภทนักศึกษา</th>
                                        <th>สถานที่ฝึกงาน</th>
                                        <th><center>ประเมิน</center></th>
                                        <th><center>คะแนน(เต็ม80)</center></th>
                                        <th>คิดเป็นร้อยละ</th>
                                       
                                        
                                    
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
                                    tb_student.tb_std_address,tb_student.tb_std_img,

                                    tb_student.tb_prefix_tb_prefix_id,
                                    tb_student.tb_student_category_tb_stdcate_id,
                                    tb_student.tb_localtion_tb_lo_id,
                                    tb_student.tb_advisor_tb_ads_id,
                                    tb_student.tb_mentor_tb_mentor_id,

                                    tb_prefix.tb_prefix_name,
                                    tb_student_category.tb_stdcate_id,
                                    tb_student_category.tb_stdcate_cate,
                                    tb_localtion.tb_lo_name,
                                    tb_advisor.tb_ads_name,
                                    tb_advisor.tb_ads_id,
                                    tb_mentor.tb_mentor_id


                                    FROM tb_student 
                                    INNER JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    INNER JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id   = tb_student_category.tb_stdcate_id  
                                    INNER JOIN tb_advisor ON tb_student.tb_advisor_tb_ads_id   = tb_advisor.tb_ads_id  
                                    INNER JOIN tb_localtion ON tb_student.tb_localtion_tb_lo_id = tb_localtion.tb_lo_id
                                    INNER JOIN tb_mentor ON tb_student.tb_mentor_tb_mentor_id = tb_mentor.tb_mentor_id
                                    where tb_mentor_tb_mentor_id='$id'";
                                    
                                    
                                     $rs = mysql_query($sql) or die(mysql_error());
                                                $Num_Rows = mysql_num_rows($result);
                                              

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

                                                $sql .=" ORDER BY tb_std_id ASC LIMIT $Page_Start , $Per_Page";
                                                $rs  = mysql_query($sql);
                                                $i = 1;
                                                while($row = mysql_fetch_array($rs)){
                                                $count++;

                                                ?>
                                    
                                    <tr>
                                       
                                        <td><center><?php echo $count ?></center></td>
                                        <td><?php echo $row['tb_std_identification']; ?></td>
                                        <td><?php echo $row['tb_prefix_name']; ?> <?php echo $row['tb_std_name']; ?></td>
                                        <td><?php echo $row['tb_std_lastname']; ?></td>
                                       
                                        <td><?php echo $row['tb_stdcate_cate']; ?></td>
                                        <td><?php echo $row['tb_lo_name']; ?></td>
                                       
                                      

                                        <td>
        <?php
        include ("../sql_function/connect.php");

        $sql_eva="SELECT  * FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]'";
        $query_eva=mysql_query($sql_eva);
        $rows=mysql_num_rows($query_eva);

        if ($rows>=1    ) {?>
                    
             
             <center>  <a href="../mentor/view_mentor_eva.php?flag= <?=$row['tb_std_id']; ?>"> <button class="btn btn-info btn-xs">  
                <i class="glyphicon glyphicon-eye-open"> ดูผลการประเมิน</i></button></a> </center>
  


             <?php } else {?>
                       

                 <center>  <a href="../mentor/mentor_eva_detail.php?flag= <?=$row['tb_std_id']; ?>"> <button class="btn btn-danger btn-xs">  
                                                    <i class="glyphicon glyphicon-thumbs-up"> ประเมินนักศึกษา   </i></button></a> </center>


                    <?php } ?>
        


        </td>


                    <td><center>
                        
                 
                        
                        <?php
                            $allscore = 0;
                            $sqlScore="SELECT tb_evm_score FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]' ";
                             
                            $queryScore=mysql_query($sqlScore);
                            while($rowScore = mysql_fetch_array($queryScore)){
                            
                            $allscore +=  $rowScore['tb_evm_score'];


                            /*
                            if($rwScore['sumScore'] != "")
                                echo $rwScore['sumScore'];
                            else
                                echo "ยังไม่ประเมิน";

                                */
                            }
                            if($allscore != ""){
                                echo $allscore; 
                            }
                                
                            else {echo "ยังไม่ประเมิน";
                            }
                                

                        ?>


                    </center></td>    
                     <td><center>
                        
                        <?php
                            $allscore = 0;
                            $sqlScore="SELECT tb_evm_score FROM tb_evaluation_mentor WHERE tb_mentor_tb_mentor_id ='$id' AND  tb_student_tb_std_id= '$row[tb_std_id]' ";
                             
                            $queryScore=mysql_query($sqlScore);
                            while($rowScore = mysql_fetch_array($queryScore)){
                            
                            $allscore +=  $rowScore['tb_evm_score']*100/80;
                             $f = sprintf ("%.2f", $allscore);

                            /*
                            if($rwScore['sumScore'] != "")
                                echo $rwScore['sumScore'];
                            else
                                echo "ยังไม่ประเมิน";

                                */
                            }
                            if($allscore != ""){
                                echo $f."%"; 
                            }
                                
                            else {echo "ยังไม่ประเมิน";
                            }
                                

                        ?>

                    </center></td>                           
                                        
                                       
                                        
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
