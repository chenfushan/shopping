<?php 
	require_once 'include.php';
	session_start();
	$order_id = $_POST['order_id'];
	if (isset($_POST['add'])) {
		$addressid = $_POST['add'];
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=order.php">
		</head>
		<body>
			<p>Please Select a address !</p>
		</body>
		</html>
		<?php
		exit();
	}
	
	$total_price = $_POST['total_price'];
	// $id = $_POST['id'];
	// $name = $_POST['name'];
	// $address = $_POST['address'];
	// $city = $_POST['city'];
	// $state = $_POST['state'];
	// $country = $_POST['country'];
	// $zip = $_POST['zip'];
	
	// $phonenumber = $_POST['phonenumber'];
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
	<script src="./js/payment.js"></script>
	<link rel="stylesheet" href="./css/order.css">
	<link rel="stylesheet" href="./css/payment.css">
	<link rel="shortcut icon" href="./images/logo.ico">
	<script>
		function notif () {
			alert("Pay Successfully ! Please Wait ...");
			update_orderid($order_id);
		}
	</script>
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
			<div class="process-text">Write your review</div>
		</div>
		<div id="pay_result">
			<?php 
				$pay = payment($total_price);
				if ($pay) {
					if(insert_address($order_id,$addressid))
						{
							echo "Order Have Been Saved ! Please Pay For Order !";
						}
						else{
								echo "<br>Order error! Please Retry!";
						}
				}else{
					echo "Order error! Please Retry!";
				}
				echo "<input type=\"hidden\" id=\"order_id\" value=\"".$order_id."\" />";
			 ?>
			 <br>
			 <input id="pay_button" type="button" value="Pay" />
			 <div id="back_homepage">
			 	<a href="./index.php">Back HomePage>></a>
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