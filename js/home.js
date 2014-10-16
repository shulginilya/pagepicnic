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
