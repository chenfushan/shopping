$(document).ready(function() {
	$('div#tab-info').tabs({
		fx:{
			opacity:'toggle',
			duration:'slow'
		}
	});
	$('div#num input[type=button]').click(
		function() {
			var url = window.location.search;
			var itemid = url.substring(url.lastIndexOf("=")+1,url.length);
	//		alert(itemid);
			var name = $('div#name span').text();
			var price = parseInt($('div#price span').text());
			var num = document.getElementById('number');
			num = num.value;
//			alert(num);
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var url = "itemid="+encodeURIComponent(itemid)+"&name="+encodeURIComponent(name)+
			"&price="+encodeURIComponent(price)+"&num="+encodeURIComponent(num);
			xmlhttp.open("POST","addshoppingcartresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					var add_info = xmlhttp.responseText;
					if (add_info == "true") {
						alert("Add ShoppingCart successfully !");
					}else{
						alert(add_info);
						if (add_info == "Please Login First !!") {
							location.href = "login.php";
						}
					}
				}
			}
			xmlhttp.send(url);
		}

		)
});