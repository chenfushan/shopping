<?php 
	require_once 'include.php';
	session_start();
	if (isset($_GET['itemid'])) {
		$id = $_GET['itemid'];
	}
	if (isset($_POST['item_num'])) {
		$num = $_POST['item_num'];
	}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order</title>
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
			<div class="process-text">Insert the order details</div>
			<div class="process-text">Pay for order</div>
			<div class="process-text">Confirm received!</div>
			<div class="process-text">Write your appraise</div>
		</div>
		<div id="order">
			<div id="order-detail">
				<div id="order-title">
					<span>item</span>
					<span>num</span>
					<span>total price</span>
				</div>
				<div id="order-info">
					<div id="item">
						<img src="" alt="item pic"><span>item Name</span>
					</div>
					<div id="num">
						<span>item nu</span>
					</div>
					<div id="total-price">
						<span>total price</span>
					</div>
				</div>
			</div>
			<div id="address">
				<form action="payment.php?itemid=" method="post">
					<span>Your Name:</span>
					<input type="text" name="name" holdplace="" maxlength="60">
					<span>Your adress:</span>
					<input type="text" name="address" holdplace="" maxlength="80">
					<span>Your City:</span>
					<input type="text" name="city" holdplace="" maxlength="30">
					<span>Your State:</span>
					<input type="text" name="state" holdplace="" maxlength="20">
					<span>Your Country:</span>
					<input type="text" name="country" holdplace="" maxlength="20">
					<span>Your Zip:</span>
					<input type="text" name="zip" holdplace="" maxlength="10">
					<input type="submit" value="Payment">
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