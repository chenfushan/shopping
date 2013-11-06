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
	<script src="./js/cart.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/cart.css">
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

 			if ($idarray == false) {
 				echo "<div style=\"height: 100px;\"><span>There is no item in shoppingcart !</span></div>";
 				show_html_footer();
 				exit();
 			}
 		?>
 		<div id="cart-list">
			<div id="order-detail">
				<div id="order-title">
					<span id="item-name">item</span>
					<span id="num">num</span>
					<span id="total-price">total price</span>
				</div>
				<?php 
					$itemnum = count($idarray,0);
					echo "<input type=\"hidden\" id=\"itemnum\" value=\"".$itemnum."\" />";
					foreach ($idarray as $row) {
						$id = $row['itemid'];
						$num = $row['num'];
						$item_detail = id_get_details($id);
						echo "<div id=\"order-info\">";
						foreach ($item_detail as $row) {
							echo "<div id=\"item\">
								<img src=\"./images/item-pic/".$row['pic_name']."\" alt=\"item pic\">
								<a href=\"./item-details.php?itemid=".$id."\"><span>".$row['name']."</span></a>
								</div>";
							echo "<div id=\"num\">
								<span>".$num."</span>
								</div>";
							$total_price = $num * $row['price'];
							echo "<div id=\"total-price\">
								<span>".$total_price."</span>
								</div>";	
						}
						echo "</div>";
					}	
				?>	
			</div>
			<div id="pay">
				<input type="button" id="pay_button" value="Item Confirm">
			</div>
	 	</div>
	 	<?php show_html_footer() ?>
 	</div>
</body>
</html>