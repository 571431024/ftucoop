<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: ../index.php");

}
$id = $_SESSION['id'];

?>

<style type="text/css">

[contentEditable=true]:empty:not(:focus):before{
    content:attr(data-text)
}


</style>


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
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
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
                <div class="profile-usertitle-name"><?php echo $_SESSION['name']; ?> <?php echo $_SESSION['lastname']; ?> <b class="caret"></b></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $_SESSION['stt']; ?></div>
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
            <li><a href="mentor_bio.php"><em class="fa fa-user">&nbsp;</em>Manage Profile</a></li>
            <li><a href="student_re.php"><em class="fa fa-users">&nbsp;</em> นักศึกษาภายใต้การดูแล</a></li>

        
            <li><a href="student_come.php"><em class="fa fa-file-text">&nbsp;</em> บันทึกการมาฝึกวิชาชีพรายวัน</a></li>
            <li><a href="supervision_schedule.php"><em class="fa fa-calendar">&nbsp;</em> ตารางนิเทศอาจารย์<!-- &amp; --></a></li>
            <li class="active"><a href="mentor_eva.php"><em class="fa fa-bar-chart">&nbsp;</em> ประเมินนักศึกษา</a></li>
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
       
            <li><a href="../../../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Evaluate </li>
            </ol>
        </div><!--/.row-->
        
        

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
                                <i class="fa fa-check"></i> รายละเอียดแบบฟอร์มการประเมิน (พี่เลี้ยง)
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <!-- add new advisor button -->

                <div class="row">
                	<div class="col-lg-12">
                        
                        <form class="form-inline pull-right" method="POST" onsubmit="return checkTeaSearch()" action="searchteacher.php">
                            <div class="form-group">
                         
                               
                            </div>
                        </form>
                    </div>
                </div><!--/.row -->
               
                
                <!-- Panel for table -->
            <?php include("fn_return.php"); ?>

                                    <?php

                                 
                                        include ("../../../sql_function/connect.php");
                                        extract($_GET);
                                        $tb_std_id = $flag;
                                        
                                        $sql = "SELECT tb_student.*,tb_mentor.*,

                                    tb_prefix.*,
                                    tb_student_category.*,
                                   
                                    tb_advisor.*,lo_name.*,cate_lo.*,province_lo.*


                                    FROM tb_student 
                                    LEFT JOIN tb_prefix ON tb_student.tb_prefix_tb_prefix_id = tb_prefix.tb_prefix_id
                                    LEFT JOIN tb_student_category ON tb_student.tb_student_category_tb_stdcate_id   = tb_student_category.tb_stdcate_id  
                                    LEFT JOIN tb_advisor ON tb_student.tb_advisor_tb_ads_id   = tb_advisor.tb_ads_id  
                                    LEFT JOIN tb_mentor ON tb_student.tb_mentor_tb_mentor_id   = tb_mentor.tb_mentor_id 

                                    LEFT JOIN lo_name ON lo_name.id = tb_student.tb_std_senamelo 
                                    LEFT JOIN cate_lo ON cate_lo.id = tb_student.tb_std_secate 
                                    LEFT JOIN province_lo ON province_lo.id = tb_student.tb_std_seprovince 
                                    WHERE tb_std_id='$tb_std_id' ";
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
                                 <td><img src="../../../student_pic/<?php  echo $studentimg ?>" width=150 height=150 ></td>
                              </tr>
                              <tr>
                                 <th align="right"  scope="row">&nbsp;</th>
                                 <th>รหัสนักศึกษา</th>
                                 <td><?php echo $row['tb_std_identification']; ?></td>
                              
                              </tr>

                               
                              
                              <tr>

                               
                               <th align="right"  scope="row">&nbsp;</th>
                                 <th>ชื่อ</th>
                                 <td>  <?php echo $row['tb_prefix_name']; ?> <?php echo $row['tb_std_name']; ?></td>
                              </tr>
                              
                              <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>นามสกุล</th>
                                 <td><?php echo $row['tb_std_lastname']; ?></td>
                              </tr>

                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>เพศ</th>
                                 <td><?php echo $row['tb_std_sex']; ?></td>
                              </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>สาขา</th>
                                 <td><?php echo $row['tb_std_major']; ?></td>
                              </tr>
                               </tr>
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>ชั้นปี</th>
                                 <td><?php echo $row['tb_std_year']; ?></td>
                              </tr>
                             
                               
                             
                               
                                <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>ประเภทนักศึกษา</th>
                                 <td><?php echo $row['tb_stdcate_cate']; ?></td>
                              </tr>
                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>พี่เลี้ยง</th>
                                 <td> <?php echo $mentername ?> <?php echo $menterlastname ?>   </td>
                              </tr>
                              <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>อาจารย์ที่ปรึกษา</th>
                                 <td>อาจารย์<?php echo $advisorname ?> <?php echo $advisorlastname ?> </td>
                              </tr>

                               <tr>
                                <th align="right"  scope="row">&nbsp;</th>
                                 <th>สถานที่ปฏิบัติงาน</th>
                                 <td><div style="  width: 300px;white-space:nowrap;overflow: hidden;text-overflow: ellipsis;"><?php echo $row['LNname'];?> <?php echo $row['PLname'];?> <?php echo $row['tb_std_offerlo'];?> <?php echo $row['tb_std_offerlo_d'];?></div></td>
                              </tr>
                  <tr>
                    <td colspan="4" align="center"><p><strong>แบบประเมินผลการปฏิบัติงานของนักศึกษา (สำหรับพี่เลี้ยง) </strong></p>
                      <p align="left"> <strong>คำชี้แจง</strong>
                      โปรดบันทึกหมายเลข 5, 4, 3, 2, 1 ตามความคิดเห็นในแต่ละหัวข้อการประเมิน โดยใช้เกณฑ์การประเมินค่าสำหรับระดับความคิดเห็น ดังนี้ 
                      </p>
                      <p align="left">5         หมายถึง    ดีมาก </br>
                        4 หมายถึง    ดี</br>
                        3 หมายถึง    ปานกลาง</br>
                        2 หมายถึง    พอใช้</br>
                        1 หมายถึง    ควรปรับปรุง</br>
                      </p>
                    </td>
                  </tr>

                             
                           </tbody>
                           
                        </table>

