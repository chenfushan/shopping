<?php 
	function db_connect()
	{
		$result = new mysqli('localhost','chen','chenfushan','shopping');
		if (!$result) {
			return false;
		}
		$result->autocommit(TRUE);
		return $result;
	}
 ?>