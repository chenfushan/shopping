$(document).ready(function() {
	var addnum = parseInt($('input#addnum').val());
	if (addnum % 2 == 0) {
		addnum = (addnum/2)*100+200;
	}else{
		addnum = ((addnum+1)/2)*100+200;
	}
//	alert(addnum);
	$('div#address-select').css("height",addnum);

});