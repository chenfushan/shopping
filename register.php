<?php require_once 'include.php'; 
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="shortcut icon" href="./images/logo.ico">
	<link rel="stylesheet" href="./css/login.css">
	<script type="text/javascript" src="./js/login.js"></script>
</head>
<body>
	<?php show_header(); ?>
	<div id="page">
		<?php show_logo(); ?>
		<div id="content">
			<div id="Register_form" class="loginform">
				<h1>Register Form</h1>
				<form action="./register_result.php" method="post">
					<input type="text" name="username" maxlength="14" placeholder="username" onblur="check_u()" required>
					<input type="password" name="password" maxlength="40" placeholder="password" onblur="check_p()" required>
					<input type="password" name="password2" maxlength="40" placeholder="password again" onblur="check_p()" required>
					<input type="email" name="email" maxlength="120" placeholder="email" required>
					<input type="submit" value="Register">
				</form>
			</div>
			<div id="login-bg" class="dog">
				<a href="#"><img src="./images/dog.png" alt="Welcome to TGou" id="dog"></a>
			</div>
		</div>
		<?php show_footer(); ?>
	</div>
</body>
</html>