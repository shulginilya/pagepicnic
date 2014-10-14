$(document).ready(function() {
	$('.info_icon').tooltip({
		html: true
	});

	$(".all_f_dd_lnk").bind("click", function(e) {
		$.scrollTo(".all_features_section", 500);
	});
});