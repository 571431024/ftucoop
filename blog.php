<!DOCTYPE html>
<html lang="en">

<?php 
  include ("head.php"); 
?>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">FTU Coop </a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="has-children active">
                  <a href="blog.php">News</a>
                  <ul class="dropdown">
                    <li><a href="#">News1</a></li>
                    <li><a href="#">News2</a></li>
                    <li><a href="#">News3</a></li>
                    <li><a href="#">News4</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="register.php" class="pl-3 pr-3 text-black">Register</a>
                </li>
                <li>
                  <a href="admin/login.php" class="pl-3 pr-3 text-black">Login</a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>

    </header>


    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/news.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="font-weight-light">Blog Posts</h1>
            <div><a href="index.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <span
                class="text-white">Blog</span></div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="site-section">
        <div class="row mb-3 align-items-stretch">

          <?php

              require_once("pagination_function.php");

              $mysqli = new mysqli("localhost", "root","","ci_fst");  
              /* check connection */
              if ($mysqli->connect_errno) {  
                  printf("Connect failed: %s\n", $mysqli->connect_error);  
                  exit();  
              }  
              if(!$mysqli->set_charset("utf8")) {  
                  printf("Error loading character set utf8: %s\n", $mysqli->error);  
                  exit();  
              }

              $num = 0;
              $sql = " SELECT * FROM tb_activity_news WHERE 1 ";  
              $result=$mysqli->query($sql);
              $total=$result->num_rows;
              
              $e_page= 6; // กำหนด จำนวนรายการที่แสดงในแต่ละหน้า   
              $step_num= 0;
              if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1)){   
                  $_GET['page']=1;   
                  $step_num= 0;
                  $s_page = 0;    
              }else{   
                  $s_page = $_GET['page']-1;
                  $step_num=$_GET['page']-1;  
                  $s_page = $s_page*$e_page;
              }   
              $sql.=" ORDER BY tb_act_id DESC LIMIT ".$s_page.",$e_page";
              $result=$mysqli->query($sql);
              if($result && $result->num_rows>0){  // คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
                  while($row = $result->fetch_assoc()){ // วนลูปแสดงรายการ
                      $num++;

                      $tb_act_title = $row['tb_act_title'];
                      $tb_act_description = $row['tb_act_description'];
                      $tb_act_date = $row['tb_act_date'];
                      $tb_act_img = $row['tb_act_img'];
                      $tb_act_file = $row['tb_act_file'];
                      $tb_act_faculty=$row['tb_act_faculty'];
                      $tb_act_major=$row['tb_act_major'];

          ?>

          <div class="col-md-4 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="blog_detail.php?flag= <?=$row['tb_act_id']; ?>">
                <?php if($tb_act_img == ""){ ?>
                <img src="student_pic/no_image.gif" alt="Image" class="img-fluid">
                <?php }else{?>
                <img src="img_frontweb/<?php  echo $tb_act_img ?>" alt="Image" class="img-fluid" width=340 height=250>
                <?php } ?>
              </a><br>
              <h2 class="font-size-regular"><a href="blog_detail.php?flag= <?=$row['tb_act_id']; ?>">
                  <?php  echo $row['tb_act_title']; ?></a></h2>
              <div class="meta mb-4">Posted by Admin <span class="mx-2">&bullet;</span>
                <?php  echo $row['tb_act_date']; ?>
                <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <div class="meta mb-4"><span class="mx-0">&bullet;</span> คณะ <?php echo $row['tb_act_faculty']; ?>
                <span class="mx-2">&bullet;</span>สาขา <?php echo $row['tb_act_major']; ?></div>
              <p> <?php  echo iconv_substr ($row['tb_act_description'],0,200); ?></p>
            </div>
          </div>

          <?php
                }   
            }
            ?>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-12 mb-lg-12 text-center">
            <!-- <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">Load More Posts...</a> -->
            <?php
            page_navi($total,(isset($_GET['page']))?$_GET['page']:1,$e_page);
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <!-- <h3 class="footer-heading mb-4">About Travelers</h3> -->
            <img src="images/Ftu_logo.png" width=80 height=80>
            <p>“มหาวิทยาลัยฟาฏอนีเป็นสถาบันอุดมศึกษาที่มีมาตรฐานระดับสากล
              ผลิตบัณฑิตและพัฒนาองค์ความรู้ที่บูรณาการหลักการอิสลามอย่างมีดุลยภาพ
              สร้างสรรค์สังคมคุณธรรมและสันติภาพที่ยั่งยืน”</p>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">News</a></li>

              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="register.php">Register</a></li>
                <li><a href="admin/login.php">Login</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
          </div>

        </div>
        
        <div class="col-lg-4 mb-5 mb-lg-0">


        <div class="mb-5">
          <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

          <form action="#" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent"
                placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="mb-5">
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | Fatoni University <i class="" aria-hidden="true"></i>
            <a href="https://colorlib.com" target="_blank"></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
  </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>

</html>