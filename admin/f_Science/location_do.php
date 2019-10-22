<?php
include ("../../sql_function/connect.php");
$sqlm = "SELECT * FROM tb_localtion ORDER BY tb_lo_name";
$rsm = mysql_query($sqlm) or die (mysql_error());
?>
<select class="form-control" id="tb_lo_id" name="tb_lo_id">
	<option value="no">เลือกสถานที่ปฏิบัติการ</option>
	<?php
	while($rowm = mysql_fetch_array($rsm)){
	?>
	<option value="<?php echo $rowm['tb_lo_id']; ?>">
		<?php echo $rowm['tb_lo_name']; ?>
	</option>
	<?php
	}
	mysql_close();
	?>
</select>