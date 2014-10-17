$(document).ready(function() {
  $(window).bind("resize", function(e) {
    demoPreviewBlockResizer();
  });
  function demoPreviewBlockResizer() {
    if($(window).width() <= 1205) {
      var img_height = $(".image_holder > img").height();
      var dssh_height = $(".demo_screen_preview_section").height();
      // var n_h = img_height - 60;
      var n_h = img_height - 84;
      $(".demo_screen_preview_section").css("height", n_h + "px");
      // $(".demo_screen_preview_section > .image_holder").css("top", "-27px");
    } else {
      $(".demo_screen_preview_section").css("height", "562px");
      // $(".demo_screen_preview_section > .image_holder").css("top", "-27px");
    }
  }
  demoPreviewBlockResizer();

  $(".demo_screen_preview_section .play_btn_wrap .play_btn").bind("click", function(e) {
    $("#demo_video_modal .demo_video_hold").html("<iframe src='//player.vimeo.com/video/88357260?autoplay=1' width='100%' height='406' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>");
    $("#demo_video_modal").modal("show");
  });

  $('#demo_video_modal').on('hidden.bs.modal', function (e) {
    $("#demo_video_modal .demo_video_hold").html("");
  });


});

var home_tweets_config = {
  "id": '345690956013633536',
  "domId": '',
  "maxTweets": 6,
  "enableLinks": true,
  "showUser": true,
  "showTime": true,
  "dateFunction": '',
  "showRetweet": false,
  "customCallback": handleTweets,
  "showInteraction": false
};

function handleTweets(tweets) {
    var tweets_html = "";
    if(tweets.length > 0) {
      var per_page = 2;
      var pages = Math.floor(tweets.length / per_page);
      if(pages > 0) {
        for(var p = 1; p <= pages; p++) {
          tweets_html += "<div class='row twitter_feed_row clearfix'>";
          for(var pp = 1; pp <= per_page; pp++) {
            var t_index = p*pp - 1;
            tweets_html += "<div class='col-xs-6 col-sm-6 col-md-6'><div class='tweet_block'>" + tweets[t_index] + "</div></div>";
          }
          tweets_html += "</div>";
        }
      }
    } else {
      tweets_html = "<div class='alert alert-danger'><p><strong>No any tweets available</strong></p></div>";
    }
    $(".twitter_feed_holder").html(tweets_html);
}

twitterFetcher.fetch(home_tweets_config);
