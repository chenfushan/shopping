$(document).ready(function() {
	$('input#write').click(
		function() {
			var itemid = parseInt($('#itemid').val());
			var content = $('#review').val();

			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "itemid="+itemid+"&content="+content;
//			alert(url);
			xmlhttp.open("POST","writeReviewResult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status ==200) {
					var write_info = xmlhttp.responseText;
					if (write_info == "true") {
						location.href = "thanks.php";
					}else{
						alert(write_info);
					}
				}
			}
			xmlhttp.send(url);
		}
		);
});