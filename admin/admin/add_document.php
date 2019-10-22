<!-- Modal -->
<div class="modal fade" id="add_document" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มเอกสาร</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return validateAddTeacher();" action="../sql_function/sql_add_document.php">
           
             
                
          
            <div class="form-group">
              <label class="control-label col-md-2">ชื่อเอกสาร</label>
              <div class="col-md-3">  
                <input type="text" class="form-control" id="tb_doc_name" name="tb_doc_name" placeholder="ชื่อเอกสาร" required autofocus>
              </div>
            </div>

            <div class="form-group">
               <label class="control-label col-md-2">คำอธิบาย</label>
                <div class="col-md-8">
                 <textarea type="text" rows="4" class="form-control" id= "tb_doc_des" name="tb_doc_des" placeholder="คำอธิบาย" required autofocus> </textarea>
                </div>
                  </div>
           
            
            
            
           <div class="form-group">
    <label class="control-label col-md-2">ไฟล์</label>
    <div class="col-md-4">
    <input type="file" class="form-control" name="fileUpload" id="fileUpload" />
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