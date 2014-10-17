$(function(){
  	// $("#mobile_sidebar_menu").load("/partials/mobile_sidebar_menu.html"); // === for local
  	$("#mobile_sidebar_menu").load("/pagepicnic/partials/mobile_sidebar_menu.html"); // === for net-faces

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