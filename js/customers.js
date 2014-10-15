$(document).ready(function() {
	$(".video_place_hold").bind("click", function(e) {
		$(this).html("<iframe src='//player.vimeo.com/video/88357260?autoplay=1' width='100%' height='406' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>");
	});
});