$(document).ready(function() {
	$('input#pay_button').click(
		function() {
			var orderid = parseInt($('input#order_id').val());
//			alert(orderid);
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "orderid="+encodeURIComponent(orderid);
			xmlhttp.open("POST","paymentresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var pay_info = xmlhttp.responseText;
					if (pay_info == "true") {
						alert("Pay Successfully ! Please Wait ...");
						location.href = "show_order.php";
					}else{
						alert(pay_info);
					}
				}
			}
			xmlhttp.send(url);
		}
		)
});	