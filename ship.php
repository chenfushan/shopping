<?php 
	require_once 'include.php';
	session_start();

	if (isset($_SESSION['admin']) && isset($_POST['orderid'])) {
		$admin = $_SESSION['admin'];
		$orderid = $_POST['orderid'];
//		echo $orderid;
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=admin.php">
		</head>
		<body>
			<p>You havn't login or You havn't choose a order!</p>
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
	<title>Ship</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script src="./js/ship.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/ship.css">
</head>
<body>
	<div id="page">
		<?php admin_show_header(); ?>

		<div id="shipform">
			<form>
				<span>Please select the courier company: </span>
				<select name="express" id="express-list">
					<option value="EMS">EMS</option>
					<option value="UPS">UPS</option>
					<option value="FedEx">FedEx</option>
					<option value="TNT">TNT</option>
					<option value="OCS">OCS</option>
				</select>
				<br>
				<span>Please input the Tracking No.</span>
				<input type="text" name="TrackNo" size="14" maxlength="11" required>
				<?php echo "<input type=\"hidden\" id=\"orderid\" value=\"".$orderid."\">"; ?>
				<br>
				<input type="button" id="ship_button" value="Confirm">
			</form>
		</div>
	</div>	
</body>
</html>