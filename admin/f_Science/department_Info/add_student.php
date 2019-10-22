<!-- Modal -->
<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มนักศึกษา</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post"  action="../sql_function/sql_add_student.php">
            <div class="form-group">
              <label class="control-label col-md-2">รหัสนักศึกษา</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_std_identification" name="tb_std_identification" placeholder="กรอกรหัสนักศึกษา" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">รหัสผ่าน</label>
              <div class="col-md-3">
                <input type="password" class="form-control" id="tb_std_password" name="tb_std_password" placeholder="กรอกรหัสผ่าน" required autofocus>
              </div>  
            
            </div>
            
             <div class="form-group">
                <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                <div class="col-md-3">
				<?php include ("../admin/prefix.php"); ?>
                </div>
                 <label class="control-label col-md-2">ประเภทนักศึกษา</label>
                <div class="col-md-3">
        <?php include ("../admin/student_cate.php"); ?>
                </div>



                  </div>
                
          
            <div class="form-group">
              <label class="control-label col-md-2">ชื่อ</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_std_name" name="tb_std_name" placeholder="ชื่อ" required autofocus>
              </div>
               <label class="control-label col-md-2">นามสกุล</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_std_lastname" name="tb_std_lastname" placeholder="นามสกุล" required autofocus>
                </div>
            </div>
            
            
            
            <div class="form-group">
                <label class="control-label col-md-2">เพศ</label>
                <div class="col-md-3">
                 <select class="form-control" id="tb_std_sex" name="tb_std_sex">
                            <option value="no">เลือกเพศ</option>
                           
                            <option>ชาย</option>
                            <option>หญิง</option>
                          
                          </select>
                  
                </div>
               <label class="control-label col-md-2">สาขา</label>
                <div class="col-md-3">
                 <select class="form-control" id="tb_std_major" name="tb_std_major">
                            <option value="no">เลือกสาขา</option>
                           
                            <option>เทคโนโลยีสารสนเทศ</option>
                            <option>วิจัยและพัฒนาผลิตภัณฑ์ฮาลาล</option>
                            <option>ชีวะประยุกต์</option>
                            <option>เคมีประยุกต์</option>
                          
                          </select>
                  
                </div>
             </div>
              <div class="form-group">
                <label class="control-label col-md-2">ชั้นปี</label>
                <div class="col-md-3">
                 <select class="form-control" id="tb_std_year" name=" tb_std_year">
                            <option value="no">เลือกชั้นปี</option>
                           
                            <option>3</option>
                            <option>4</option>
                          
                          </select>
                  
                </div>
          
                  <label class="control-label col-md-2">วันเกิด</label>
                  <div class="col-md-3">
                    <input class="form-control" type="date" id="tb_std_birthday" name="tb_std_birthday">
                  </div>
                </div>


                 <div class="form-group">

                   <label class="control-label col-md-2">เบอร์โทรติดต่อ</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_std_tel" name="tb_std_tel" placeholder="เบอร์โทรติดต่อ">
                </div>
            
              <label class="control-label col-md-2">Email</label>
              <div class="col-md-4">  
                <input type="text" class="form-control" id="tb_std_email" name="tb_std_email" placeholder="Email" required autofocus>
              </div>
              </div>
              

             <div class="form-group">
              <label class="control-label col-md-2">ที่อยู่</label>
              <div class="col-md-7">  
                <textarea type="text" rows="4" class="form-control" id= "tb_std_address" name="tb_std_address" placeholder="ที่อยู่"> </textarea>
              </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-2">เลือกพี่เลี้ยง</label>
                <div class="col-md-5">
        <?php include ("../admin/mentor_select.php"); ?>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-md-2">อาจารย์ที่ปรึกษา</label>
                <div class="col-md-5">
        <?php include ("../admin/advisor_select.php"); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">สถานที่ปฏิบัติการ</label>
                <div class="col-md-5">
        <?php include ("../admin/location_do.php"); ?>
                </div>
              </div>

               <div class="form-group">
              <label class="control-label col-md-2">รูปโปรไฟล์</label>
              <div class="col-md-4">
               <input  type="file" class="form-control" name="fileUpload" id="fileUpload"  />       
              </div>
            </div>




        </div><!-- /.row-->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> บันทึก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> ยกเลิก</button>
      </div>
      </form><!--/.form -->
    </div>
  </div>
</div>