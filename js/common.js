$(function() {

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
		$("#root, .mobile_sidebar_menu, .header, body").removeClass('m_toggle');
	} else {
		$("#root, .mobile_sidebar_menu, .header, body").addClass('m_toggle');
	}
}
