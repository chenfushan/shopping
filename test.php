<?php 
	require_once 'include.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>jQuery focus images</title>

<style type="text/css">
.wrapper * {margin:0; padding:0;}
.clearfix:after {content: "."; display: block; height: 0; clear: both; visibility: hidden;}
.clearfix {zoom:1;}
#focus ul,li {list-style:none;}
#focus img {border:0;}

.wrapper {width:600px; margin:0 auto; padding-bottom:50px;}
.ad {width:468px; margin:10px auto 0;}
.ad li {padding-top:5px;}

.shuoming {margin-top:20px; border:1px solid #ccc; padding-bottom:10px;}
.shuoming dt {height:30px; line-height:30px; font-weight:bold; text-indent:10px;}
.shuoming dd {line-height:20px; padding:5px 20px;}

.wrapper {width:780px;}
/* tmall focus */
#focus {width:780px; height:380px; overflow:hidden; position:relative;}
#focus ul {height:380px; position:absolute;}
#focus ul li {float:left; width:780px; height:380px; overflow:hidden; position:relative; background:#000;}
#focus ul li div {position:absolute; overflow:hidden;}
#focus .btnBg {position:absolute; width:780px; height:40px; left:0; bottom:0; background:#000;}
#focus .btn {position:absolute; width:770px; height:24px; left:0; bottom:8px; padding-left:10px;}
#focus .btn span {display:inline-block; _display:inline; _zoom:1; width:24px; height:24px; line-height:24px; text-align:center; font-size:20px; font-family:"Microsoft YaHei",SimHei; margin-right:10px; cursor:pointer; color:#fff;}
#focus .btn span.on {background:#000; color:#fcc;}
</style>

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
	<div id="header">
 			<?php
 			require_once 'include.php';
 			if (isset($_SESSION['username'])) {
 			show_header($_SESSION['username']);
	 		}else{
	 			show_header();
	 		} ?>
 		</div>
 		<div id="logo">
 			<h1 id="banner"><a href="./index.php"><img src="./images/Banner.png" alt="TianGou -- Shopping" id="banner"></a></h1>
 		</div>
 		<div id="search">
 			<div id="search-panel">
 				<form action="./list-item.php" method="post"><input type="text" name="SearchContent" maxlength="120"><input type="submit" value="Search" id="SearchItem"></form>
 			</div>	
 		</div>
 		<div id="navigation">
 			<div id="navigation-panel">
 				<ul class="navigate">
 					<li class="category1"><a href="./list-item.php">Electronics & computer</a></li>
 					<li class="category2"><a href="./list-item.php">Books & Audio</a></li>
 					<li class="category3"><a href="./list-item.php">Toy & Baby</a></li>
 					<li class="category4"><a href="./list-item.php">Clothing</a></li>
 				</ul>
 			</div>
 		</div>
<div class="wrapper">
			<div id="focus">
				<ul>
					<li>
						<div style="left:0; top:0; width:560px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/a01.jpg" alt="" /></a></div>

						<div style="right:0; top:0; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/a02.jpg" alt="" /></a></div>
						<div style="right:0; top:140px; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/a03.jpg" alt="" /></a></div>
						<div style="right:0; bottom:0; width:220px; height:100px;"><a href="#" target="_blank"><img src="./images/wrap/a04.jpg" alt="" /></a></div>
					</li>
					<li>
						<div style="left:0; top:0; width:780px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/b01.jpg" alt="" /></a></div>
					</li>
					
					<li>
						<div style="left:0; top:0; width:260px; height:210px;"><a href="#" target="_blank"><img src="./images/wrap/c01.jpg" alt="" /></a></div>

						<div style="left:260px; top:0; width:260px; height:210px;"><a href="#" target="_blank"><img src="./images/wrap/c02.jpg" alt="" /></a></div>
						<div style="left:0; top:210px; width:520px; height:170px;"><a href="#" target="_blank"><img src="./images/wrap/c03.jpg" alt="" /></a></div>
						<div style="right:0; top:0; width:260px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/c04.jpg" alt="" /></a></div>
					</li>
					
					<li>
						<div style="left:0; top:0; width:560px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/d01.jpg" alt="" /></a></div>
						<div style="right:0; top:0; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/d02.jpg" alt="" /></a></div>
						<div style="right:0; top:140px; width:220px; height:140px;"><a href="#" target="_blank"><img src="./images/wrap/d03.jpg" alt="" /></a></div>
						<div style="right:0; bottom:0; width:220px; height:100px;"><a href="#" target="_blank"><img src="./images/wrap/d04.jpg" alt="" /></a></div>

					</li>
					
					<li>
						<div style="left:0; top:0; width:780px; height:380px;"><a href="#" target="_blank"><img src="./images/wrap/e01.jpg" alt="" /></a></div>
					</li>
				</ul>
			</div>
		</div>
</body>
</html>