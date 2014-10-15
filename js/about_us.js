$(document).ready(function() {

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

  if ($("#attach_csv_file").length > 0) {
    var attach_csv_file = $("#attach_csv_file");
    new AjaxUpload(attach_csv_file, {
      action: "",
      name: 'file',
      responseType: 'json',
      onChange: function(file, extension) {

      },
      onComplete: function(file, response) {

      }
    });
  }

  if ($("#attach_letter_file").length > 0) {
    var attach_letter_file = $("#attach_letter_file");
    new AjaxUpload(attach_letter_file, {
      action: "",
      name: 'file',
      responseType: 'json',
      onChange: function(file, extension) {

      },
      onComplete: function(file, response) {

      }
    });
  }

  $(window).bind("hashchange", function() {
    hashLocationChecker();
  });

  function hashLocationChecker() {
    $(".ahb_nav_hold ul > li > a").removeClass('active');
    $(".tabs_system_section").removeClass('active');
    if(location.hash && location.hash !== "") {
      if(location.hash == '#about_us') {
        $("#about_us_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='about_us']").addClass('active');
      } else if(location.hash === '#our_team') {
        $("#our_team_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='our_team']").addClass('active');
      } else if(location.hash === '#jobs') {
        $("#jobs_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='jobs']").addClass('active');
      } else if(location.hash === '#press') {
        $("#press_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='press']").addClass('active');
      } else if(location.hash === '#soc_resp') {
        $("#soc_resp_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='soc_resp']").addClass('active');
      } else {
        $("#about_us_tbl_lnk").addClass('active');
        $(".tabs_system_section[page-id='about_us']").addClass('active');
      }
    } else {
      $("#about_us_tbl_lnk").addClass('active');
      $(".tabs_system_section[page-id='about_us']").addClass('active');
    }
  }

  hashLocationChecker();

});

