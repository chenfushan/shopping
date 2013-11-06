<?php 
	require_once 'include.php';

	function admin_login($adminname,$password)
	{
		$db = db_connect();
		$result = $db->query("select * from admin where adminname = '".$adminname."' and password = sha1('".$password."');");
		if (!$result) {
			return false;
		}
		$num = $result->num_rows;
		if($num == 1){
			return true;
		}
		return false;
	}

?>