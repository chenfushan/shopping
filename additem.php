<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=admin_login.php">
		</head>
		<body>
			<p>Please Login First</p>
		</body>
		</html>
		<?php
		exit();
	}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add item</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script src="./js/additem.js"></script>
	<link rel="stylesheet" href="./css/additem.css">
</head>
<body>
	<div id="page">
		<?php admin_show_header(); ?>
		
		<div id="additemform">
			<form>
			<input type="file" id="item-pic">
			<br>
			<input type="text" id="name" placeholder="name" required>
			<br>
			<select name="cgo_id" id="cgo_id">
				<option value="1">Electrionics &amp; computer</option>
				<option value="2">Books &amp; Audio</option>
				<option value="3">Toy &amp; Baby</option>
				<option value="4">Clothing</option>
			</select>
			<br>
			<select name="cgt_id" id="cgt_id">
				<!-- <option value="1">TV &amp; video</option>
				<option value="2">Home Audio</option>
				<option value="3">camera photo</option>
				<option value="4">video games</option>
				<option value="5">Mp3 player</option>
				<option value="6">laptop &amp; Tablets</option> -->
			</select>
			<br>
			<input type="text" id="price" placeholder="price" required>
			<br>
			<textarea name="item_info" id="info" cols="30" rows="10"></textarea>
			<br>
			<input type="button" id="add_button" value="Add">
		</form>
		</div>	
	</div>
	
</body>
</html>