<?php 
	require_once 'include.php';
	session_start();
	if(isset($_GET['cgtid']))
	{
		$cgtid = $_GET['cgtid'];
	//	echo $cgtid;
		$itemarray = cgt_get_itemarray($cgtid);
	}else{
		if (isset($_GET['cgoid'])) {
			$cgoid = $_GET['cgoid'];
	//		echo $cgoid;
			$itemarray = cgo_get_itemarray($cgoid);
		} else {
			if(isset($_POST['SearchContent']))
			{
				$itemname = $_POST['SearchContent'];
		//		echo $itemname;
				$itemarray = search_get_itemarray($itemname);

			}
		}	
	}	
 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Tian-Gou</title>
 	<link rel="shortcut icon" href="./images/logo.ico">
 	<link rel="stylesheet" href="./css/list-item.css">
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
 		<?php display_top(); ?>
 		<!-- <div id="top">
 			<div id="logo">
 				<h1 id="banner"><a href="./index.php"><img src="./images/Banner.png" alt="TianGou -- Shopping" id="banner"></a></h1>
 			</div>
	 		<div id="search">
	 			<div id="search-panel">
	 				<form action="./list-item.php" method="post">
	 					<input type="text" name="SearchContent" maxlength="120" placeholder="Search: Computer? "><input type="submit" value="Search" id="SearchItem">
	 				</form>
	 			</div>	
	 		</div>
	 	</div> -->
	 	<div id="content">
	 		<div id="cg-list">
	 			<div class="cgt">
					<ul>
						<h4>Electronics &amp; computer</h4>
						<li><a href="./list-item.php?cgtid=1">TV &amp; video</a></li>
						<li><a href="./list-item.php?cgtid=2">Home Audio</a></li>
						<li><a href="./list-item.php?cgtid=3">camera photo</a></li>
						<li><a href="./list-item.php?cgtid=4">video games</a></li>
						<li><a href="./list-item.php?cgtid=5">MP3 player</a></li>
						<li><a href="./list-item.php?cgtid=6">laptop &amp; Tablets</a></li>
					</ul>
 				</div>
	 			<div class="cgt">
					<ul>
						<h4>Books &amp; Audio</h4>
						<li><a href="./list-item.php?cgtid=7">Children Books</a></li>
						<li><a href="./list-item.php?cgtid=8">Textbooks</a></li>
						<li><a href="./list-item.php?cgtid=9">Magazine</a></li>
						<li><a href="./list-item.php?cgtid=10">whisper for voice</a></li>
						<li><a href="./list-item.php?cgtid=11">audio books</a></li>
						<li><a href="./list-item.php?cgtid=12">Software books</a></li>
					</ul>
	 			</div>
	 			<div class="cgt">
	 				<ul>
						<h4>Toy &amp; Baby</h4>
						<li><a href="./list-item.php?cgtid=13">Toys Games</a></li>
						<li><a href="./list-item.php?cgtid=14">Babys' clothing</a></li>
						<li><a href="./list-item.php?cgtid=15">video games for kids</a></li>
						<li><a href="./list-item.php?cgtid=16">Babys' Birthday</a></li>
						<li><a href="./list-item.php?cgtid=17">Plush Toys</a></li>
						<li><a href="./list-item.php?cgtid=18">Building block</a></li>
					</ul>	
	 			</div>
	 			<div class="cgt">
	 				<ul>
						<h4>Clothing</h4>
						<li><a href="./list-item.php?cgtid=19">shoes</a></li>
						<li><a href="./list-item.php?cgtid=20">T-shirt</a></li>
						<li><a href="./list-item.php?cgtid=21">Pants</a></li>
						<li><a href="./list-item.php?cgtid=22">coats</a></li>
						<li><a href="./list-item.php?cgtid=23">Jeans</a></li>
						<li><a href="./list-item.php?cgtid=24">Skirt</a></li>
					</ul>
	 			</div>
 			</div>
 			<div id="item-list">
 				<?php 
 				display_item_list($itemarray) 
 				?>
 			</div>
 		</div>
 	<footer>
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
					<li><a href="#">Payment &amp; Refund</a></li>
					<li><a href="#">Send &amp; Delivery</a></li>
					<li><a href="#">Help ...</a></li>
				</ul>
			</div>
		</div>
 	</footer>
	</div>	
 </body>
 </html>