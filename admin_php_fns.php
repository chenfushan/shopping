<?php 
	require_once 'include.php';

/*************************unshiporder.php***************************************/	

	function get_unship_order()
	{
		$db = db_connect();
		$query = "select i.id,i.name,o.orderid,o.num,o.price from item as i inner join order_id as o on i.id = o.id where enddate is not null and shipdate is null order by orderid limit 15";
		$result = $db->query($query);
		if (!$result) {
			echo "select order info error !";
			return false;
		}
		$order_num = $result->num_rows;
		if ($order_num == 0) {
			echo "There is no item need to be shipped !";
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
	function admin_get_add($orderid)
	{
		$db = db_connect();
		$query = "select ship_name,ship_address,ship_city,ship_state,ship_country,ship_zip,ship_phonenumber from address where orderid = '".$orderid."'";
		$result = $db->query($query);
		if (!$result) {
			echo "select address error!";
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}

/**************************ShipResult.php**************************************/
	function admin_ship_order($orderid)
	{
		$db = db_connect();
		$query = "update order_id set shipdate = now() where orderid = '".$orderid."'";
		$result = $db->query($query);
		if (!$result) {
			echo "update shipdate error !";
			return false;
		}
		return true;
	}
/**************************NoRecv.php**************************************/
	function get_norecv_order()
	{
		$db = db_connect();
		$query = "select i.id,i.name,o.orderid,o.num,o.price from item as i inner join order_id as o on i.id = o.id where enddate is not null and shipdate is not null and recevdate is null order by orderid limit 15";
		$result = $db->query($query);
		if (!$result) {
			echo "select order info error !";
			return false;
		}
		$order_num = $result->num_rows;
		if ($order_num == 0) {
			echo "There is no item need to be received !";
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
/**************************completeorder.php**************************************/
	function get_complete_order()
	{
		$db = db_connect();
		$query = "select i.id,i.name,o.orderid,o.num,o.price from item as i inner join order_id as o on i.id = o.id where enddate is not null and shipdate is not null and recevdate is not null order by orderid limit 15";
		$result = $db->query($query);
		if (!$result) {
			echo "select order info error !";
			return false;
		}
		$order_num = $result->num_rows;
		if ($order_num == 0) {
			echo "There is no item haves been completed !";
			return false;
		}
		$result = db_result_to_array($result);
		return $result;
	}
/**************************additem_selectcgo.php**************************************/
	function get_cgt($cgo_id)
	{
		$db = db_connect();
		$query = "select cgt_id,cat_name from categorytwo where cao_id ='".$cgo_id."'";
		$result = $db->query($query);
		if (!$result) {
			echo "select cgt error!";
			exit();
		}
		$result = db_result_to_array($result);
		return $result;
	}
/**************************additemresult.php**************************************/
	function insert_item_pic($picname, $name, $cgo_id, $cgt_id, $price, $info)
	{
		$picname = addslashes($picname);
		$name = addslashes($name);
		$info = addslashes($info);
		$db = db_connect();
		$result = $db->query("insert into item (id,name,cgo_id,cgt_id,price,info) values(
			'','".$name."','".$cgo_id."','".$cgt_id."',".$price.",'".$info."');");
		if (!$result) {
			echo "insert item error !";
			return false;
		}else{
			$itemid = $db->insert_id;
			$picresult = insert_pic($itemid,$picname);
			if ($picresult == true) {
				return true;
			}else{
				echo "insert pic error !";
				return false;
			}
		}
	}
	function insert_pic($itemid, $picname)
	{
		$db = db_connect();
		$result = $db->query("insert into item_pic values('".$itemid."','".$picname."');");
		if (!$result) {
			return false;
		}else{
			return true;
		}
	}
/**************************updateitemresult.php**************************************/
	function update_item_pic($id ,$picname, $name, $cgo_id, $cgt_id, $price, $info)
	{
		$picname = addslashes($picname);
		$name = addslashes($name);
		$info = addslashes($info);
		$db = db_connect();
		$result = $db->query("update item set name='".$name."', cgo_id='".$cgo_id."',
			cgt_id = '".$cgt_id."', price = '".$price."', info = '".$info."' where id = '".$id."';");
		if (!$result) {
			echo "update item error !";
			return false;
		}else{
			$picresult = update_pic($id,$picname);
			if ($picresult == true) {
				return true;
			}else{
				echo "update pic error !";
				return false;
			}
		}
	}
	function update_pic($id ,$picname)
	{
		$db = db_connect();
		$result = $db->query("update item_pic set pic_name = '".$picname."' where id = '".$id."';");
		if (!$result) {
			return false;
		}else{
			return true;
		}
	}
/**************************deleteitemresult.php**************************************/
	function admin_delete_item($id)
	{
		$db = db_connect();
		$result = $db->query("delete from item_pic where id='".$id."';");
		if (!$result) {
			echo "delete pic error !";
			return false;
		}else{
			return true;
		}
		$result = $db->query("delete from item where id ='".$id."';");
		if (!$result) {
			echo "delete item error !";
			return false;
		}else{
			return true;
		}
	}


?>