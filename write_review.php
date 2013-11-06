<?php 
	require 'include.php';
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
	if(isset($_POST['orderid']) && isset($_POST['itemid']))
	{
		$orderid = $_POST['orderid'];
		$itemid = $_POST['itemid'];
		$receive = receive_order($orderid);
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="2; url=login.php">
		</head>
		<body>
			<p>No order be selected ! <br>Back to Home in 2 seconds ~</p>
		</body>
		</html>
		<?php
		exit();
	}
	if ($receive == false) {
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="2; url=show_order_shiped.php">
		</head>
		<body>
			<p>Receive Error ! <br>Back to order in 2 seconds ~</p>
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
	<title>Write Review</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script src="./js/write_review.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/write_review.css">
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
		<div id="writeReviewForm">
			<form>
				<?php echo "<input type=\"hidden\" id=\"itemid\" value=\"".$itemid."\">"; ?>
				<textarea name="content" id="review" cols="30" rows="10"></textarea><br>
				<input type="button" id="write" value="submit">
			</form>
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