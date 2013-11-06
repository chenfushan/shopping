$(document).ready(function() {
	var addnum = parseInt($('input#addnum').val());
	if (addnum % 2 == 0) {
		addnum = (addnum/2)*100+200;
	}else{
		addnum = ((addnum+1)/2)*100+200;
	}
	$('div#address-select').css("height",addnum);

	$('input#pay_button').click(
		function() {
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("POST","paycartresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var add_info = xmlhttp.responseText;
					if (add_info == "true") {
						alert("Pay successfully ! Please wait ...");
					}else{
						alert(add_info);
					}
				}
			}
			xmlhttp.send(null);
		}
		)	
});