<!-- End table student deatail -->


 <p><script language="javascript">
function fncSubmit()
{
    if(document.form1.ev15.checked == false && document.form1.ev14.checked == false && document.form1.ev13.checked == false && document.form1.ev12.checked == false && document.form1.ev11.checked == false  && true)
    {
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของการปฏิบัติงาน (Performance) หัวข้อ1.1 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev25.checked == false && document.form1.ev24.checked == false && document.form1.ev23.checked == false && document.form1.ev22.checked == false && document.form1.ev21.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของการปฏิบัติงาน (Performance) หัวข้อ1.2 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;   
     
 
    }else if(document.form1.ev55.checked == false && document.form1.ev54.checked == false && document.form1.ev53.checked == false && document.form1.ev52.checked == false && document.form1.ev51.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev65.checked == false && document.form1.ev64.checked == false && document.form1.ev63.checked == false && document.form1.ev62.checked == false && document.form1.ev61.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.2 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev75.checked == false && document.form1.ev74.checked == false && document.form1.ev73.checked == false && document.form1.ev72.checked == false && document.form1.ev71.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.3 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev85.checked == false && document.form1.ev84.checked == false && document.form1.ev83.checked == false && document.form1.ev82.checked == false && document.form1.ev81.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.4 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev95.checked == false && document.form1.ev94.checked == false && document.form1.ev93.checked == false && document.form1.ev92.checked == false && document.form1.ev91.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.5 กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    }else if(document.form1.ev105.checked == false && document.form1.ev104.checked == false && document.form1.ev103.checked == false && document.form1.ev102.checked == false && document.form1.ev101.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรู้ความสามารถ (Knowledge and Ability) หัวข้อ2.6  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;

        <!--  -->
    }else if(document.form1.a5.checked == false && document.form1.a4.checked == false && document.form1.a3.checked == false && document.form1.a2.checked == false && document.form1.a1.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรับผิดชอบต่อหน้าที่ (Responsibility) หัวข้อ3.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
   
    }else if(document.form1.b5.checked == false && document.form1.b4.checked == false && document.form1.b3.checked == false && document.form1.b2.checked == false && document.form1.b1.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรับผิดชอบต่อหน้าที่ (Responsibility) หัวข้อ3.2  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.c5.checked == false && document.form1.c4.checked == false && document.form1.c3.checked == false && document.form1.c2.checked == false && document.form1.c1.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรับผิดชอบต่อหน้าที่ (Responsibility) หัวข้อ3.3  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev145.checked == false && document.form1.ev144.checked == false && document.form1.ev143.checked == false && document.form1.ev142.checked == false && document.form1.ev141.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของความรับผิดชอบต่อหน้าที่ (Responsibility) หัวข้อ3.4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev175.checked == false && document.form1.ev174.checked == false && document.form1.ev173.checked == false && document.form1.ev172.checked == false && document.form1.ev171.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของลักษณะส่วนบุคคล  (Personality) หัวข้อ4.1  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev185.checked == false && document.form1.ev184.checked == false && document.form1.ev183.checked == false && document.form1.ev182.checked == false && document.form1.ev181.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของลักษณะส่วนบุคคล  (Personality) หัวข้อ4.2  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev195.checked == false && document.form1.ev194.checked == false && document.form1.ev193.checked == false && document.form1.ev192.checked == false && document.form1.ev191.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของลักษณะส่วนบุคคล  (Personality) หัวข้อ4.3  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }else if(document.form1.ev205.checked == false && document.form1.ev204.checked == false && document.form1.ev203.checked == false && document.form1.ev202.checked == false && document.form1.ev201.checked == false && true){
        alert('มีคำถามที่ยังไม่ได้ตอบคำถาม ส่วนของลักษณะส่วนบุคคล  (Personality) หัวข้อ4.4  กรุณาใส่คำตอบเพื่อดำเนินการต่อไป');
        return false;
    
    }
  document.form1.submit();      
}
        </script></p>
        <!-- ../sql_function/sql_add_evm_student.php -->
         <form  name="form1" method="post" action="../../../sql_function/sql_add_evm_student.php"  onSubmit="JavaScript:return fncSubmit();">
        <table width="100%" height="auto"  align="center" class ="table table-hover" >
          <tr valign="top">
            <td width="77%" rowspan="2" bgcolor="#CCCCCC"><div align="center"><strong>หัวข้อการประเมิน</strong></div></td>
            <td height="15" colspan="5" align="center" bgcolor="#CCCCCC"><strong>ระดับความคิดเห็น</strong></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#CCCCCC">5</td>
            <td align="center" bgcolor="#CCCCCC">4</td>
            <td align="center" bgcolor="#CCCCCC">3</td>
            <td align="center" bgcolor="#CCCCCC">2</td>
            <td align="center" bgcolor="#CCCCCC">1</td>
          </tr>
          
          <tr>
            <td colspan="6"><strong>ผลสำเร็จของงาน  (Work Achievement)</strong></td>
          </tr>
          <tr>
            <td colspan="6"><strong>1. การปฏิบัติงาน (Performance)</strong></td>
          </tr>
          <tr>
            <td>1.1 ปริมาณงาน (Quantity of Work) </td>
            <td align="center"><input type="radio" name="1" id="ev15" value="5" />
              
              </td>
            <td align="center"><input type="radio" name="1" id="ev14" value="4" />
            </td>
            <td align="center"><input type="radio" name="1" id="ev13" value="3" />
            </td>
            <td align="center"><input type="radio" name="1" id="ev12" value="2" />
            </td>
            <td align="center"><input type="radio" name="1" id="ev11" value="1" />
           </td>
          </tr>
          <tr>
            <td>1.2 คุณภาพงาน (Quality of Work)</td>
            <td align="center"><input type="radio" name="2" id="ev25" value="5" /></td>
            <td align="center"><input type="radio" name="2" id="ev24" value="4" /></td>
            <td align="center"><input type="radio" name="2" id="ev23" value="3" /></td>
            <td align="center"><input type="radio" name="2" id="ev22" value="2" /></td>
            <td align="center"><input type="radio" name="2" id="ev21" value="1" /></td>
          </tr>
         
          <tr>
            <td colspan="6"><strong>2. ความรู้ความสามารถ (Knowledge and Ability)</strong></td>
          </tr>
          <tr>
            <td>2.1 ความรู้ความสามารถทางวิชาการ (Academic Ability)
