$(document).ready(function() {

	function animated_scroll_top() {
		$("html, body").stop().animate(
			{
				scrollTop: 0
			}, 500, function() {
				
			}
		)
	}

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

	$(".mob_nav_knob > a").bind("click", function(e) {
		$('.header').removeClass('fixed');
		if($("#root").hasClass('m_toggle')) {
			$("#root, .mobile_sidebar_menu").removeClass('m_toggle');
		} else {
			$("#root, .mobile_sidebar_menu").addClass('m_toggle');
		}
		animated_scroll_top();
	});

	$(".main_nav_more_lnk, .tuh_close").bind("click", function(e) {
		if($('.top_under_header').hasClass('act')) {
			$('.top_under_header').removeClass('act');
		} else {
			$('.top_under_header').addClass('act');
		}
	});

});