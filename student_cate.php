<?php
require "connect.php";
$sqlw = "SELECT * FROM tb_student_category ORDER BY tb_stdcate_cate";
$rsw = mysql_query($sqlw) or die(mysql_error());
?>
<select class="form-control" id="tb_stdcate_id" name="tb_stdcate_id">
<option value="no">เลือกประเภทนักศึกษา</option>
<?php
while ($roww = mysql_fetch_array($rsw)) {
?>
<option value="<?php echo $roww['tb_stdcate_id']; ?>"><?php echo $roww['tb_stdcate_cate']; ?> </option>
<?php
}
mysql_close();
?>
</select>