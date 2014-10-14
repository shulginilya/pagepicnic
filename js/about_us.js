var geocoder = new google.maps.Geocoder();

geocoder.geocode({
  address: "Halmstad, Sverige. 12 sweden street"
}, function(g_results, status) {
  var map_res = g_results[0];
  var map_options = {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigatorControl: true,
    navigationControlOptions: {
      style: google.maps.NavigationControlStyle.SMALL,
      position: google.maps.ControlPosition.BOTTOM_LEFT
    },
    mapTypeControl: true,
    mapTypeControlOptions: {
      position: google.maps.ControlPosition.BOTTOM
    },
    scrollwheel: false
  };
  var map = new google.maps.Map(document.getElementById("about_us_map"), map_options);
  var init_location = new google.maps.LatLng(map_res.geometry.location.lat(), map_res.geometry.location.lng());
  map.setCenter(init_location);
  map.setZoom(12);
  var c_marker = new google.maps.Marker({
    position: init_location,
    map: map,
    animation: google.maps.Animation.DROP
  });
});