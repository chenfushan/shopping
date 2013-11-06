<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}else{
		echo "No administrator login!";
		exit();
	}
	if (isset($_POST['orderid'])) {
		$orderid = $_POST['orderid'];
	//	echo $orderid;
	}else{
		echo "no order select !";
		exit();
	}
	admin_ship_order($orderid);
	echo "true";
 ?>