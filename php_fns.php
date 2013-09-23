<?php 
	require_once 'include.php';
	function fillout($post)
	{
		foreach ($post as $key => $value) {
			if(!isset($key) || ($value == ''))
			{
				return false;
			}
		}
		return true;
	}
	function check_login_user()
	{
		if (isset($_SESSION['username'])) {
			
		}else{
			throw new Exception("You have not login");
			
		}
	}
	function db_result_to_array($result)
	{
		$res_array = array();
		for ($count=0; $row = $result->fetch_assoc(); $count++) { 
			$res_array[$count] = $row;
		}
		return $res_array;
	}
	function register($username,$password,$email)
	{
		$db=db_connect();
		$result = $db->query("select * from user where username = '".$username."'");
		if (!$result) {
			throw new Exception("Could not execute the query");
			
		}
		if ($result->num_rows > 0) {
			throw new Exception("The username have been register! try anoter");
			
		}
		$result = $db->query("insert into user values('".$username."',sha1('".$password."'),'".$email."')");
		if (!$result) {
			throw new Exception("Could insert into databases");
		}
		else{
			return true;
		}
	}
/****************************************************************************/	
	function cgt_get_itemarray($cgtid)
	{
		if ((!$cgtid) || ($cgtid == '')) {
			return false;
		}

		$db = db_connect();
		$query = "select id,name,price from item where cgt_id='".$cgtid."'";
		$result = @$db->query($query);
		if (!$result) {
			return false;
		}
		$num_item = @$result->num_rows;
		if ($num_item == 0) {
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
	function cgo_get_itemarray($cgoid)
	{
		if ((!$cgoid) || ($cgoid == '')) {
			return false;
		}

		$db = db_connect();
		$query = "select id,name,price from item where cgo_id='".$cgoid."'";
		$result = @$db->query($query);
		if (!$result) {
			return false;
		}
		$num_item = @$result->num_rows;
		if ($num_item == 0) {
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
	function search_get_itemarray($itemname)
	{
		if ((!$itemname) || ($itemname == '')) {
			return false;
		}

		$db = db_connect();
		$query = "select id,name,price from item where name like'*".$itemname."*'";
		$result = @$db->query($query);
		if (!$result) {
			return false;
		}
		$num_item = @$result->num_rows;
		if ($num_item == 0) {
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
	function id_get_details($id)
	{
		$db = db_connect();
		$query = "select id,name,price,info from item where id = '".$id."'";
		$result = @$db->query($query);
		if (!$result) {
			return false;	
		}
		$item_detail = @$result->num_rows;
		if ($item_detail == 0) {
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}

/****************************************************************************/

 ?>