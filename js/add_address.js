
function add() {
	var xmlhttp;
	var name = document.getElementById('name');
	var address = document.getElementById('detailaddress');
	var city = document.getElementById('city');
	var state = document.getElementById('state');
	var country = document.getElementById('country');
	var zip = document.getElementById('zip');
	var phonenumber = document.getElementById('phonenumber');
	var rest = document.getElementById('result');
//	var form = document.getElementsByTagName('form');
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	
	//get method
	// var url = "add_adress_result.php?name="+name.value+
	//"&address="+address.value+"&city="+city.value+
	//"&state="+state.value+"&country="+country.value+
	// "&zip="+zip.value+"phonenumber="+phonenumber.value;
	// alert(url);
	// xmlhttp.open("GET",url,true);
	// xmlhttp.send(null);

	//post method
	var url = "name="+encodeURIComponent(name.value)+"&address="+encodeURIComponent(address.value)+
	"&city="+encodeURIComponent(city.value)+"&state="+encodeURIComponent(state.value)+
	"&country="+encodeURIComponent(country.value)+"&zip="+encodeURIComponent(zip.value)+
	"&phonenumber="+encodeURIComponent(phonenumber.value);
	xmlhttp.open("POST","addaddressresult.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;");
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var add_info = xmlhttp.responseText;
			if (add_info == "true") {
				alert("Add address successfully!!");
				document.forms[0].reset();
			}else{
				alert(add_info);
			}
		}
	}
//	rest.innerHTML = url;
	xmlhttp.send(url);

}
