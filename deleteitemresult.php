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

	$result = admin_delete_item($id);

	if ($result == true) {
		echo "true";
	}else{
		echo "false".$result;
	}

 ?>