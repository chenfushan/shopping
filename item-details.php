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
	<link rel="stylesheet" href="./css/item-details.css">
	<script>
		$(document).ready(function() {
			$('div#tab-info').tabs({
				fx:{
					opacity:'toggle',
					duration:'slow'
				}
			});
		});
	</script>
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
							<span>$<?php echo $row['price']; ?></span>
						</div>
						<div id="num">
							<?php 
								echo "<form action=\"./order.php?itemid=".$id."\" method=\"post\">
									<input type=\"number\" name=\"itemnum\" value=\"1\" min=\"1\"><br>
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
				<?php display_recommand($id); ?>
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
			<div id="footer"></div>
		</footer>
	</div>
</body>
</html>