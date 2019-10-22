<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_DEPRECATED);  ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
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
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
<style>
body {
    background-color: #FAFAFA;


}
</style>


  

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->


<!-- Language -->
<div align=right><span class="">Language : 
                    <a class="" href="form.php"><span>TH</span></a>
            <span> | </span>
            <a class="" href="form_english.php"><span>EN</span></a>
            </span>
</div>       

<div class="container marketing"> 

   <div class="panel-group">
    <div class="panel panel-default">
     
      <center> <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-pencil-square-o fa-2x"></i> <strong>APPLICATION FORM FOR INTERNSHIP AND COOPERATIVE EDUCATION </br>
                                CO-OP JOB APPLICATION</strong>
                            </li>
                </ol>
      </center> 
     

      <div class="panel-body">

 
  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="sql_add_student_preinformation_eng.php" >
  <fieldset>
   <legend>1.Student portfolio</legend>  
    <div class="form-group">
                <label class="control-label col-md-2">Prefix</label>
                <div class="col-md-2">
        <?php include ("prefix.php"); ?>
                </div>
                 <label class="control-label col-md-1">Name</label>
                <div class="col-md-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
                </div>
                 <label class="control-label col-md-1">Lastname</label>
                <div class="col-md-3">
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required autofocus>
                </div>



                  </div>
                   <script type="text/javascript">
            $(document).ready(function() {
                $('#btnSubmit').click(function() {
                    var check = check_iden();  
                    check.success(function(data) {
                        if (data != 1){
                            $('#register').submit();
                            return false;
                        }
                    });
                    
                });
                $('#iden').focusout(function() {
                    var check = check_iden();
                    check.success(function(data) {
                        if (data == 1) {
                            $('.messageIDEN').html('This Student ID already in used');
                        }
                       
                    });
                });
            });
            function check_iden() {
                return $.ajax({
                    type: 'POST',
                    data: {iden: $('#iden').val()},
                    url: 'check_iden.php'
                });


            }
        </script>
        <style>
            .messageIDEN{
                font-size: 12px;
                color: red;
            }
          
        </style>
    <div class="form-group">
       <label class="control-label col-md-2">Student ID</label>
                <div class="col-md-2">
                <input type="text" class="form-control" id="iden" name="iden"  placeholder="Student ID" required autofocus><span class="messageIDEN"></span>
                </div>

                <input  type="hidden" class="form-control" id="tb_std_password" name="tb_std_password" value="12345">
                  <label class="control-label col-md-1">Major</label>
                <div class="col-md-3">
                 <select class="form-control" id="tb_std_major" name="tb_std_major">
                            <option value="no">Select major</option>
                           
                            <option>Information technology</option>
                            <option>RD</option>
                          
                          
                          </select>
                  
                </div>

                 <label class="control-label col-md-1">Year</label>
                <div class="col-md-2">
                 <select class="form-control" id="tb_std_year" name=" tb_std_year">
                            <option value="no">select year</option>
                           
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          
                          </select>
                  
                </div>
    </div>
   <div class="form-group">
     <label class="control-label col-md-2">GPA</label>
      <div class="col-md-2">
        <input type="text" class="form-control" id="gpa" name="gpa" placeholder="GPA">
                </div>
          <label class="control-label col-md-1">Birth date</label>
  
                
                  <div class="col-md-2">
                    <input class="form-control" type="date" id="birthday" name="birthday" >
                  </div>
                  <label class="control-label col-md-1">Sex</label>
                <div class="col-md-2">
                 <select class="form-control" id="stdpre_sex" name=" stdpre_sex">
                            <option value="no">Select sex</option>
                           
                            <option>Male</option>
                            <option>Female</option>
                          
                          </select>
                        </div>
                   <label class="control-label col-md-1">Height</label>
                  <div class="col-md-1">
                    <input class="form-control" type="text" id="tall" name="tall" placeholder="cm.">
                  </div>
                    </div>
                  
                

                  <div class="form-group">
                     <label class="control-label col-md-2">Weight</label>
                  <div class="col-md-1">
                    <input class="form-control" type="text" id="weight" name="weight" placeholder="kg.">
                  </div>
                   <script type="text/javascript">
            $(document).ready(function() {
                $('#btnSubmit').click(function() {
                    var check = check_idcard();  
                    check.success(function(data) {
                        if (data != 1){
                            $('#register').submit();
                            return false;
                        }
                    });
                    
                });
                $('#iden').focusout(function() {
                    var check = check_idcard();
                    check.success(function(data) {
                        if (data == 1) {
                            $('.messageID').html('This passport ID already in used');
                        }
                      
                    });
                });
            });
            function check_idcard() {
                return $.ajax({
                    type: 'POST',
                    data: {idcard: $('#idcard').val()},
                    url: 'check_idcard.php'
                });


            }
        </script>
        <style>
            .messageID{
                font-size: 12px;
                color: red;
            }
         
        </style>
     <label class="control-label col-md-2">Passport ID</label>
      <div class="col-md-2">
        <input type="text" class="form-control" id="idcard" name="idcard" placeholder="Passport ID" required autofocus><span class="messageID"></span>
                </div>
                 <label class="control-label col-md-1">Nationality</label>
      <div class="col-md-2">
        <input type="text" class="form-control" id="nation" name="nation" placeholder="Nationality">
                </div>
                
            
                </div>
                   <div class="form-group">
                  <label class="control-label col-md-2">Religion</label>
      <div class="col-md-2">
        <input type="text" class="form-control" id="reli" name="reli" placeholder="Religion">
                </div>
                </div>

 <legend>2.Conscription</legend>  
 <div class="form-group">
      <label class="col-lg-2 control-label">Conscription</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="already passed" checked="">
            Already passed
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="Have not draft yet">
            Have not draft yet
          </label>
        </div>
         <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="release">
            Release
          </label>
        </div>
     </div>
    </div>

