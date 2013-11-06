<?php 
	require_once 'include.php';
	session_start();
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
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
	<title>Order</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<link rel="stylesheet" href="./css/order.css">
	<link rel="stylesheet" href="./css/payment.css">
	<link rel="stylesheet" href="./css/changePassword.css">
	<link rel="shortcut icon" href="./images/logo.ico">
	<script src="./js/changePassword.js"></script>
</head>
<body>
	<div id="page">
		<header>
			<div id="header">
				<?php 
				if (isset($_SESSION['username'])) {
					show_header($_SESSION['username']);
				} else {
					show_header();
				}
				 ?>
			</div>
		</header>
<!-- 		<div id="process">
			<div class="process-text">Insert the order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Pay for order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Confirm received!</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Write your review</div>
		</div> -->
		<div id="pay_result">
			<div id="changePassword">
				<form>
					<span>Old Password:</span>
					<input type="password" id="oldPassword" maxlength="20" required>
					<br>
					<span>New Password:</span>
					<input type="password" id="newPassword" maxlength="20" required>
					<br>
					<span>Confirm Password:</span>
					<input type="password" id="confirmPassword" maxlength="20" required>
					<br>
					<input type="button" id="change" value="Submit">
				</form>
			</div>
		</div>
		<hr>
		<footer>
			<div id="footer">
				<div id="footer">
					<div class="footer1">
						<ul class="website">
							<h4 class="foot-title">Get To Know Us</h4>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Our Planet</a></li>
							<li><a href="#">Community</a></li>
						</ul>
					</div>
					<div class="footer2">
						<ul class="website">
							<h4 class="foot-title">Make Money With Us</h4>
							<li><a href="#">Sell on TianGou</a></li>
							<li><a href="#">Advertise Your Products</a></li>
							<li><a href="#">Become an Affiliate</a></li>
							<li><a href="#">Independently Publish With Us</a></li>
						</ul>
					</div>
					<div class="footer3">
						<ul class="website">
							<h4 class="foot-title">Let Us Help You</h4>
							<li><a href="#">Your Account</a></li>
							<li><a href="#">Payment & Refund</a></li>
							<li><a href="#">Send & Delivery</a></li>
							<li><a href="#">Help ...</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>