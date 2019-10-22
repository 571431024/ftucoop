<?php
include ("../../sql_function/connect.php");
$sqlm = "SELECT * FROM tb_mentor ORDER BY tb_mentor_name";
$rsm = mysql_query($sqlm) or die (mysql_error());
?>
<select class="form-control" id="tb_mentor_id" name="tb_mentor_id">
	<option value="no">เลือกพี่เลี้ยง</option>
	<?php
	while($rowm = mysql_fetch_array($rsm)){
	?>
	<option value="<?php echo $rowm['tb_mentor_id']; ?>"><?php echo $rowm['tb_mentor_name']; ?> <?php echo $rowm['tb_mentor_lastname']; ?></option>
	<?php
	}
	mysql_close();
	?>
</select>