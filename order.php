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
			<div id="address">
				<form action="payment.php?itemid=" method="post">
					<span>Your Name:</span>
					<input type="text" name="name" holdplace="" maxlength="60">
					<span>Your adress:</span>
					<input type="text" name="address" holdplace="" maxlength="80">
					<span>Your City:</span>
					<input type="text" name="city" holdplace="" maxlength="30">
					<span>Your State:</span>
					<input type="text" name="state" holdplace="" maxlength="">
					<span>Your Country:</span>
					<input type="text" name="country" holdplace="" maxlength="20">
					<span>Your Zip:</span>
					<input type="number" name="zip" holdplace="" maxlength="10">
					<input type="submit" value="Payment">
				</form>
			</div>
		</div>
	</div>	
</body>
</html>