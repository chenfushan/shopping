<?php 
	include 'include.php';
	session_start();
	if (isset($_SESSION['username'])) {
		$usernmae = $_SESSION['username'];
	}else{
		echo "false1";
	}
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	$phonenumber = $_POST['phonenumber'];

	if (insert_address_select($usernmae,$name,$address,$city,$state,$country,$zip,$phonenumber)) {
		echo "true";
	}else{
		echo "false2";
	}
 ?>