<legend>3.Address</legend>  
 <div class="form-group">
     <label class="control-label col-md-2">Address</label>
      <div class="col-md-9">
        <textarea  class="form-control" rows="5" id="tb_std_address" name="tb_std_address" placeholder="Address" >  </textarea>
                </div>
        </div>
                  <div class="form-group">
    
          <label class="control-label col-md-2">Tel.</label>
                  <div class="col-md-3">
                    <input class="form-control" type="text" id="mobile" name="mobile"placeholder="Tel." required autofocus >
                  </div>
                    <script type="text/javascript">
            $(document).ready(function() {
                $('#btnSubmit').click(function() {
                    var check = check_email();
                    check.success(function(data) {
                        if (data != 1){
                            $('#register').submit();
                            return false;
                        }
                    });
                    
                });
                $('#email').focusout(function() {
                    var check = check_email();
                    check.success(function(data) {
                        if (data == 1) {
                            $('.message').html('This email already in used');
                        }
                    });
                });
            });
            function check_email() {
                return $.ajax({
                    type: 'POST',
                    data: {email: $('#email').val()},
                    url: 'check_email.php'
                });
            }
        </script>
        <style>
            .message{
                font-size: 12px;
                color: red;
            }
        </style>
                   <label class="control-label col-md-1">Email</label>
                  <div class="col-md-3">
                    <input class="form-control" type="email" id="email" name="email" placeholder="email" required autofocus><span class="message"></span>
                  </div>
                  
                  </div>
                  <legend>4.Family information</legend>
  <div class="form-group">
     <label class="control-label col-md-2">Name-lastname Father</label>
      <div class="col-md-4">
        <input type="text" class="form-control" id="father" name="father" placeholder="Name-lastname Father">
                </div>
          <label class="control-label col-md-2">Occupation</label>
                  <div class="col-md-3">
                    <input class="form-control" type="text" id="occu" name="occu"placeholder="Occupation" >
                  </div>
                  
                  
                  </div>
                   <div class="form-group">
     <label class="control-label col-md-2">Workplace </label>
      <div class="col-md-4">
        <input type="text" class="form-control" id="occulo" name="occulo" placeholder="Workplace">
                </div>
          <label class="control-label col-md-2">Tel.</label>
                  <div class="col-md-3">
                    <input class="form-control" type="text" id="fathertel" name="fathertel"placeholder="Tel." >
                  </div>
                </div>
                   <div class="form-group">
     <label class="control-label col-md-2">Name-lastname Mother</label>
      <div class="col-md-4">
        <input type="text" class="form-control" id="mother" name="mother" placeholder="Name-lastname Mother">
                </div>
          <label class="control-label col-md-2">Occupation</label>
                  <div class="col-md-3">
                    <input class="form-control" type="text" id="occumother" name="occumother"placeholder="Occupation" >
                  </div>
                  
                  
                  </div>


                   <div class="form-group">
     <label class="control-label col-md-2">Workplace</label>
      <div class="col-md-4">
        <input type="text" class="form-control" id="occulomother" name="occulomother" placeholder="สถานที่ทำงาน">
                </div>
          <label class="control-label col-md-2">Tel.</label>
                  <div class="col-md-3">
                    <input class="form-control" type="text" id="mothertel" name="mothertel"placeholder="Tel." >
                  </div>
                  
                  
                  </div>


