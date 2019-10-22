<?php
include ("../sql_function/connect.php");
$sql = "SELECT * FROM  tb_faculty ORDER BY tb_faculty_name";
$result = mysql_query($sql) or die (mysql_error());
?>
<select class="form-control" id="tb_dean_faculty" name="tb_dean_faculty" >
	<option value="no">เลือกคณะ</option>
	<?php
	while($row = mysql_fetch_array($result)){
	?>
	<option value="<?php echo $row['tb_faculty_name']; ?>"><?php echo $row['tb_faculty_name']; ?></option>
	<?php
	}
	mysql_close();
	?>
</select>