<!DOCTYPE html>

<html lang="en">
<head>
    <title>Customers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>
    <script type="text/javascript" src="./js/customers.js"></script>
    <link href="./css/customers.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      
      <div class='customers_headline_block regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>You are in good company</h1>
            <p class='disc'>
              More than 11 000 entrepreneurs and small businesses use our website-builder
            </p>
          </div>
          <div class='video_place_hold'><img class='img-responsive' src="./images/video_place_hold.jpg"></div>
        </div>
      </div>

      <div class='customers_lists_block'>
         <div class='clb_rowline'>
          <div class='container'>
            <div class='row clearfix'>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <div class='pic_hold'><img class='img-responsive' src="./images/clb_rowline_pic_1.png"></div>
              </div>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <p class='clbr_hl boldy'>A small design studio</p>
                <p class='clbr_rg'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <div class='author_thumb clearfix'>
                  <div class='a_pic'><img src='./images/demo_user_thumb.png'></div>
                  <div class='a_details'>
                    <p class='boldy'>John Stefanik</p>
                    <p class='green_text'>Stefanikdesign.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class='clb_rowline'>
          <div class='container'>
            <div class='row clearfix'>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <div class='pic_hold'><img class='img-responsive' src="./images/clb_rowline_pic_1.png"></div>
              </div>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <p class='clbr_hl boldy'>A small design studio</p>
                <p class='clbr_rg'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <div class='author_thumb clearfix'>
                  <div class='a_pic'><img src='./images/demo_user_thumb.png'></div>
                  <div class='a_details'>
                    <p class='boldy'>John Stefanik</p>
                    <p class='green_text'>Stefanikdesign.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class='clb_rowline'>
          <div class='container'>
            <div class='row clearfix'>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <div class='pic_hold'><img class='img-responsive' src="./images/clb_rowline_pic_1.png"></div>
              </div>
              <div class='clbr_line col-xs-6 col-sm-6 col-md-6 clearfix'>
                <p class='clbr_hl boldy'>A small design studio</p>
                <p class='clbr_rg'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <div class='author_thumb clearfix'>
                  <div class='a_pic'><img src='./images/demo_user_thumb.png'></div>
                  <div class='a_details'>
                    <p class='boldy'>John Stefanik</p>
                    <p class='green_text'>Stefanikdesign.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div>

      <div class='start_trial_section regular_content_block'>
        <div class='container'>
            <div class='row clearfix'>
                <h1 class='h'>Start your free 30-day trial </h1>
                <p class='disc'>No credit-card required</p>
                <div class='start_trial_form_wrap text-center'>
                    <form class="form-inline display_inline_block" role="form">
                      <div class="form-group">
                        <input type="email" class="form-control" id="start_trial_email" name="start_trial_email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="start_trial_uname" name="start_trial_uname" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="start_trial_psw" name="start_trial_psw" placeholder="Password">
                      </div>
                      <div class='cnt'>
                        <button type="submit" class="btn filled fs_21" onclick="return false;">Start now <div class='arrow_wrap'></div></button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- ====== CONTENT SECTION (END)   ====== -->

      <?php include("./partials/footer.html"); ?>

    </div>
    
</body>

</html>
