$(document).ready(function() {

	$(window).scroll(function() {
		$(".mobile_sidebar_menu").height($(document).height() + "px");
		if(!$(".mobile_sidebar_menu").hasClass('m_toggle')) {
			if($(this).scrollTop() > 12) {
				$('.header').addClass('fixed');
			} else {
				$('.header').removeClass('fixed');
			}
		}
	});

	// $(".mob_nav_knob > a").bind("click", function(e) {
	// 	$('.header').removeClass('fixed');
	// 	if($("#root").hasClass('m_toggle')) {
	// 		$("#root, .mobile_sidebar_menu, .header, body").removeClass('m_toggle');
	// 	} else {
	// 		$("#root, .mobile_sidebar_menu, .header, body").addClass('m_toggle');
	// 	}
	// 	animated_scroll_top();
	// });

});
