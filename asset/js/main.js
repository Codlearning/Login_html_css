jQuery(document).ready(function($) {
	
	/*active brand*/
	$('.bran_item').click(function() {
		$('.bran_item').removeClass('active');
		$(this).toggleClass('active');
	});

	/*active menu*/
	$('.item').click(function() {
		$('.item').removeClass('active');
		$(this).toggleClass('active');
	});



});