<!-- Modal -->
<div class="modal fade" id="add_ss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> เพิ่มตารางนิเทศ</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return validateAddTeacher();"
            action="../../sql_function/sql_add_ss.php">




            <div class="form-group">
              <label class="control-label col-md-2">วันที่</label>
              <div class="col-md-3">
                <input type="date" class="form-control" id="tb_ss_date" name="tb_ss_date" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2">เริ่มเวลา</label>
              <div class="col-md-3">
                <input type="time" class="form-control" id="tb_ss_timestart" name="tb_ss_timestart" required autofocus>
              </div>
            </div>




            <div class="form-group">
              <label class="control-label col-md-2">เวลาสิ้นสุด</label>
              <div class="col-md-3">
                <input type="time" class="form-control" id="tb_ss_timefinish" name="tb_ss_timefinish" required
                  autofocus>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2">อาจารย์นิเทศ</label>
              <div class="col-md-5">
                <?php include ("../department_Info/advisor_do.php"); ?>
              </div>
            </div>



            <div class="form-group">
              <label class="control-label col-md-2">พี่เลี้ยง</label>
              <div class="col-md-5">
                <?php include ("../department_Info/mentor_select.php"); ?>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2">สถานที่นิเทศ</label>
              <div class="col-md-5">
                <?php include ("../department_Info/location_do.php"); ?>
              </div>
            </div>





        </div><!-- /.row-->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> บันทึก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>
          ยกเลิก</button>
      </div>
      </form>
      <!--/.form -->
    </div>
  </div>
</div>