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
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shipped Order</title>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/show_order.css">
	<link rel="stylesheet" href="./css/show_order_shiped.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<?php show_header($username); ?>
		</div>
		<div id="tabList">
			<div id="tab1"><a href="show_order.php">Unshiped Order</a></div>
			<div id="tab2"><a href="show_order_shiped.php">Shiped Order</a></div>
			<div id="tab3"><a href="show_order_complete.php">Completed Order</a></div>	
		</div>
		<div id="order_header">
			<div id="id"><span>ID</span></div>
			<div id="item"><span>DETAIL</span></div>
			<div id="itemadd"><span>ADDRESS</span></div>
			<div id="recev"><span>REMARK</span></div>
		</div>
		<div id="orderList">
			<?php 
			$orderArray = get_order_ship($username);
			if ($orderArray != false) {
				foreach ($orderArray as $row) {
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
					echo "<form action=\"write_review.php\" method=\"post\">";
					echo "<input type=\"hidden\" name=\"itemid\" value=\"".$id."\">";
					echo "<input type=\"hidden\" name=\"orderid\" value=\"".$orderid."\">";
					echo "<input type=\"submit\" class=\"Ship\" value=\"Received!\"></form>";
					echo "</div><hr>";
				}
			}	
			?>
		</div>
	</div>
</body>
</html>