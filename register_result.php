<?php 
	require_once 'include.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];

	try {
		if (fillout($_POST) == false) {
			throw new Exception("Fill the blank error");	
		}
		if($password2 != $password){
			throw new Exception("two password are not equal");
		}
		if (strlen($password) < 6) {
			throw new Exception("password must more than six characters");
			
		}
		register($username,$password,$email);
		$_SESSION['username'] = $username;
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
			<meta http-equiv="refresh" content="1; url=index.php">
			<style>
				body{
					margin-top: 0;
				}
			</style>
		</head>
		<body>
		<?php
		show_header($username);
		show_logo();
		show_message("Your register is successful, Go to the index page to buy.");
		show_footer();
		show_html_end();
	} catch (Exception $e) {
		show_html_start();
		show_header();
		show_logo();
		show_message($e->getMessage());
		show_footer();
		show_html_end();
		exit;
	}









 ?>