นักศึกษามีความรู้ทางวิชาการเพียงพอที่จะทำงานตามที่ได้รับมอบหมาย (ในระดับที่นักศึกษาทำได้)
</td>
            <td align="center"><input type="radio" name="3" id="ev55" value="5" /></td>
            <td align="center"><input type="radio" name="3" id="ev54" value="4" /></td>
            <td align="center"><input type="radio" name="3" id="ev53" value="3" /></td>
            <td align="center"><input type="radio" name="3" id="ev52" value="2" /></td>
            <td align="center"><input type="radio" name="3" id="ev51" value="1" /></td>
          </tr>
          <tr>
            <td>2.2 ความสามารถในการเรียนรู้และประยุกต์วิชาการ(Ability to Learn and Apply Knowledge)ความรวดเร็วในการเรียนรู้  เข้าใจข้อมูล  ข่าวสาร และวิธีการทำงาน  ตลอดจนการนำความรู้ไปประยุกต์ใช้งาน</td>
            <td align="center"><input type="radio" name="4" id="ev65" value="5" /></td>
            <td align="center"><input type="radio" name="4" id="ev64" value="4" /></td>
            <td align="center"><input type="radio" name="4" id="ev63" value="3" /></td>
            <td align="center"><input type="radio" name="4" id="ev62" value="2" /></td>
            <td align="center"><input type="radio" name="4" id="ev61" value="1" /></td>
          </tr>
          <tr>
            <td>2.3  ความรู้ความเชี่ยวชาญด้านปฏิบัติการ (Practical Ability)
