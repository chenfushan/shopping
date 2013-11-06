$(document).ready(function() {
	var num = parseInt($('input#itemnum').val());
	$('div#order-detail').css("height",num*90);

	$('input#pay_button').click(
		function() {
			location.href = "paycart.php";
		}
		)
});