<?php 
	require_once 'include.php';
	session_start();
	if (isset($_GET['itemid'])) {
		$id = $_GET['itemid'];
		//echo $id;
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Item</title>
	<script src="./js/jquery.js"></script>
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
			<div id="item">
				<div id="pic"><img src="./images/item-pic/1.png" alt="Item-PNG"></div>
				<div id="info">
					<div id="info-text">
						<div id="name">
							<span>21" TV</span>
						</div>
						<div id="price">
							<span>$199</span>
						</div>
						<div id="num">
							<form action="./order.php" method="post">
								<input type="number" name="item-num" value="1" min="1"><br><input type="submit" value="Buy">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="details">
			<div id="shop-nav">
				<?php display_recommand($id); ?>	
			</div>
			<div id="introduce">
				<div id="tab-info">
					<ul>
						<li class="tablist"><a href="#tab1"></a></li>
						<li class="tablist"><a href="#tab2"></a></li>
					</ul>
					<div id="tab1">
						<p>Introduction</p>
					</div>
					<div id="tab2">Evaluate</div>
				</div>
			</div>
		</div>
		<footer>
			<div id="footer"></div>
		</footer>
	</div>
</body>
</html>