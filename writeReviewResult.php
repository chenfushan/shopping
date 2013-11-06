<?php 
	require 'include.php';
	session_start();
	if(isset($_SESSION['username']) && isset($_POST['itemid']) && isset($_POST['content']))
	{
		$username = $_SESSION['username'];
		$itemid = $_POST['itemid'];
		$content = $_POST['content'];
		$result = insert_review($itemid,$content);
		if ($result == true) {
			echo "true";
			exit();
		}
	}else{
//		echo $_SESSION['username'].$_POST['itemid'].$_POST['content'];
		echo "date post error!";
		exit();
	}
 ?>
