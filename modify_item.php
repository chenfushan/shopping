<?php 
	require_once 'include.php';
	session_start();
	if (isset($_SESSION['admin'])) {
		$admin = $_SESSION['admin'];
	}else{
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Please Login</title>
			<link rel="shortcut icon" href="./images/logo.ico">
			<meta http-equiv="refresh" content="1; url=admin_login.php">
		</head>
		<body>
			<p>Please Login First</p>
		</body>
		</html>
		<?php
		exit();
	}
	if (isset($_GET['itemid'])) {
		$id = $_GET['itemid'];
		//echo $id;
		$item_detail = id_get_details($id);
		$item_array = array();
		foreach ($item_detail as $row) {
			$item_array = $row;
		}
	}

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modify item</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script src="./js/modify_item.js"></script>
	<link rel="stylesheet" href="./css/modify_item.css">
</head>
<body>
	<div id="page">
		<?php admin_show_header(); ?>

		<div id="modifyform">
			<form>
			<?php 
				echo "
				<input type=\"file\" id=\"item-pic\">
				<input type=\"hidden\" id=\"pic_name_value\" value=\"".$item_array['pic_name']."\">
				<br>
				<input type=\"hidden\" id=\"itemid\" value=\"".$id."\">
				<input type=\"text\" id=\"name\" value=\"".$item_array['name']."\">
				<br>
				<input type=\"hidden\" id=\"cgo_id_value\" value=\"".$item_array['cgo_id']."\">
				<select name=\"cgo_id\" id=\"cgo_id\">
					<option value=\"1\">Electrionics &amp; computer</option>
					<option value=\"2\">Books &amp; Audio</option>
					<option value=\"3\">Toy &amp; Baby</option>
					<option value=\"4\">Clothing</option>
				</select>
				<br>
				<input type=\"hidden\" id=\"cgt_id_value\" value=\"".$item_array['cgt_id']."\">
				<select name=\"cgt_id\" id=\"cgt_id\">
					<!-- <option value=\"1\">TV &amp; video</option>
					<option value=\"2\">Home Audio</option>
					<option value=\"3\">camera photo</option>
					<option value=\"4\">video games</option>
					<option value=\"5\">Mp3 player</option>
					<option value=\"6\">laptop &amp; Tablets</option> -->
				</select>
				<br>
				<input type=\"text\" id=\"price\" placeholder=\"price\" value=\"".$item_array['price']."\">
				<br>
				<textarea name=\"item_info\" id=\"info\" cols=\"30\" rows=\"10\">".$item_array['info']."</textarea>
				<br>
				<input type=\"button\" id=\"update_button\" value=\"Update\">
				<input type=\"button\" id=\"delete_button\" value=\"Delete\">";

			 ?>
			
			</form>
		</div>
	</div>
</body>
</html>