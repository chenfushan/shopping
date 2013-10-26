<?php 
	require_once 'include.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	try {
//		check_login_user();

		login($username,$password);
		$_SESSION['username'] = $username;

		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
			<meta http-equiv="refresh" content="1; url=index.php">
		</head>
		<body>
		<?php
		show_header($username);
		show_logo();
		show_message("You login is successful, Go to the index page to buy.");
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