<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator Login</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script type="text/javascript" src="./js/admin_login.js"></script>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<h1 id="logo"><a href="./admin.php">
				<img src="./images/Banner.png" alt="TianGou -- Shopping" id="banner">
			</a></h1>
		</div>
		<div id="content">
			<div id="TG_LoginForm" class="loginform">
				<h1>Admin Login</h1>
				<form>
					<input id="adminname" type="text" name="username" maxlength="14" placeholder="username" required>
					<div id="u_e"></div>
					<input id="password" type="password" name="password" maxlength="40" placeholder="password" required>
					<div id="p_w"></div>
					<input style="float:right;margin-right:30px;margin-top:20px;" type="button" value="Login">
				</form>
			</div>
			<div id="login-bg" class="dog">
				<a href="#"><img src="./images/dog.png" alt="Welcome to TGou" id="dog"></a>
			</div>
		</div>
		<div id="footer">
			<ul id="foot">
				<li><a href="./about.html">About us</a></li>
				<li><a href="./suggestion.html">Any suggestion</a></li>
				<li><a href="./Connectus.html">Connect us</a></li>
				<li><a href="./Teacher.html">Advisor</a></li>
				<li><a href="./Version.html">Website Version</a></li>
				<span>@class ProjectManager Group two</span>
			</ul>
		</div>
	</div>
</body>
</html>