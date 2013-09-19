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
				<div id="info"></div>
			</div>
		</div>
		
		<footer>
			<div id="footer"></div>
		</footer>
	</div>
</body>
</html>