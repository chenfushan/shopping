<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}else{
		echo "Please Login First !!";
		exit();
	}
	$cgo_id = $_POST['cgo_id'];
	$cgtarray = get_cgt($cgo_id);
	$cgt = array();
	foreach ($cgtarray as $row) {
		$cgt_id = $row['cgt_id'];
		$cgt_name = $row['cat_name'];
		$cgt[$cgt_id] = $cgt_name;
	}
	echo json_encode($cgt);
 ?>