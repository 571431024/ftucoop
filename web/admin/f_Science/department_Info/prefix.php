<?php
include ("../../sql_function/connect.php");
$sql = "SELECT * FROM tb_prefix ORDER BY tb_prefix_name";
$result = mysql_query($sql) or die (mysql_error());
?>
<select class="form-control" id="tb_prefix_id" name="tb_prefix_id" >
	<option value="no">เลือกคำนำหน้าชื่อ</option>
	<?php
	while($row = mysql_fetch_array($result)){
	?>
	<option value="<?php echo $row['tb_prefix_id']; ?>"><?php echo $row['tb_prefix_name']; ?></option>
	<?php
	}
	mysql_close();
	?>
</select>
