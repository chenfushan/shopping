$(document).ready(function() {
	$('input[type=button]').click(
		function() {
			var adminname = document.getElementById('adminname');
			var password = document.getElementById('password');
			adminname = adminname.value;
			password = password.value;
//			alert(password);
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			var url = "adminname="+encodeURIComponent(adminname)+
			"&password="+encodeURIComponent(password);
			xmlhttp.open("POST","admin_login_result.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var log_info = xmlhttp.responseText;
					if (log_info ==  "true") {
						location.href = "admin.php";
					}else{
						alert(log_info);
					}
				}
			}
			xmlhttp.send(url);

		}
		)
});	