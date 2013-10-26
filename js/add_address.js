var add_o;
function add() {
	var name = document.getElementById('name');
	var address = document.getElementById('detailaddress');
	var city = document.getElementById('city');
	var state = document.getElementById('state');
	var country = document.getElementById('country');
	var zip = document.getElementById('zip');
	var phonenumber = document.getElementById('phonenumber');
	if (window.XMLHttpRequest) {
		add_o =new XMLHttpRequest();
		// alert("create successfully!!");
	} else{
		alert("create xmlhttprequest error!");
	}
	add_o.onreadystatechange=insert;
	//get method
	// var url = "add_adress_result.php?name="+name.value+
	//"&address="+address.value+"&city="+city.value+
	//"&state="+state.value+"&country="+country.value+
	// "&zip="+zip.value+"phonenumber="+phonenumber.value;
	// alert(url);
	// add_o.open("GET",url,true);
	// add_o.send(null);

	//post method
	var url = "name="+name.value+"&address="+address.value+"&city="+city.value+
	"&state="+state.value+"&country="+country.value+"&zip="+zip.value+
	"&phonenumber="+phonenumber.value;
	add_o.open("POST","add_address_result.php",true);
	add_o.setRequestHeader("Content-type","applicatioin/x-www-form-urlencoded");
	
	alert(url);
	add_o.send(url);

}
function insert () {
	if (add_o.readyState == 4) {
		if (add_o.status == 200) {
			var add_info = add_o.responseText;
			if (add_info == "true") {
				alert("Add address successfully!!");
			}else{
				alert(add_info);
			}
		}else{
			alert("server return error!!");
		}
	}else{
		alert("post data error!!");
	}
}