<!-- Modal -->
<div class="modal fade" id="add_location" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มสถานที่</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return validateAddTeacher();" action="../sql_function/sql_add_location.php">
           
             
                
          
            <div class="form-group">
              <label class="control-label col-md-2">ชื่อสถานที่</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_lo_name" name="tb_lo_name" placeholder="ชื่อสถานที่" required autofocus>
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">ที่ตั้ง</label>
                <div class="col-md-8">
                 <textarea type="text" rows="4" class="form-control" id= "tb_lo_address" name="tb_lo_address" placeholder="ที่ตั้ง"> </textarea>
                </div>
                  </div>
           
            
            
            
            <div class="form-group">
               
                <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="tb_lo_tel" name="tb_lo_tel" placeholder="เบอร์โทรศัพท์" required autofocus>
                </div>
                 <label class="control-label col-md-2">Email</label>
                <div class="col-md-3">
                 <input type="email" class="form-control" id="tb_lo_email" name="tb_lo_email" placeholder="กรอกอีเมลล์" required autofocus>
                  
                </div>
             </div>
             
               <div class="form-group">
    <label class="control-label col-md-2">แผนที่รูปภาพ</label>
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