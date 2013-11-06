$(document).ready(function() {
	var checkCgo;
	var checkCgt;
	var picname;
	picname = $('#pic_name_value').val();
//	alert(picname);  init pic name value
	checkCgo = parseInt($('#cgo_id_value').val());
	$('select#cgo_id').val(checkCgo);
	//init cgo_id value and set default selected option
//	checkCgo = $('select#cgo_id').find("option:selected").val();
//	checkCgo = parseInt(checkCgo);
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "cgo_id="+encodeURIComponent(checkCgo);
//	alert(url);
	xmlhttp.open("POST","additem_selectcgo.php",false);
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
	checkCgt = parseInt($('#cgt_id_value').val());
	$('select#cgt_id').val(checkCgt);
//	alert(checkCgt);
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
	//		if change picture, receive picture name !
		}
		)
	$('input#update_button').click(
		function() {
			checkCgt = parseInt($('select#cgt_id').find("option:selected").val());
			var name = document.getElementById('name');
			var price = document.getElementById('price');
			var info = document.getElementById('info');
			var itemid = parseInt($('#itemid').val());
			name = name.value;
			price = parseInt(price.value);
			info = info.value;
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url = "itemid="+encodeURIComponent(itemid)+"&picname="+encodeURIComponent(picname)+"&name="+encodeURIComponent(name)+
			"&cgo_id="+encodeURIComponent(checkCgo)+"&cgt_id="+encodeURIComponent(checkCgt)+
			"&price="+encodeURIComponent(price)+"&info="+encodeURIComponent(info);
	//		alert(url);
			xmlhttp.open("POST","modifyitemresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var AddItemInfo = xmlhttp.responseText;
					if (AddItemInfo == "true") {
						alert("Modify item successfully !!");
						location.reload();
					}else{
						alert(AddItemInfo);
					}
				}
			}
			xmlhttp.send(url);
		}
		);
	
	$('input#delete_button').click(
		function() {
			var itemid = parseInt($('#itemid').val());
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var url="itemid="+encodeURIComponent(itemid);
			xmlhttp.open("POST","deleteitemresult.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var DeleteItemInfo = xmlhttp.responseText;
					if (DeleteItemInfo = "true") {
						alert("Delete item successfully !");
						location.href = "admin.php";
					}else{
						alert(DeleteItemInfo);
					}
				}
			}
			xmlhttp.send(url);
		}
		);
});