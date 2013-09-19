<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<h1 id="logo"><a href="./index.php">
				<img src="./images/Banner.png" alt="TianGou -- Shopping" id="banner">
			</a></h1>
		</div>
		<div id="content">
			<div id="TG_LoginForm" class="loginform">
				<h1>Login Form</h1>
				<form action="./login_result.php" method="post">
					<input type="text" name="username" maxlength="14" placeholder="username" required>
					<input type="password" name="password" maxlength="40" placeholder="password" required>
					<input type="submit" value="Login">
					<span><a id="register" href="./register.php">Register-free</a></span>
					<hr>
					<div id="otherlogin"><img src="./images/weibo.png" alt=""><a href="./developing.html">Weibo Login</a></div>
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