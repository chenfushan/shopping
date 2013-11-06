<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	}else{
		echo "Please Login First !!";
		exit();
	}
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];

	$result = change_password($username,$oldPassword,$newPassword);
	if ($result == true) {
		unset($_SESSION['username']);
		session_destroy();
		echo "true";
	}else{
		echo "false".$result;
	}
 ?>