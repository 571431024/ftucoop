<?php
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS' ,'');
	define('DB_NAME', 'ci_fst');

class mainFunction
{
	function __construct()
	{
		$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('Connection Problem :'.mysql_error());
		mysql_select_db(DB_NAME, $conn);
		mysql_query("SET NAMES utf8");
	}
	public function insert($table,$values)
	{
		//echo "INSERT INTO $table  VALUES($values)<br/>";
		$res = mysql_query("INSERT INTO $table VALUES($values)") or die("Error :".mysql_error());
		return $res;
	}
	public function select($table)
	{
		$res=mysql_query("SELECT * FROM ".$table) or die("Error :".mysql_error());
		return $res;
	}
	public function selectWhere($table,$condition)
	{
		//echo "SELECT * FROM ".$table." WHERE ".$condition;
		$sql = "SELECT * FROM ".$table." WHERE ".$condition;
		$res=mysql_query($sql) or die("Error :".$sql);
		return $res;
	}
	public function selectLeftJoin($table,$table2,$condition)
	{
		//echo "SELECT * FROM ".$table." LEFT JOIN ".$table2." ON ".$condition;
		$res=mysql_query("SELECT * FROM ".$table." LEFT JOIN ".$table2." ON ".$condition) or die("Error :".mysql_error());
		return $res;
	}
	public function selectOrder($table,$orderBy)
	{
		//echo "SELECT * FROM ".$table." WHERE ".$condition;
		$res=mysql_query("SELECT * FROM ".$table." ".$orderBy) or die("Error :".mysql_error());
		return $res;
	}
	public function selectField($table,$field)
	{
		//echo "SELECT ".$field." FROM ".$table." WHERE ".$condition;
		$res=mysql_query("SELECT ".$field." FROM ".$table) or die("Error :".mysql_error());
		return $res;
	}
	public function selectFieldWhere($table,$field,$condition)
	{
		//echo "SELECT ".$field." FROM ".$table." WHERE ".$condition."<br/>";
		$res=mysql_query("SELECT ".$field." FROM ".$table." WHERE ".$condition) or die("Error :".mysql_error());
		return $res;
	}
	public function selectFieldOrder($table,$field,$orderBy)
	{
		//echo "SELECT ".$field." FROM ".$table." ORDER BY ".$orderBy;
		$res=mysql_query("SELECT ".$field." FROM ".$table." ORDER BY ".$orderBy) or die("Error :".mysql_error());
		return $res;
	}
	public function insertData($table,$array)
	{
		$query=mysql_query("SHOW COLUMNS FROM ".$table) or die("Error :".mysql_error());
		$field = array();
		$values = array();
		while($rw = mysql_fetch_array($query))
		{
			if(!empty($array[$rw[0]]))
			{
				$field[] = $rw[0];
				$values[] = "\"".$array[$rw[0]]."\"";
			}	
		}
		$dataField = implode(",",$field);
		$dataValues = implode(",",$values);
		//echo "INSERT INTO $table ($dataField) VALUES($dataValues)<br/>";
		$res = mysql_query("INSERT INTO $table ($dataField) VALUES($dataValues)") or die("Error :".mysql_error());
	}
	public function updateData($table,$array,$condition)
	{
		$query=mysql_query("SHOW COLUMNS FROM ".$table) or die("Error :".mysql_error());
		$field = array();
		$values = array();
		while($rw = mysql_fetch_array($query))
		{
			if(!empty($array[$rw[0]]))
			{
				$values[] = $rw[0]."='".mysql_real_escape_string($array[$rw[0]])."'";
			}	
		}
		$dataValues = implode(",",$values);
		//echo "UPDATE $table SET $dataValues WHERE $condition";
		$res = mysql_query("UPDATE $table SET $dataValues WHERE $condition") or die("Error :".mysql_error());
	}
	public function update($values,$table,$condition)
	{
		//echo "UPDATE $table SET $values WHERE ".$condition;
		$res = mysql_query("UPDATE $table SET $values WHERE ".$condition) or die("Error :".mysql_error());
		return $res;
	}
	public function deleteData($table,$condition)
	{
		$res = mysql_query("DELETE FROM $table WHERE ".$condition) or die("Error :".mysql_error());
		return $res;
	}
	public function createId($table,$fieldCnt,$title)
	{
		$year = (string)(date("Y")+543);
		$arr = $year[2].$year[3];
		
		$field = "$fieldCnt";
		$order = "$fieldCnt DESC LIMIT 1";
		$query = mysql_query("SELECT $fieldCnt FROM $table ORDER BY $order");
		$row = mysql_fetch_array($query);
		$num = mysql_num_rows($query);
		if($num == 0)
		{
			$id =  "$title-".$arr."-".str_pad(1,6,'000000',STR_PAD_LEFT);
		}
		else
		{
			$arrCut = explode("-",$row[$fieldCnt]);
			$num = $arrCut[2]+1;
			if($arrCut[1] == $arr)
				$id =  "$title-".$arr."-".str_pad($num,6,'000000',STR_PAD_LEFT);
			else
				$id =  "$title-".$arr."-".str_pad(1,6,'000000',STR_PAD_LEFT);
		}
		return $id;
	}
	public function createIdGnrl($table,$fieldCnt)
	{
		$year = (string)(date("Y")+543);
		$arr = $year[2].$year[3];
		
		$field = "$fieldCnt";
		$order = "$fieldCnt DESC LIMIT 1";
		$query = mysql_query("SELECT $fieldCnt FROM $table ORDER BY $order");
		$row = mysql_fetch_array($query);
		$num = mysql_num_rows($query);
		if($num == 0)
		{
			$id =  $arr."-".str_pad(1,6,'000000',STR_PAD_LEFT);
		}
		else
		{
			$arrCut = explode("-",$row[$fieldCnt]);
			$num = $arrCut[1]+1;
			if($arrCut[0] != $arr)
				$id =  $arr."-".str_pad(1,6,'000000',STR_PAD_LEFT);
			else
				$id =  $arr."-".str_pad($num,6,'000000',STR_PAD_LEFT);
		}
		return $id;
	}
	function lib_psulogin_wsdl($id,$password)
    {
		$client = new nusoap_client('https://passport.psu.ac.th/authentication/authentication.asmx?WSDL', true);
		$err = $client->getError();
		if ($err) {
				$str_return =  $err ;
		}
		$client->soap_defencoding='UTF-8';
		$client->decode_utf8=false;
		$result = $client->call('GetUserDetails', array('username' => $id,'password' => $password));
		$proxy = $client->getProxy();
		$person = array('username' => $id,'password' => $password);
		$result = $proxy->Authenticate($person);
		$xxxresult = $proxy->GetUserDetails($person);
		if ($proxy->fault) {
				$str_return = $result;
				//print_r($str_return);
		}else{
			  $err = $proxy->getError();
			 if($err){
				   $str_return =  $err ;
				   echo $str_return;
			 }else{
				   $login = $result['AuthenticateResult'];
			 }
		}
		$prefix = $xxxresult['GetUserDetailsResult']['string'][12];
		$name = $xxxresult['GetUserDetailsResult']['string'][1];
		$sname = $xxxresult['GetUserDetailsResult']['string'][2];
		$id_cart = $xxxresult['GetUserDetailsResult']['string'][5];
		$faculty = $xxxresult['GetUserDetailsResult']['string'][8];
		$gender = $xxxresult['GetUserDetailsResult']['string'][4];
		//list($login,$name,$sname,$staff_id,$sex,$per_id,$a7,$a8,$fac_name,$a10,$campus_name,$a12,$title_name,$email,$a15) = $xxxresult;
		
		$return=array($login,$prefix,$name,$sname,$id_cart,$faculty,$gender);
		return $return;
	}
}

?>