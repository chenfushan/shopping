<?php 
	require_once 'include.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$result = register($username,$password,$email);
	if ($result == "true") {
		$_SESSION['username'] = $username;
		echo "true";
	}else{
		echo "register failed !";
	}
	
 ?>