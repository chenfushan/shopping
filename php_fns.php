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
	function login($username,$password)
	{
		$db = db_connect();
		$result = $db->query("select * from user where username='".$username."' and password=sha1('".$password."')");
		if (!$result) {
			throw new Exception("Could not execute the query");
			
		}
		$num = $result->num_rows;
		if($result->num_rows > 0){
			return true;
		}else{
			throw new Exception("Could not login".$num);
		}
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
	//	echo $itemname;
		$db = db_connect();
		$query = "select id,name,price from item where name like'%".$itemname."%'";
		$result = @$db->query($query);
		if (!$result) {
	//		echo "false1";
			return false;
		}
	//	echo "right1";
		$num_item = @$result->num_rows;
		if ($num_item == 0) {
//			echo "no item";
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
	function id_get_message($id)
	{
		$db = db_connect();
		$query = "select message from message where id = '".$id."'";
		$result = @$db->query($query);
		if(!$result)
		{
			return false;
		}
		$message = @$result->num_rows;
		if($message == 0)
		{
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}

/****************************************************************************/
function insert_order($id,$username,$num,$price)
{
	$db = db_connect();
	$result = $db->query("insert into order_id values('','".$id."','".$username."','".$num."','".$price."',now(),null);");
	if (!$result) {
		echo "could't execute the query to insert into database!";
	}else{
		$order_id = $db->insert_id;
		return $order_id;
	}
}

/****************************************************************************/
function payment($total_price)
{
	return true;
}
function insert_address($order_id,$name,$address,$city,$state,$country,$zip,$phonenumber)
{
	$db = db_connect();
	$name = addslashes($name);
//	echo "--".$city."--";
	$address = addslashes($address);
	$city = addslashes($city);
	$state = addslashes($state);
	$country = addslashes($country);
//	echo $order_id.$name.$address.$city.$state.$country.$zip;
	$query = "insert into address values('".$order_id."','".$name."','".$address."','".$city."','".$state."','".$country."','".$zip."','".$phonenumber."');";              
//	echo "--".$query."--";
	$result = $db->query($query);
	if (!$result) {
		echo "couldn't execute the query insert address!";
	}else{
		return true;
	}
	return true;
}
function update_orderid($order_id)
{
	$db = db_connect();
	$result = $db->query("update order_id set enddate = now() where orderid = '".$order_id."';");
	if (!$result) {
		echo "couldn't not execute query update order_id!";
	}else{
		return true;
	}
	return true;
}
/****************************************************************************/
function insert_address_select($username,$name,$address,$city,$state,$country,$zip,$phonenumber)
{
	$db = db_connect();
	$result = $db->query("insert into address_select values ('','".$username."','".$name."',
		'".$address."','".$city."','".$state."','".$country."','".$zip."','".$phonenumber."');");
	if (!$result) {
		return false;
	}else{
		return true;
	}
}
 ?>