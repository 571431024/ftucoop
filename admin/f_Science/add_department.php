<!-- Modal -->
<div class="modal fade" id="add_department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>
                    เพิ่มอาจารย์ประจำสาขา</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-horizontal" method="post" onsubmit="return validateAddTeacher();" action="../sql_function/sql_add_department.php">
                        <div class="form-group">
                            <label class="control-label col-md-2">รหัสบุคลากร</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_dept_id_log" name="tb_dept_id_log"
                                    placeholder="กรอกรหัสบุุคลากร" required autofocus>
                            </div>
                            <label class="control-label col-md-2">รหัสผ่าน</label>
                            <div class="col-md-3">
                                <input type="password" class="form-control" id="tb_dept_password" name="tb_dept_password"
                                    placeholder="กรอกรหัสผ่าน" required autofocus>
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
                                <input type="text" class="form-control" id="tb_dept_name" name="tb_dept_name"
                                    placeholder="ชื่อ" required autofocus>
                            </div>
                            <label class="control-label col-md-2">นามสกุล</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_dept_lastname" name="tb_dept_lastname"
                                    placeholder="นามสกุล" required autofocus>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="control-label col-md-2">คณะ</label>
                            <div class="col-md-3">
                                <select class="form-control" id="tb_dept_faculty" name="tb_dept_faculty">
                                    <option value="no">เลือกคณะ</option>
                                </select>
                            </div>

                            <label class="control-label col-md-2">สาขาวิชา</label>
                            <div class="col-md-3">
                                <select class="form-control" id="tb_dept_major" name="tb_dept_major">
                                    <option value="no">เลือกสาขา</option>
                                </select>
                            </div>
                        </div> -->
                
                        <div class="form-group">
                            <label class="control-label col-md-2">Email</label>
                            <div class="col-md-3">
                                <input type="email" class="form-control" id="tb_dept_email" name="tb_dept_email"
                                    placeholder="กรอกอีเมลล์" required autofocus>
                            </div>
                            <label class="control-label col-md-2">เบอร์โทรศัพท์</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="tb_dept_tel" name="tb_dept_tel" placeholder="เบอร์โทรศัพท์">
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