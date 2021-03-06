<!DOCTYPE html>

<html lang="en">
<head>
    <title>Support</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>
    <link href="./css/support.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='support_section regular_content_block'>
        <div class='container'>
          <div class='row non_margins_row clearfix'>
            <h1 class='h'>How can we help you?</h1>
            <p class='disc'>For a quick answer, try our search</p>
            <div class='support_search_holder'>
              <input type="text" class="form-control" id="s_support" name="s_support" placeholder="e.g. setting up a custom domain">
              <span class='fa fa-search s_icon'></span>
            </div>
            <div class="pic_img_holder"><img class="img-responsive" src="./images/f_support_segment_img.jpg"></div>
            <div class='row non_margins_row clearfix support_inside_menu'>
              <div class='col-xs-4 col-sm-4 col-md-4 sim_block sim_block_know'>
                <div class='pic_hold'><img src="./images/support_inside_menu_pic2.png"></div>
                <p class='h'>Knowledge base</p>
                <p class='d'>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div class='cnt text-center'>
                  <a class='btn' href="http://hemsida24.se/help">Go to Q&A <div class='arrow_wrap'></div></a>
                  <!-- <a class='btn btn-success btn-success-custom middle_size' href="http://hemsida24.se/help">Go to Q&A <div class='arrow_wrap'></div></a> -->
                </div>
              </div>
              <div class='col-xs-4 col-sm-4 col-md-4 sim_block sim_block_contact'>
                <div class='pic_hold'><img src="./images/support_inside_menu_pic1.png"></div>
                <p class='h'>Contact us</p>
                <p class='d'>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div class='cnt text-center'>
                  <a class='btn blue_theme' href='./contact_us.html'>Contact us now <div class='arrow_wrap'></div></a>
                  <!-- <a class='btn btn-info btn-info-custom middle_size' href='./contact_us.html'>Contact us now <div class='arrow_wrap'></div></a> -->
                </div>
              </div>
              <div class='col-xs-4 col-sm-4 col-md-4 sim_block sim_block_feedback'>
                <div class='pic_hold'><img src="./images/support_inside_menu_pic3.png"></div>
                <p class='h'>Feedback & Ideas</p>
                <p class='d'>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div class='cnt text-center'>
                  <a class='btn purple_theme' href="http://hemsida24.uservoice.com">Give feedback <div class='arrow_wrap'></div></a>
                  <!-- <a class='btn btn-danger btn-danger-custom middle_size' href="http://hemsida24.uservoice.com">Give feedback <div class='arrow_wrap'></div></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ====== CONTENT SECTION (END) ====== -->

      <?php include("./partials/footer.html"); ?>

    </div>
    
</body>

</html>
