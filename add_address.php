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
	<link rel="stylesheet" href="./css/order.css">
	<script src="./js/add_address.js"></script>
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
		<div id="process">
			<div class="process-text">Insert the order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Pay for order</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Confirm received!</div>
			<div class="arrow"><img src="./images/arrow.png" alt="arrow"></div>
			<div class="process-text">Write your appraise</div>
		</div>
		<div id="order" style="margin-top: 30px">
			<div id="address">
				<div id="result"></div>
				<form>
					<div class="in-addr" >
						<span>Your Name:</span>
						<input id="name" type="text" name="name" holdplace="" maxlength="60" required></div>
					<div class="in-addr" >
						<span>Your adress:</span>
						<input id="detailaddress" type="text" name="address" holdplace="" maxlength="80" required>
					</div>
					<div class="in-addr" >
						<span>Your City:</span>
						<input id="city" type="text" name="city" holdplace="" maxlength="30" required>
					</div>
					<div class="in-addr" >
						<span>Your State:</span>
						<input id="state" type="text" name="state" holdplace="" maxlength="20" required>
					</div>
					<div class="in-addr">
						<span>Your Country:</span>
						<input id="country" type="text" name="country" holdplace="" maxlength="20" required>
					</div>
					<div class="in-addr">
						<span>Your Zip:</span>
						<input id="zip" type="text" name="zip" holdplace="" maxlength="10" required>
					</div>
					<div class="in-addr">
						<span>Your PhoneNumber:</span>
						<input id="phonenumber" type="text" name="phonenumber" holdplace="" maxlength="20" required>
					</div>
					<div class="in-addr">
						<input type="button" onclick="add()" value="Add">
					</div>					
				</form>
			</div>
		</div>
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
							<li><a href="#">Payment &amp; Refund</a></li>
							<li><a href="#">Send &amp; Delivery</a></li>
							<li><a href="#">Help ...</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>	
</body>
</html>