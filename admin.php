<?php 
	require_once 'include.php';
	session_start();
//	echo $_SESSION['admin'];
	if(isset($_SESSION['admin']))
	{
		$username = $_SESSION['admin'];
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
	<title>admin</title>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/admin.css">
</head>
<body>
	<div id="page">
		<!-- <div id="header">
			<div id="adminName">
				<span>Welcome Administrator</span>
				<a href="./admin.php"><?php echo $_SESSION['admin']; ?></a>				
			</div>
			<div id="menu">
				<a href="additem.php"><span>Add Items</span></a>
				<a href="unshiporder.php"><span>Viewing Order</span></a>
				<a href="Modify Items">Modify Items</a>
			</div>
		</div> -->
		<?php admin_show_header(); ?>
		<div id="admin-menu">
			<h1>Admin menu</h1>
			<ul class="menu-list">
				<li><a href="additem.php">Add Items</a></li>
				<li><a href="#">Viewing Order</a></li>
				<ul>
					<li class="order"><a href="completeorder.php">Completed Orders</a></li>
					<li class="order"><a href="unshiporder.php">Unshipped Orders</a></li>
					<li class="order"><a href="NoRecv.php">No Receipt Of Orders</a></li>
				</ul>	
				<li><a href="select_modify_category.php">Modify Items</a></li>
			</ul>
		</div>
		<div id="footer">
			<ul id="foot">
				<li><a href="./about.html">About us</a></li>
				<li><a href="./suggestion.html">Any suggestion</a></li>
				<li><a href="./Connectus.html">Connect us</a></li>
				<li><a href="./Teacher.html">Advisor</a></li>
				<li><a href="./Version.html">Website Version</a></li>
				<span>@class ProjectManager Group one</span>
			</ul>
		</div>
	</div>	
</body>
</html>