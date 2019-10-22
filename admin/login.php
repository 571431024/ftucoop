<!DOCTYPE html>
<html lang="en">

<?php 
  include ("../head.php"); 
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
            <h1 class="mb-0"><a href="../index.php" class="text-black h2 mb-0">FTU Coop</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="../index.php">Home</a>
                </li>
                <li class="has-children">
                  <a href="../blog.php">News</a>
                  <ul class="dropdown">
                    <li><a href="#">News1</a></li>
                    <li><a href="#">News2</a></li>
                    <li><a href="#">News3</a></li>
                    <li><a href="#">News4</a></li>
                  </ul>
                </li>
                
                <!-- <li><a href="discount.html">Discount</a></li> -->
                <!-- <li><a href="about.html">About</a></li> -->
                <!-- <li><a href="blog.html">Blog</a></li>
                
                <li class="active"><a href="contact.html">Contact</a></li> -->
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                    <a href="../register.php" class="pl-3 pr-3 text-black">Register</a>
                </li>
                <li>
                    <a href="login.php" class="pl-3 pr-3 text-black">Login</a>
                </li>
                <!-- <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li> -->
                
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(../images/home-slide3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="font-weight-light" style="color:black">Sing In</h1>
              <div><a href="../index.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Login</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5">

            <form class="p-5 bg-white" enctype="multipart/form-data" method="POST" action="check_login.php"
            onSubmit="return chknull();">
             
                <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">Username</label>
                    <input type="text" class="form-control" name="user" required="required">
                </div>
                <div class="col-md-6">
                    <label class="text-black" for="lname">Password</label>
                    <input type="password" class="form-control" name="pwd" required="required">
                    <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">Password?</a></p>
                </div>
                </div>

              <!-- <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div> -->

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sing In" class="btn btn-info py-2 px-4 text-white">
                </div>
              </div>
            
               <!--Footer-->
                <!-- <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
                        Sign Up</a></p>
                </div> -->
  
            </form>
          </div>
          <div class="col-md-4">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">135/8 M.3 Khawtoom Yarang Pattani 94160</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">ftu@gmail.com</a></p>

            </div>
            
            <div class="p-2 mb-3 bg-white">
              <img src="../images/ftuMap.jpg" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">FTU Map</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <!-- <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p> -->
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
              <img src="../images/Ftu_logo.png" width=80 height=80>
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
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../blog.php">News</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="../register.php">Register</a></li>
                  <li><a href="login.php">Login</a></li>
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
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
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
              </script> All rights reserved | <span style="color:green;">Fatoni</span> University <i class="" aria-hidden="true"></img>
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