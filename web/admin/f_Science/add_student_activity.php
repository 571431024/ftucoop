<!-- Modal -->




<div class="modal fade" id="add_student_activity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูลข่าวกิจกรรมนักศึกษา</h4>
      </div>


      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post"  action="../sql_function/sql_add_student_activity.php">


            <div class="form-group">
              <label class="control-label col-md-2">หัวข้อ</label>
              <div class="col-md-6">  
                <input type="text" class="form-control" id="tb_act_title" name="tb_act_title" placeholder="หัวข้อ" required autofocus>
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-md-2">รายละเอียด</label>
              <div class="col-md-8">  
                <textarea type="text" rows="15" class="form-control" id= "tb_act_description" name="tb_act_description" placeholder="รายละเอียด" required autofocus> </textarea>
              </div>
              </div>

              <div class="form-group">
              <label class="control-label col-md-2">รูป</label>
              <div class="col-md-5">
               <input  type="file" id="input050"  class="form-control" name="fileUpload" id="fileUpload"  />       
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-md-2">ไฟล์แนบ</label>
              <div class="col-md-5">
               <input  type="file" id="input05" class="form-control" name="tb_act_file" id="tb_act_file"  />

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