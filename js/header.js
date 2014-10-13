$(function(){
  	$("#header").load("/partials/header.html"); // === for local
  	// $("#header").load("/pagepicnic/partials/header.html"); // === for net-faces
});

function moreNavigationActivator(e) {
	if($('.top_under_header').hasClass('act')) {
		$('.top_under_header').removeClass('act');
	} else {
		$('.top_under_header').addClass('act');
	}
}