<?php 
	require_once 'include.php';
	session_start();
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
		<div id="address-select">
				<form action="cartpayment.php" method="post">
				<?php 
			//	echo $username;
					$result = get_address($username);
					if ($result == false) {
						?>
						<a href="add_address.php" target="view_window">Add a new Address</a>
						<?php
					}else{
						echo "<div>";
						display_address($result);
						?>
						<div class="add">
							<div id="a" style="margin-top:30px;">
								<a href="add_address.php" target="view_window">Add a new Address</a>
							</div>
						</div>
						</div>
						<?php
						echo "<input type=\"hidden\" value=\"".count($result,0)."\" id=\"addnum\" />
						<div id=\"confirm\"><input type=\"submit\" value=\"Confirm\"></div>"; 
					}
				 ?>

				</form>
				
			</div>
<!-- 			<div id="pay">
				<input type="button" id="pay_button" value="Pay">
			</div> -->
	 	<?php show_html_footer() ?>
 	</div>
</body>
</html>