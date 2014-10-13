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

function animated_scroll_top() {
	$("html, body").stop().animate(
		{
			scrollTop: 0
		}, 500, function() {
			
		}
	)
}

function activateMobileMenu(e) {
	$('.header').removeClass('fixed');
	if($("#root").hasClass('m_toggle')) {
		// $("#root").animate({
  //      left: '0px'
  //   }, { duration: 200, queue: false });
  //   $(".header").animate({
  //      left: '0px'
  //   }, { duration: 200, queue: false });
		$("#root, .mobile_sidebar_menu, .header, body").removeClass('m_toggle');
	} else {
		// $("#root").animate({
  //      left: '-260px'
  //   }, { queue: false });
  //   $(".header").animate({
  //      left: '-260px'
  //   }, { queue: false });
		$("#root, .mobile_sidebar_menu, .header, body").addClass('m_toggle');
	}
	animated_scroll_top();
}
