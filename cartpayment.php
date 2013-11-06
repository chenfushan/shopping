<?php
	require_once 'include.php';
	session_start();
	if ($_POST['add']) {
		$addressid = $_POST['add'];
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=paycart.php">
		</head>
		<body>
			<p>Please Choose a address!!</p>
		</body>
		</html>
		<?php
	}
	$addressid = $_POST['add'];
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		$idarray = get_idarray_shoppingcart($username);
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=login.php">
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
	<title>shoppingcart</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script src="./js/paycart.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/paycart.css">
</head>
<body>
	 <div id="page">
	 	<header>
	 		<div id="header">
	 			<?php
	 			if (isset($_SESSION['username'])) {
	 			show_header($_SESSION['username']);
		 		}else{
		 			show_header();
		 		} ?>
	 		</div>
	 	</header>
 		<?php 
 			display_top(); 
 		?>
 		<div id="process">
			<div class="process-text">Insert the order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Pay for order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Confirm received!</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Write your appraise</div>
		</div>
		<hr>
		<div id="pay-result" style="height:100px;margin-top: 30px;">
			<?php 
				$save_order = insert_order_address($idarray, $username, $addressid);
				if ($save_order == true) {
					echo "Order Have Been Saved !! <br />Please Pay For The Item(s) ~";
				}else{
					echo "I am sorry ~ can't save order ~";
				}			
			 ?>
			</div>
			<div id="pay" style="margin-bottom: 30px;height: 100px;">
				<input type="button" id="pay_button" value="Pay">
				<hr>
			</div>		
	 	<?php show_html_footer() ?>
 	</div>
</body>
</html>