$(document).ready(function() {
	$('input#change').click(
		function() {
			var oldPassword = $('#oldPassword').val();
			var newPassword = $('#newPassword').val();
			var confirmPassword = $('#confirmPassword').val();
	//		alert(newPassword);
			if (newPassword != confirmPassword) {
				alert("Two new password is not equal !");
				return 0;
			}
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "oldPassword="+oldPassword+"&newPassword="+newPassword;
//			alert(url);
			xmlhttp.open("POST","changPasswordResult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var changePassword_info = xmlhttp.responseText;
					if (changePassword_info == "true") {
						alert("change password successfully ! \nPlease Re-login!");
						location.href = "login.php";
					}else{
						alert(changePassword_info);
					}
				}
			}
			xmlhttp.send(url);
		}
		);
});