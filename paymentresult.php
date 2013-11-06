<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	}else{
		echo "false1";
		exit();
	}
	$order_id = $_POST['orderid'];
	update_orderid($order_id);
	delete_order($username);
	echo "true";
 ?>