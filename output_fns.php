<?php 
	require_once 'include.php';
	function show_header($username='')
	{
		if ($username =='') {
			?>
		<div id="topul">
			<style>
				div#topul{
					width: 850px;
					height: 27px;
					margin-left: auto;
					margin-right: auto;
					margin-top: 0;
					font-size: 14px;
					border-bottom: 1px solid #bf7708;
					background-color: #e9a63b;
					padding: 0;
				}
				p.login{
					width: 350px;
					height: 27px;
					margin-top: 4px;
					margin-bottom: auto;
					margin-left: 10px;
					float: left;
				}
				ul#quickmenu{
					width: 350px;
					height: 27px;
					margin: 0;
					padding-top: 4px;
					float: right;
				}
				ul#quickmenu li{
					float: right;
					list-style-type: none;
					padding-right: 30px;
				}
				ul#quickmenu li a{
					color: black;
				}
			</style>
			<p class="login">
				Welcome to TGou! Please
				<a href="./login.php">login</a>
				<b>/</b>
				<a href="./register.php">register</a>
			</p>
			<ul id="quickmenu">
				<li><a href="#">category</a></li>
				<li><a href="show_order.php">order</a></li>
				<li><a href="cart.php">cart</a></li>
				<li><a href="#">contact us</a></li>
			</ul>
		</div>
		<?php
		}else{
			?>
		<div id="topul">
			<style>
				div#topul{
					width: 850px;
					height: 27px;
					margin-left: auto;
					margin-right: auto;
					margin-top: 0;
					font-size: 14px;
					border-bottom: 1px solid #bf7708;
					background-color: #e9a63b;
					padding: 0;
				}
				p.login{
					width: 350px;
					height: 27px;
					margin-top: 4px;
					margin-bottom: auto;
					margin-left: 10px;
					float: left;
				}
				ul#quickmenu{
					width: 390px;
					height: 27px;
					margin: 0;
					padding-top: 4px;
					float: right;
				}
				ul#quickmenu li{
					float: right;
					list-style-type: none;
					padding-right: 30px;
				}
				ul#quickmenu li a{
					color: black;
				}
			</style>
			<p class="login">
				Welcome to TGou! 
				<a href="./index.php"><?php echo $username ?></a>
			</p>
			<ul id="quickmenu">
				<li style="margin-right: 0; padding-right: 10px;"><a href="logout.php">logout</a></li>
				<li><a href="#">category</a><b style="color:#ffffff">&nbsp&nbsp|</b></li>
				<li><a href="show_order.php">order</a></li>
				<li><a href="cart.php">cart</a></li>
				<li><a href="#">contact us</a></li>
			</ul>
		</div>
			<?php
		}	
	}
	function show_footer()
	{
		?>
		<div id="footer">
			<style>
				div#footer{
					width: 850px;
					height: 14px;
					margin-top: 150px;
					margin-left: auto;
					margin-right: auto;
					}

				div#footer ul li{
					float: left;
					margin: 0 10px;
					}
			</style>
			<ul id="foot">
				<li><a href="./about.html">About us</a></li>
				<li><a href="./suggestion.html">Any suggestion</a></li>
				<li><a href="./Connectus.html">Connect us</a></li>
				<li><a href="./Teacher.html">Advisor</a></li>
				<li><a href="./Version.html">Website Version</a></li>
				<span>@class ProjectManager Group two</span>
			</ul>
		</div>
		<?php
	}
	function show_html_footer()
	{
		?>
		<style>
			div#footer{
				width: 850px;
				height: 170px;
				margin-top: 80px;
				font-size: 14px;
			}
			div.footer1{
				width: 230px;
				height: 150px;
				float: left;
				margin-left: 30px;
			}
			div.footer2{
				width: 250px;
				height: 150px;
				float: left;
				margin-right: 20px;
			}
			div.footer3{
				width: 250px;
				height: 150px;
				float: left;
			}
			div#footer ul li{
				font-size: 14px;
				margin-bottom: 10px;
				list-style: none;
				color: #ffffff;
			}
		</style>
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
		<?php
	}
	function show_logo()
	{
		?>
		<div id="header">
			<style>
				div#header{
					width: 850px;
					margin-left: auto;
					margin-right: auto;
					margin-top: 20px;
					margin-bottom: 15px;
				}
				h1#logo {
					display: block;
					font-size: 2em;
					-webkit-margin-before: 0.67em;
					-webkit-margin-after: 0.67em;
					-webkit-margin-start: 0px;
					-webkit-margin-end: 0px;
					font-weight: bold;
				}
			</style>
			<h1 id="logo"><a href="./index.php">
				<img src="./images/Banner.png" alt="TianGou -- Shopping" id="banner">
			</a></h1>
		</div>
		<?php
	}
	function show_html_start()
	{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<body>
		<?php
	}
	function show_html_end()
	{
		?>			
		</body>
		</html>
		<?php
	}
	function show_message($message)
	{
		?>
		<div id="message">
			<style>
				div#message{
					width: 850px;
					height: 200px;
					margin-left: auto;
					margin-right: auto;
					margin-bottom: 200px;
				}
			</style>
			<p><?php echo $message; ?></p>
		</div>
		<?php
	}
	function display_item_list($itemarray)
	{
		if (!is_array($itemarray)) {
			echo "<p>No item currently available in this list";
		}else{
			foreach ($itemarray as $row) {
			?>
			<div class="item">
	 			<div class="item-pic">
	 				<?php echo "<img src=\"./images/item-pic/".$row['pic_name']."\" alt=\"Laptop\">"; ?>
	 			</div>
 				<div class="item-info">
 					<div class="item-name">
 						<?php 
 						echo "<a href=\"./item-details.php?itemid=".$row['id']."\">
 							<span>".$row['name']."</span>
 							</a>";
 						 ?>
 					</div>
 					<div class="item-price">
 						<span>$<?php echo $row['price']; ?></span>
 					</div>
 				</div>
 			</div>	
		<?php
			}
		}
	}
	function display_top()
	{
		?>
		<style>
			div#header{
			height: 40px;
			}
			div#top{
				height: 120px;
			}
			div#logo{
				width: 35%;
				height: 106px;
				float: left;
			}
			div#search{
				width: 65%;
				height: 76px;
				float: right;
				padding-top: 30px;
			}
			div#search-panel{
				width: 500px;
				height: 68px;
				margin-top: auto;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: auto;
			}
			div#search-panel form{
				float: right;
			}
			div#search-panel input[type = text]{
				width: 350px;
				height: 30px;
				border-radius: 15px;
				margin-right: 15px;
			}
			input#SearchItem{
				width: 70px;
				height: 35px;
				border-radius: 10px;
			}
		</style>
		<div id="top">
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
	 	</div>
		<?php
	}
	function display_recommend($id)
	{
		$cgtid = get_cgtid_id($id);
		$itemarray = array();
		$itemarray = cgt_get_itemarray($cgtid);
		foreach ($itemarray as $row) {
			?>
			<style>
				div.nav-item-list-img{
					margin-top: 15px;
				}
				div.nav-item-list-img img{
					width: 70px;
					height: 70px;
					float: left;
					margin-right: 5px;
				}
				div.nav-item-list-detail{
					text-align: left;
				}
			</style>
			<div class="nav-item-list">
				<div class="nav-item-list-img">
					<?php echo "<img src=\"./images/item-pic/".$row['pic_name']."\" alt=\"Laptop\">"; ?>
				</div>
				<div class="nav-item-list-detail">
					<?php 
 						echo "<a href=\"./item-details.php?itemid=".$row['id']."\">
 							<span>".$row['name']."</span>
 							</a>";
 					 ?>
 					 <br>
 					 <span>$<?php echo $row['price']; ?></span>
				</div>
			</div>
			<?php
		}
	}
	function display_information($id)
	{
		
	}
	function display_appraise($id)
	{
		
	}

	function display_address($result)
	{
		if (!$result) {
			echo "Address error ! can't load .. Please refresh!";
		}else{
			foreach ($result as $row) {
				?>
				<div class="add">
					<?php 
						echo "<input type=\"radio\" name=\"add\" value=\"".$row['addressid']."\"><div class=\"add_detail\">name: ".$row['ship_name']."<br />address: ".$row['ship_country']."-".$row['ship_state']."-".$row['ship_city']."-".$row['ship_address']."<br />zip: ".$row['ship_zip']."<br />phone: ".$row['ship_phonenumber']."</div>";
					 ?>
				</div>
				<?php
			}
		}
	}


?>