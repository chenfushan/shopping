$(document).ready(function() {
	var checkCgo;
	var checkCgt;
	var picname;
	checkCgo = $('select#cgo_id').find("option:selected").val();
	checkCgo = parseInt(checkCgo);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "cgo_id="+encodeURIComponent(checkCgo);
//	alert(url);
	xmlhttp.open("POST","additem_selectcgo.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var add_item_info = xmlhttp.responseText;
			var cgt = eval("("+add_item_info+")");
	//		eval("var cgt = "+add_info);
				for (var key in cgt) {
						var Value = cgt[key];
						var innercode = "<option value="+key+">"+Value+"</option>";
	//					alert(innercode);
						$('select#cgt_id').append(innercode);
				}
	//		alert(add_item_info);
		}
	}
	xmlhttp.send(url);

	$('select#cgo_id').change(
		function() {
			$('select#cgt_id option').remove();
			checkCgo = $('select#cgo_id').find("option:selected").val();
		//	alert(checkCgo);
			checkCgo = parseInt(checkCgo);
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "cgo_id="+encodeURIComponent(checkCgo);
		//	alert(url);
			xmlhttp.open("POST","additem_selectcgo.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var add_item_info = xmlhttp.responseText;
					var cgt = eval("("+add_item_info+")");
			//		eval("var cgt = "+add_info);

						for (var key in cgt) {
								var Value = cgt[key];
								var innercode = "<option value="+key+">"+Value+"</option>";
			//					alert(innercode);
								$('select#cgt_id').append(innercode);
						}
			//		alert(add_item_info);
				}
			}
			xmlhttp.send(url);
		}
		);
	$('select#cgt_id').change(
		function() {
			checkCgt = parseInt($('select#cgt_id').find("option:selected").val());
		}
		);

	$('input#item-pic').change(
		function() {
			var picpath = $(this).val();
			var arr = picpath.split('\\');
			picname = arr[arr.length - 1];
	//		alert(picname);
		}
		)
	$('input#add_button').click(
		function() {
			checkCgt = parseInt($('select#cgt_id').find("option:selected").val());
			var name = document.getElementById('name');
			var price = document.getElementById('price');
	//		var info = document.getElementById('info');		
			$('#info').replaceAll("\n","<br>");
			var info = $('#info').val();
	//		alert(info);
			name = name.value;
			price = parseInt(price.value);
		//	info = info.value;
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "picname="+encodeURIComponent(picname)+"&name="+encodeURIComponent(name)+
			"&cgo_id="+encodeURIComponent(checkCgo)+"&cgt_id="+encodeURIComponent(checkCgt)+
			"&price="+encodeURIComponent(price)+"&info="+encodeURIComponent(info);
	//		alert(url);
			xmlhttp.open("POST","additemresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var AddItemInfo = xmlhttp.responseText;
					if (AddItemInfo == "true") {
						alert("Add item successfully !!");
				//		document.forms[0].reset();
						location.href = "admin.php";
					}else{
						alert(AddItemInfo);
					}
				}
			}
			xmlhttp.send(url);
		}
		);
});