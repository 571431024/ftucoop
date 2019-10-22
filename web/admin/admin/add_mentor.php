<!-- Modal -->
<div class="modal fade" id="add_mentor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มพี่เลี้ยง</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" method="post" onsubmit="return validateAddTeacher();" action="../sql_function/sql_add_mentor.php">
            <div class="form-group">
              <label class="control-label col-md-2">ไอดีพี่ลี้ยง</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_mentor_id_log" name="tb_mentor_id_log" placeholder="กรอกไอดีพี่เลี้ยง" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-2">รหัสผ่าน</label>
              <div class="col-md-3">
                <input type="password" class="form-control" id="tb_mentor_password" name="tb_mentor_password" placeholder="กรอกรหัสผ่าน" required autofocus>
              </div>  
            
            </div>
            
             <div class="form-group">
                <label class="control-label col-md-2">คำนำหน้าชื่อ</label>
                <div class="col-md-3">
				<?php include ("../admin/prefix.php"); ?>
                </div>
                  </div>
                
          
            <div class="form-group">
              <label class="control-label col-md-2">ชื่อ</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_mentor_name" name="tb_mentor_name" placeholder="ชื่อ" required autofocus>
              </div>
               <label class="control-label col-md-2">นามสกุล</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_mentor_lastname" name="tb_mentor_lastname" placeholder="นามสกุล" required autofocus>
                </div>
            </div>
            
            
            
            <div class="form-group">
                <label class="control-label col-md-2">Email</label>
                <div class="col-md-3">
                 <input type="email" class="form-control" id="tb_mentor_email" name="tb_mentor_email" placeholder="กรอกอีเมลล์" required autofocus>
                  
                </div>
                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_mentor_tel" name="tb_mentor_tel" placeholder="เบอร์โทรศัพท์">
                </div>
             </div>
             
              <div class="form-group">
                <label class="control-label col-md-2">สถานที่ประกอบการ</label>
                <div class="col-md-5">
                <?php include ("../admin/location_do.php"); ?>
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