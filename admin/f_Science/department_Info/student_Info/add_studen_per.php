<!-- Modal -->
<div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มบันทึกการฝึกวิชาชีพ </h4>
      </div>

      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post"  action="../../../sql_function/sql_add_student_per.php">


            <div class="form-group">
              <label class="control-label col-md-2">หัวข้อ</label>
              <div class="col-md-6">  
                <input type="text" class="form-control" id="tb_rp_topic" name="tb_rp_topic" placeholder="หัวข้อ" required autofocus>
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-md-2">รายละเอียด</label>
              <div class="col-md-8">  
                <textarea type="text" rows="15" class="form-control" id= "tb_rp_describtion" name="tb_rp_describtion" placeholder="รายละเอียด" required autofocus> </textarea>
              </div>
              </div>

              <div class="form-group">
              <label class="control-label col-md-2">ไฟล์แนบ</label>
              <div class="col-md-4">
               <input  type="file" class="form-control" name="tb_rp_file" id="tb_rp_file"  />       
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