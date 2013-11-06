<?php 
	require_once 'include.php';
	session_start();
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Tian-Gou</title>
<link rel="stylesheet" href="./css/wrap.css" />
<link rel="stylesheet" href="./css/index.css">
<link rel="shortcut icon" href="./images/logo.ico">
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var sWidth = $("#focus").width(); 
	var len = $("#focus ul li").length; 
	var index = 0;
	var picTimer;
	
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span>" + (i+1) + "</span>";
	}
	btn += "</div>"
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);
	

	$("#focus .btn span").mouseenter(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");

	$("#focus ul").css("width",sWidth * (len + 1));
	
	$("#focus ul li div").hover(function() {
		$(this).siblings().css("opacity",0.7);
	},function() {
		$("#focus ul li div").css("opacity",1);
	});
	
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			if(index == len) { 
				showFirPic();
				index = 0;
			} else {
				showPics(index);
			}
			index++;
		},3000); 
	}).trigger("mouseleave");
	
	function showPics(index) { 
		var nowLeft = -index*sWidth; 
		$("#focus ul").stop(true,false).animate({"left":nowLeft},500); 
		$("#focus .btn span").removeClass("on").eq(index).addClass("on")
	}
	
	function showFirPic() { 
		$("#focus ul").append($("#focus ul li:first").clone());
		var nowLeft = -len*sWidth;
		$("#focus ul").stop(true,false).animate({"left":nowLeft},500,function() {
			$("#focus ul").css("left","0");
			$("#focus ul li:last").remove();
		}); 
		$("#focus .btn span").removeClass("on").eq(0).addClass("on");
	}
});
</script>
</head>

<body>
	<div id="page">
		<div id="header">
 			<?php
 			if (isset($_SESSION['username'])) {
 			show_header($_SESSION['username']);
	 		}else{
	 			show_header();
	 		} ?>
 		</div>
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
 		<div id="navigation">
 				<ul class="category">
 					<li class="category1"><a href="./list-item.php?cgoid=1">Electronics & computer</a></li>
 					<li class="category2"><a href="./list-item.php?cgoid=2">Books & Audio</a></li>
 					<li class="category3"><a href="./list-item.php?cgoid=3">Toy & Baby</a></li>
 					<li class="category4"><a href="./list-item.php?cgoid=4">Clothing</a></li>
 				</ul>
 		</div>
		<div class="wrapper">
			<div id="focus">
				<ul>
					<li class="wrap-li">
						<div style="left:0; top:0; width:630px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/a01.jpg" alt="" /></a></div>

						<div style="right:0; top:0; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/a02.jpg" alt="" /></a></div>
						<div style="right:0; top:140px; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/a03.jpg" alt="" /></a></div>
						<div style="right:0; bottom:0; width:220px; height:100px;"><a href="#" target="_blank"><img src="./images/wrap/a04.jpg" alt="" /></a></div>
					</li>
					<li class="wrap-li">
						<div style="left:0; top:0; width:780px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/b01.jpg" alt="" /></a></div>
					</li>
					
					<li class="wrap-li">
						<div style="left:0; top:0; width:260px; height:210px;"><a href="#" target="_blank"><img src="./images/wrap/c01.jpg" alt="" /></a></div>

						<div style="left:260px; top:0; width:260px; height:210px;"><a href="#" target="_blank"><img src="./images/wrap/c02.jpg" alt="" /></a></div>
						<div style="left:0; top:210px; width:520px; height:170px;"><a href="#" target="_blank"><img src="./images/wrap/c03.jpg" alt="" /></a></div>
						<div style="right:0; top:0; width:260px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/c04.jpg" alt="" /></a></div>
					</li>
					
					<li class="wrap-li">
						<div style="left:0; top:0; width:560px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/d01.jpg" alt="" /></a></div>
						<div style="right:0; top:0; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/d02.jpg" alt="" /></a></div>
						<div style="right:0; top:140px; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/d03.jpg" alt="" /></a></div>
						<div style="right:0; bottom:0; width:220px; height:100px;"><a href="#" target="_blank"><img src="./images/wrap/d04.jpg" alt="" /></a></div>
					</li>
					
					<li class="wrap-li">
						<div style="left:0; top:0; width:850px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/e01.jpg" alt="" /></a></div>
					</li>
				</ul>
			</div>
		</div>
		<div id="category">
			<div id="category12">
				<div id="category1">
					<div id="section">
						<div class="category-detail">
						<img src="./images/category/category1.png" alt="Computer for sell">
						</div>
					<ul>
						<h4>Electronics & computer</h4>
						<li><a href="./list-item.php?cgtid=1">TV & video</a></li>
						<li><a href="./list-item.php?cgtid=2">Home Audio</a></li>
						<li><a href="./list-item.php?cgtid=3">camera photo</a></li>
						<li><a href="./list-item.php?cgtid=4">video games</a></li>
						<li><a href="./list-item.php?cgtid=5">MP3 player</a></li>
						<li><a href="./list-item.php?cgtid=6">laptop & Tablets</a></li>
					</ul>
					</div>
				</div>
				<div id="category2">
					<div id="section">
						<div class="category-detail">
							<img src="./images/category/category2.png" alt="Books for sell">
						</div>
					<ul>
						<h4>Books & Audio</h4>
						<li><a href="./list-item.php?cgtid=7">Children Books</a></li>
						<li><a href="./list-item.php?cgtid=8">Textbooks</a></li>
						<li><a href="./list-item.php?cgtid=9">Magazine</a></li>
						<li><a href="./list-item.php?cgtid=10">whisper for voice</a></li>
						<li><a href="./list-item.php?cgtid=11">audio books</a></li>
						<li><a href="./list-item.php?cgtid=12">Software books</a></li>
					</ul>
					</div>
				</div>
			</div>
			<div id="category34">
				<div id="category3">
					<div id="section">
						<div class="category-detail">
							<img src="./images/category/category3.png" alt="Toy for sell">
						</div>
						<ul>
							<h4>Toy & Baby</h4>
							<li><a href="./list-item.php?cgtid=13">Toys Games</a></li>
							<li><a href="./list-item.php?cgtid=14">Babys' clothing</a></li>
							<li><a href="./list-item.php?cgtid=15">video games for kids</a></li>
							<li><a href="./list-item.php?cgtid=16">Babys' Birthday</a></li>
							<li><a href="./list-item.php?cgtid=17">Plush Toys</a></li>
							<li><a href="./list-item.php?cgtid=18">Building block</a></li>
						</ul>
					</div>
				</div>
				<div id="category4">
					<div id="section">
						<div class="category-detail">
							<img src="./images/category/category4.png" alt="Clothes for sell">
						</div>
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
			</div>		
		</div>
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
					<li><a href="changePassword.php">Change Password</a></li>
					<li><a href="#">Payment & Refund</a></li>
					<li><a href="#">Send & Delivery</a></li>
					<li><a href="#">Help ...</a></li>
				</ul>
			</div>
		</div>
	</div>	
</body>
</html>