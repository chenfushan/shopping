<?php 
	$a = array();
	$b = 3;
	$c = 4;
	$a = array('a' => 123);
	$a['b'] = 234;
	$a[$b] = $c;
	echo $a['a'];
	echo $a['b'];
	echo $a['3'];
	print_r($a);


?>

<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script src="./js/jquery.js"></script>
	<script src="./jqueryui/js/jqueryui.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#Submit').click(
			function() {
				var tx1 = document.getElementById('in');
				alert(tx1.value);
			}
			);
	});

	</script>
</head>
<body>
<form name="form" method="post" action="">
  	<input id="in" type="text" value="text words" size="10">
	<textarea id="tx" cols="10">textarea words</textarea>
	<input type="button" id="Submit" value="button">
</form>
</body>
</html>