<legend>5.Computer Skills</legend>
 <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Computer program..</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="5" name="capability"
        placeholder="1.
2.
3.
4." >

        </textarea>
        
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Portfolio / award ever received.</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="5" name="workings"
        placeholder="1.
2.
3.
4." >

        </textarea>
        
      </div>
    </div>



<!-- select work-->




<legend>6.Selection apprentice location</legend>
  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Location name </label>
      <div class="col-lg-8">
       <input type="text" class="form-control" id="etc" name="etc" placeholder="Location name" required autofocus>
        
      </div>
    </div>
                  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Location detail </label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="5" name="tb_std_offerlo_d"
        placeholder="Location detail" >

        </textarea>
        
      </div>
    </div>
     <div class="form-group">
     <label class="control-label col-md-2">Position</label>
      <div class="col-md-3">
        <input type="text" class="form-control" id="position" name="position" placeholder="Position" required autofocus>
                </div>
                 <label class="control-label col-md-2">Register program</label>
                <div class="col-md-3">
        <?php include ("student_cate.php"); ?>
                </div>
                 </div> 
                   <input  type="hidden" class="form-control" id="tb_std_duration" name="tb_std_duration" value="25/5/2016 to 25/7/2016" >
                   <input  type="hidden" class="form-control" id="tb_std_status_id" name="tb_std_status_id" value="2" >

<legend>7.Supporting documents</legend>
    <div class="form-group">
              <label class="control-label col-md-2">Profile image</label>
              <div class="col-md-4">
               <input  type="file" id="input050"  class="form-control" name="tb_std_img" id="tb_std_img"  />       
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-md-2">Transcript</label>
              <div class="col-md-4">
               <input  type="file" id="input05" class="form-control" name="tb_std_imggpa" id="tb_std_imggpa" required autofocus  />

              </div>
            </div>

  </br>

    <div class="form-group" align="center">
      <div class="col-lg-8 col-lg-offset-2">
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
 

  
  
         
</div>
</div>

 
  </br>
    </br>


  <!-- FOOTER -->
  <footer>
    <a class="pull-right" href="#"> <button class="btn btn-info btn-xs"><i class="fa fa-arrow-circle-up fa-2x"></i> Back to top</button></a>
     <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-copyright"></i> <strong>Designed By 2019·</strong>
                            </li>
  </ol>
   
  </footer>

</div><!-- /.container -->
   <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
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
         <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</html>