เช่น  การปฏิบัติงานในภาคสนาม  ในห้องปฏิบัติการ 
</td>
            <td align="center"><input type="radio" name="5" id="ev75" value="5" /></td>
            <td align="center"><input type="radio" name="5" id="ev74" value="4" /></td>
            <td align="center"><input type="radio" name="5" id="ev73" value="3" /></td>
            <td align="center"><input type="radio" name="5" id="ev72" value="2" /></td>
            <td align="center"><input type="radio" name="5" id="ev71" value="1" /></td>
          </tr>
           <tr>
            <td>2.4 วิจารณญาณและการตัดสินใจ (Judgment and Decision Making)
ตัดสินใจได้ดี  ถูกต้อง  รวดเร็ว  มีการวิเคราะห์ข้อมูลและปัญหาต่างๆอย่างรอบคอบก่อนการตัดสินใจ  สามารถแก้ปัญหาเฉพาะหน้า  สามารถไว้วางใจให้ตัดสินใจได้ด้วยตนเอง
</td>
            <td align="center"><input type="radio" name="6" id="ev85" value="5" /></td>
            <td align="center"><input type="radio" name="6" id="ev84" value="4" /></td>
            <td align="center"><input type="radio" name="6" id="ev83" value="3" /></td>
            <td align="center"><input type="radio" name="6" id="ev82" value="2" /></td>
            <td align="center"><input type="radio" name="6" id="ev81" value="1" /></td>
          </tr>
           <tr>
            <td>2.5  การจัดการและวางแผน (Management and Planning)
สามารถจัดการและวางแผนการทำงานให้เสร็จตามเป้าหมาย
</td>
            <td align="center"><input type="radio" name="7" id="ev95" value="5" /></td>
            <td align="center"><input type="radio" name="7" id="ev94" value="4" /></td>  
            <td align="center"><input type="radio" name="7" id="ev93" value="3" /></td>
            <td align="center"><input type="radio" name="7" id="ev92" value="2" /></td>
            <td align="center"><input type="radio" name="7" id="ev91" value="1" /></td>
          </tr>
           <tr>
            <td>2.6  ทักษะการสื่อสาร (Communication Skills)
ความสามรถในการติดต่อสื่อสาร  การพูด  การเขียน  
การนำเสนอ  สามารถสื่อให้เข้าใจได้ง่าย  เรียบร้อย  ชัดเจน  ถูกต้อง  รัดกุม  มีลำดับขั้นตอนที่ดี  ไม่ก่อให้เกิดความสันสนต่อการทำงาน  รู้จักสอบถาม  รู้จักชี้แจงผลการปฏิบัติงานและข้อขัดข้องให้ทราบ  
</td>
            <td align="center"><input type="radio" name="8" id="ev105" value="5" /></td>
            <td align="center"><input type="radio" name="8" id="ev104" value="4" /></td>  
            <td align="center"><input type="radio" name="8" id="ev103" value="3" /></td>
            <td align="center"><input type="radio" name="8" id="ev102" value="2" /></td>
            <td align="center"><input type="radio" name="8" id="ev101" value="1" /></td>
          </tr>
          <tr>
            <td colspan="6"><strong>3. ความรับผิดชอบต่อหน้าที่ (Responsibility)</strong></td>
          </tr>
          <tr>
            <td>3.1   ความรับผิดชอบและเป็นผู้ที่ไว้วางใจได้ (Responsibility and Dependability)
