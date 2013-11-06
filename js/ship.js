$(document).ready(function() {
	$('input#ship_button').click(
		function() {
			var orderid = parseInt($('input#orderid').val());
	//		alert(orderid);
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "orderid="+encodeURIComponent(orderid);
			xmlhttp.open("POST","ShipResult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var ship_info = xmlhttp.responseText;
				//	alert(ship_info);
					if (ship_info = "true") {
						alert("Ship successfully ! Wait for completion of orders !");
						location.href = "unshiporder.php";
					}else{
						alert(ship_info);
					}
				}
			}
			xmlhttp.send(url);
		}
	)
});