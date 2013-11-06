<?php 
	require 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}else{
		echo "Please Login First !";
		exit();
	}

	$id = $_POST['itemid'];
	$picname = $_POST['picname'];
	$name = $_POST['name'];
	$cgo_id = $_POST['cgo_id'];
	$cgt_id = $_POST['cgt_id'];
	$price = $_POST['price'];
	$info = $_POST['info'];

	$result = update_item_pic($id, $picname, $name, $cgo_id, $cgt_id, $price, $info);

	if ($result == true) {
		echo "true";
	}else{
		echo "false".$result;
	}

 ?>