ดำเนินงานให้สำเร็จลุล่วงโดยคำนึงถึงเป้าหมาย  และความสำเร็จของงานเป็นหลัก  ยอมรับผลที่เกิดจากการทำงานอย่างมีเหตุผล  สามารถปล่อยให้ทำงาน (กรณีงานประจำ  ถ้ามี) ได้โดยไม่ต้องควบคุมมากจนเกินไป  ความจำเป็นในการตรวจสอบขั้นตอนและผลงานตลอดเวลา  สามารถไว้วางใจให้รับผิดชอบงานที่มากกว่างานหลัก  สามารถไว้วางใจได้แทบทุกสถานการณ์หรือ
ในสถานการณ์ปกติเท่านั้น
</td>
            <td align="center"><input type="radio" name="9" id="a5" value="5" /></td>
            <td align="center"><input type="radio" name="9" id="a4" value="4" /></td>
            <td align="center"><input type="radio" name="9" id="a3" value="3" /></td>
            <td align="center"><input type="radio" name="9" id="a2" value="2" /></td>
            <td align="center"><input type="radio" name="9" id="a1" value="1" /></td>
          </tr>
          <tr>
            <td>3.2  ความสนใจ  อุตสาหะในการทำงาน (Interest in Work)
ความสนใจและความกระตือรือร้นในการทำงาน  มีความอุตสาหะ  ความพยายาม  ความตั้งใจที่จะทำงานได้สำเร็จ  ความมานะบากบั่น  ไม่ย่อท้อต่ออุปสรรคและปัญหา
</td>
            <td align="center"><input type="radio" name="10" id="b5" value="5" /></td>
            <td align="center"><input type="radio" name="10" id="b4" value="4" /></td>
            <td align="center"><input type="radio" name="10" id="b3" value="3" /></td>
            <td align="center"><input type="radio" name="10" id="b2" value="2" /></td>
            <td align="center"><input type="radio" name="10" id="b1" value="1" /></td>
          </tr>
          <tr>
            <td>3.3   ความสามารถเริ่มต้นทำงานได้ด้วยตนเอง (Initiative)
เมื่อได้รับคำชี้แนะ  สามารถเริ่มทำงานเองได้โดยไม่ต้องรอคำสั่ง (กรณีงานประจำ)  เสนอตัวเข้าช่วยงาน  มาขอรับงานใหม่ๆ ไปทำ ไม่ปล่อยเวลาว่างโดยเปล่าประโยชน์</td>
            <td align="center"><input type="radio" name="11" id="c5" value="5" /></td>
            <td align="center"><input type="radio" name="11" id="c4" value="4" /></td>
            <td align="center"><input type="radio" name="11" id="c3" value="3" /></td>
            <td align="center"><input type="radio" name="11" id="c2" value="2" /></td>
            <td align="center"><input type="radio" name="11" id="c1" value="1" /></td>
          </tr>
           <tr>
            <td>3.4   การตอบสนองต่อการสั่งการ (Response to Supervision)
ยินดีรับคำสั่ง  คำแนะนำ  คำวิจารณ์  ไม่แสดงความอึดอัดใจเมื่อได้รับคำติเตือน และวิจารณ์  ความรวดเร็วในการปฏิบัติตามคำสั่ง และการปรับตัว  ปฏิบัติตามคำแนะนำ  ข้อเสนอแนะและวิจารณ์  
</td>
            <td align="center"><input type="radio" name="12" id="ev145" value="5" /></td>
            <td align="center"><input type="radio" name="12" id="ev144" value="4" /></td>
            <td align="center"><input type="radio" name="12" id="ev143" value="3" /></td>
            <td align="center"><input type="radio" name="12" id="ev142" value="2" /></td>
            <td align="center"><input type="radio" name="12" id="ev141" value="1" /></td>
          </tr>
          
          
           <tr>
            <td colspan="6"><strong>4. ลักษณะส่วนบุคคล  (Personality)</strong></td>
          </tr>
           <tr>
            <td>4.1  บุคลิกภาพและการวางตัว (Personality) 
