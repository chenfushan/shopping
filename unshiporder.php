<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
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
	<title>unshipped order</title>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/unshiporder.css">
</head>
<body>
	<div id="page">
		<?php admin_show_header(); ?>

		<div id="tabList">
			<div id="tab1"><a href="unshiporder.php">Unshipped Orders</a></div>
			<div id="tab2"><a href="NoRecv.php">No Receipt Of Orders</a></div>
			<div id="tab3"><a href="completeorder.php">Completed Order</a></div>	
		</div>
		<div id="order_header">
			<div id="id"><span>ID</span></div>
			<div id="item"><span>DETAIL</span></div>
			<div id="itemadd"><span>ADDRESS</span></div>
			<div id="recev"><span>REMARK</span></div>
		</div>
		<div id="order-list">
			<?php 
			$order_array = get_unship_order();
			if ($order_array != false) {
			 	//display_unship_order($order_array);
			 	foreach ($order_array as $row) {
				$id = $row['id'];
				$name = $row['name'];
				$orderid = $row['orderid'];
				$num = $row['num'];
				$price = $row['price'];
				$address = admin_get_add($orderid);
				foreach ($address as $add) {
					$ship_name = $add['ship_name'];
					$ship_address = $add['ship_address'];
					$ship_city = $add['ship_city'];
					$ship_state = $add['ship_state'];
					$ship_country = $add['ship_country'];
					$ship_zip = $add['ship_zip'];
					$ship_phonenumber = $add['ship_phonenumber'];
				}
				echo "<div class=\"order-detail\"><div class=\"itemid\"><span>".$orderid."</span></div><div class=\"item-detail\">";
				echo "<a href=\"item-details.php?item=".$id."\">".$name."</a><br/><br/>".$num."<br />".$price."<br />";
				echo "</div>";
				echo "<div id=\"address\">".$ship_name."<br />".$ship_country."-".$ship_state."-".$ship_city."-".$ship_address."<br />".$ship_zip."<br />".$ship_phonenumber."</div>";
				echo "<form action=\"ship.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"orderid\" value=\"".$orderid."\">";
				echo "<input type=\"submit\" class=\"Ship\" value=\"Ship\"></form>";
				echo "</div><hr>";
			}
			 } 
			?>
		</div>
	</div>	
</body>
</html>