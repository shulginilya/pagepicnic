<!DOCTYPE html>

<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>
    <link href="./css/contact_us.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='contact_headline_block regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>Contact us</h1>
            <p class='disc'>
              We are happy to answer every question you may have
            </p>
          </div>
        </div>
      </div>

      <div class='company_info_block'>
        <div class='cib_img_hold'><img class='img-responsive' src="./images/cib_img_hold.jpg"></div>
        <div class='cib_nav_hold'>
          <div class='container'>
            <div class='row clearfix'>
              <ul class='clearfix'>
                <li class='col-custom-3'>
                  <p class='cs_h'>Company name</p>
                  <p class='cs_d'>PagePicnic, c/o Lumik Enterprises AB</p>
                </li>
                <li class='col-custom-3'>
                  <p class='cs_h'>Adress</p>
                  <p class='cs_d'>Köpmansgatan 12, 30242 Halmstad, Sweden</p>
                </li>
                <li class='col-custom-3'>
                  <p class='cs_h'>Phone</p>
                  <p class='cs_d'>+1234567890</p>
                </li>
                <li class='col-custom-3'>
                  <p class='cs_h'>Fax</p>
                  <p class='cs_d'>+12345678901</p>
                </li>
                <li class='col-custom-3'>
                  <p class='cs_h'>Email</p>
                  <p class='cs_d'>info@pagepicnic.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class='contact_map_block regular_content_block'>
        <div class='container non_padd_container'>
          <div class='row clearfix'>
            <div class='col-xs-6 col-sm-6 col-md-6 clearfix'>
              <h1 class='h text-left'>Submit your question</h1>
              <form role="form" class='contact_us_form'>
                <div class="form-group">
                  <input type="email" class="form-control" id="contact_us_email" placeholder="Your email address">
                </div>
                <div class="form-group">
                  <textarea class='form-control'></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-success-custom middle_size filled pull-right" onclick='return false;'><span class='fa fa-check fa-check-custom'></span>Thank you for your question</button>
              </form>
            </div>
            <div class='col-xs-6 col-sm-6 col-md-6 clearfix'>
              <div class='map_hold pull-right'><img class='img-responsive' src="./images/map_placeholder.jpg"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- ====== CONTENT SECTION (END)   ====== -->

      <?php include("./partials/footer.html"); ?>

    </div>
    
</body>

</html>