มีบุคลิกภาพและวางตัวได้เหมาะสม  เช่น  ทัศนคติ  วุฒิภาวะ  ความอ่อนน้อมถ่อมตน  การแต่งกาย  กิริยาวาจา  การตรงต่อเวลา  และอื่นๆ
</td>
            <td align="center"><input type="radio" name="13" id="ev175" value="5" /></td>
            <td align="center"><input type="radio" name="13" id="ev174" value="4" /></td>
            <td align="center"><input type="radio" name="13" id="ev173" value="3" /></td>
            <td align="center"><input type="radio" name="13" id="ev172" value="2" /></td>
            <td align="center"><input type="radio" name="13" id="ev171" value="1" /></td>
          </tr>
           <tr>
            <td>4.2  มนุษยสัมพันธ์  (Interpersonal Skills)
สามารถร่วมงานกับผู้อื่น  การทำงานเป็นทีม  สร้างมนุษยสัมพันธ์ได้ดี  เป็นที่รักใคร่ของผู้ร่วมงาน  เป็นผู้ที่ช่วยก่อให้เกิดความร่วมมือประสานงาน
</td>
            <td align="center"><input type="radio" name="14" id="ev185" value="5" /></td>
            <td align="center"><input type="radio" name="14" id="ev184" value="4" /></td>
            <td align="center"><input type="radio" name="14" id="ev183" value="3" /></td>
            <td align="center"><input type="radio" name="14" id="ev182" value="2" /></td>
            <td align="center"><input type="radio" name="14" id="ev181" value="1" /></td>
          </tr>
           <tr>
            <td>4.3    การมีระเบียบวินัย  ปฏิบัติตามวัฒนธรรมองค์กร  (Discipline and Adaptability to Formal Organization)
ความสนใจเรียนรู้ศึกษากฎระเบียบ  นโยบายต่างๆและปฏิบัติตามโดยเต็มใจ  
</td>
            <td align="center"><input type="radio" name="15" id="ev195" value="5" /></td>
            <td align="center"><input type="radio" name="15" id="ev194" value="4" /></td>
            <td align="center"><input type="radio" name="15" id="ev193" value="3" /></td>
            <td align="center"><input type="radio" name="15" id="ev192" value="2" /></td>
            <td align="center"><input type="radio" name="15" id="ev191" value="1" /></td>
          </tr>
           <tr>
            <td>4.4   คุณธรรมและจริยธรรม (Ethics and Morality)
มีความซื่อสัตย์  สุจริต  มีจิตใจดี  รู้จักเสียสละ  ไม่เห็นแก่ตัว เอื้อเฟื้อ  ช่วยเหลือผู้อื่น
</td>
            <td align="center"><input type="radio" name="16" id="ev205" value="5" /></td>
            <td align="center"><input type="radio" name="16" id="ev204" value="4" /></td>
            <td align="center"><input type="radio" name="16" id="ev203" value="3" /></td>
            <td align="center"><input type="radio" name="16" id="ev202" value="2" /></td>
            <td align="center"><input type="radio" name="16" id="ev201" value="1" /></td>
          </tr>
          






          <tr>
            <td colspan="6"><table width="100%">
              <tr>
                
                <td colspan="2"> <div class="form-group">
              <label class="control-label col-md-2">ข้อเสนอแนะ</label>
              <div class="col-md-9">  
                <textarea  rows="10" class="form-control" id= "tb_evm_comment" name="tb_evm_comment" placeholder="- ข้อคิดเห็นที่เป็นประโยชน์แก่นักศึกษา
- จุดเด่นของนักศึกษา  (Strength)                                                                           
- ข้อควรปรับปรุงของนักศึกษา (Improvement Needed)
และอื่นๆ.." ></textarea>
              </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="500">&nbsp;</td>
                <td width="10">&nbsp;</td>
              </tr>
            </table>  
        <!--<input name="std_id" type="text" id="std_id" value="<?php echo$tb_std_id; ?>" /> -->
        <?php $_SESSION['stdId'] = $tb_std_id; 
         ?>
  

        </td>
          </tr>
        </table>
        <p>
        <div align="center" >
       
        <button type="submit"  class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> ประเมิน</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  onclick="goBack()"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
       </div>
                   <script>
            function goBack() {
                window.history.back();
            }
            </script>
     
        </p>
        <p>&nbsp;</p>
    </form>
                

<!--
                         <ol class="breadcrumb">
                            <li class="active">
                               <a href="javascript:history.back();"><i class="glyphicon glyphicon-circle-arrow-left"></i> กลับ</a>
                            </li>
                        </ol>
                                    
    -->                               
                             
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
