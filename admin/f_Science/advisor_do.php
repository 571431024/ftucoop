<?php
include ("../../sql_function/connect.php");
$sqlm = "SELECT * FROM tb_advisor ORDER BY tb_ads_name";
$rsm = mysql_query($sqlm) or die (mysql_error());
?>
<select class="form-control" id="tb_ads_id" name="tb_ads_id">
	<option value="no">เลือกอาจารย์นิเทศ</option>
	<?php
	while($rowm = mysql_fetch_array($rsm)){
	?>
	<option value="<?php echo $rowm['tb_ads_id']; ?>"><?php echo $rowm['tb_ads_name']; ?></option>
	<?php
	}
	mysql_close();
	?>
</select>