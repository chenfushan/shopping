<?php 
	require_once 'include.php';
	session_start();
	if (isset($_GET['itemid'])) {
		$id = $_GET['itemid'];
		//echo $id;
		$item_detail = id_get_details($id);
		$item_array = array();
		$message_array = id_get_message($id);
	//	$appraise_array = appraise_get_array($id);
	}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Item</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script type="text/javascript" src="./js/addshoppingcart.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/item-details.css">
	<link rel="stylesheet" href="./css/item-details.css">
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
			<?php display_top(); ?>
		</header>
		<div id="content">
			<?php
			// display_item_list($item_detail); 
				if (!is_array($item_detail)) {
					echo "<p>No item selected!
					Please back and selected again!";
				}else{
					foreach ($item_detail as $row) {
						$item_array = $row;
			?>
			<div id="item">
				<div id="pic">
					<?php echo "<img src=\"./images/item-pic/".$id.".png\" alt=\"Item-PNG\">"; 
					?>
				</div>
				<div id="info">
					<div id="info-text">
						<div id="name">
							<span><?php echo $row['name']; ?></span>
						</div>
						<div id="price">
							PRICE:&nbsp;&nbsp;$<span><?php echo $row['price']; ?></span>
						</div>
						<div id="num">
							<?php 
								echo "<form action=\"./order.php?itemid=".$id."\" method=\"post\">
									<input type=\"number\" id=\"number\" name=\"itemnum\" value=\"1\" min=\"1\"><br>
									<input type=\"button\" value=\"Add to cart\" />
									<input type=\"submit\" value=\"Buy\">
									</form>";
							 ?>
						</div>
					</div>
				</div>
			</div>
			<?php
					}
				}
			 ?>
		</div>
		<div id="details">
			<div id="shop-nav">
				<span>Mybe You Will Like..</span>
				<div id="nav-list">
					<?php display_recommend($id); ?>
				</div>
			</div>
			<div id="introduce">
				<div id="tab-info">
					<ul>
						<li class="tablist"><a href="#tab1"><span>Information
							</span></a></li>
						<li class="tablist"><a href="#tab2"><span>Appraise</span></a></li>
					</ul>
					<div id="tab1">
						<span><?php echo $item_array['info']; ?></span>
					</div>
					<div id="tab2">
						<?php 
							if (!is_array($message_array)) {
								echo "There is no Appraise for this item!";
							}else{
								foreach ($message_array as $row) {
									echo "<span>".$row['message']."</span>";
								}
							}
						 ?>
						<span>Evaluate</span>
					</div>
				</div>
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