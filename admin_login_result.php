<?php 
	require_once 'include.php';
	session_start();
	$adminname = $_POST['adminname'];
	$password = $_POST['password'];

	$result = admin_login($adminname,$password);

	if ($result == true) {
		$_SESSION['admin'] = $adminname;
		echo "true";
	}else{
		echo "log error !";
	}



 ?>