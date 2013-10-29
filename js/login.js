function check_u () {
	obj1 = document.getElementById('username');
	obj2 = document.getElementById('u_e');
	while(obj2.hasChildNodes()){
		obj2.removeChild(obj2.childNodes[0]);
	}
	var pattern = /[^\x00-\xff]/g;
	if (pattern.test(obj1.value) || obj1.value=="") {
		sub_t = document.createTextNode("Username can't be empty or chinese");
		obj2.appendChild(sub_t);
	}
}
function check_p () {
	obj1 = document.getElementById('password');
	obj2 = document.getElementById('p_w');
	while(obj2.hasChildNodes()){
		obj2.removeChild(obj2.childNodes[0]);
	}
	var pattern = /^\w+$/;
	// if (pattern.test(obj1.value) || obj1.value == "") {
	// 	sub_t = document.createTextNode("Password must be English characters or numbers or underline!");
	// 	obj2.appendChild(sub_t);
	// }
	if (obj1.value.length < 6 || obj1.value.length > 16) {
		sub_t = document.createTextNode("PW must between 6 and 16!");
		obj2.appendChild(sub_t);
	}

}
