<?php 
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
				<li><a href="#">order</a></li>
				<li><a href="#">cart</a></li>
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
				Welcome to TGou! 
				<a href="./index.php"><?php echo $username ?></a>
			</p>
			<ul id="quickmenu">
				<li><a href="#">category</a><b>|</b></li>
				<li><a href="#">order</a></li>
				<li><a href="#cart">cart</a></li>
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
			echo "<p>No books currently available in this list";
		}else{
			foreach ($itemarray as $row) {
			?>
			<div class="item">
	 			<div class="item-pic">
	 				<?php echo "<img src=\"./images/item-pic/".$row['id'].".png\" alt=\"Laptop\">"; ?>
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
	function display_recommand($id)
	{
		
	}
	function display_information($id)
	{
		
	}
	function display_appraise($id)
	{
		
	}

?>