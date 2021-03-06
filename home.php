<!DOCTYPE html>

<html lang="en">
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <?php include("./partials/head.html"); ?>
    <link href="./css/home.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='get_started_section regular_content_block'>
        <div class='container'>
            <div class='row clearfix'>
                <h1 class='h'>Create a mobile-friendly business website in minutes</h1>
                <p class='disc'>Easy to get started. Grows with your business. Starting at $9.99/mo. </p>
                <div class='get_started_form_wrap text-center'>
                    <form class="form-inline display_inline_block" role="form">
                      <div class="form-group">
                        <input type="email" class="form-control" id="get_started_email" name="get_started_email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="get_started_uname" name="get_started_uname" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="get_started_psw" name="get_started_psw" placeholder="Password">
                      </div>
                      <button type="submit" class="btn filled fs_21" onclick="return false;">Start now <div class='arrow_wrap'></div></button>
                    </form>
                </div>
                <div class='note'>
                  <p class='text-center'>30 days free trial. No credit card required.</p>
                </div>
            </div>
        </div>
      </div>

      <div class='demo_screen_preview_section'>
        <div class='play_btn_wrap'><div class='play_btn'><span class='fa fa-play fa-3x p_icon'></span></div></div>
        <div class='image_holder'>
          <img src="./images/home_page_mac.png">
        </div>
      </div>
      <!-- <div class='demo_screen_preview_section'><img src="./images/demo_screen_preview_section.jpg"></div> -->

      <div class='promotion_section regular_content_block'>
        <div class='container'>
            <div class='note'>
              <p class='text-center'>as seen in</p>
            </div>
            <div class='row clearfix'>
                <div class='col-xs-6 col-sm-3 col-md-3 promo_block'>
                    <div class='pic_holder'><img src="./images/promo_pic_1.png"></div>
                    <!-- <p class='desc'>“Lorem Ipsum is simply dummy text.”</p> -->
                </div>
                <div class='col-xs-6 col-sm-3 col-md-3 promo_block'>
                    <div class='pic_holder'><img class='mt_top' src="./images/promo_pic_2.png"></div>
                    <!-- <p class='desc'>“Lorem Ipsum is simply dummy text.”</p> -->
                </div>
                <div class='col-xs-6 col-sm-3 col-md-3 promo_block'>
                    <div class='pic_holder'><img class='mt_top' src="./images/promo_pic_3.png"></div>
                    <!-- <p class='desc'>“Lorem Ipsum is simply dummy text.”</p> -->
                </div>
                <div class='col-xs-6 col-sm-3 col-md-3 promo_block'>
                    <div class='pic_holder'><img class='mt_top' src="./images/promo_pic_4.png"></div>
                    <!-- <p class='desc'>“Lorem Ipsum is simply dummy text.”</p> -->
                </div>
            </div>
        </div>
      </div>

      <div class='choose_templates_section regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>Choose a template to get started</h1>
            <p class='disc'>You can always change template at a later stage</p>
            <div class='templates_wrap'>
              
              <div class='row template_rline mobile_templates_wrap'>
                <div id="templates_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class='template_hold'>
                        <div class='template_hold_inside'>
                          <div class='hove_overlay'>
                            <div class='cnt'>
                              <div class='text-center'>
                                <a class='btn btn-sm'>Preview template</a>
                                <a class='btn btn-sm'>Choose template</a>
                              </div>
                            </div>
                          </div>
                          <img src="./images/template_pic_1.jpg">
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#templates_slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#templates_slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
              </div>              

              <div class='desktop_templates_wrap'>
                <div class='row template_rline'>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                </div>

                <div class='row template_rline'>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                </div>

                <div class='row template_rline'>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                  <div class='col-xs-12 col-sm-6 col-md-6 template_hold'>
                    <div class='template_hold_inside'>
                      <div class='hove_overlay'>
                        <div class='cnt'>
                          <div class='text-center'>
                            <a class='btn btn-md'>Preview template</a>
                            <a class='btn btn-md'>Choose template</a>
                          </div>
                        </div>
                      </div>
                      <img src="./images/template_pic_1.jpg">
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class='text-center cnt'>
              <a class='btn' href="./templates.html">Show more templates <div class='arrow_wrap'></div></a>
            </div>

          </div>
        </div>
      </div>  

      <div class='bus_standout regular_content_block'>
        <div class='container'>
          <h1 class='h'>Make your business stand out</h1>
          <div class='row clearfix'>
            <div class='col-xs-12 col-sm-4 col-md-4 standout_block'>
                <div class='pic_holder'><img src="./images/stand_pic_1.png"></div>
                <p class='head'>Lots of features</p>
                <p class='desc'>Forms, maps, photos, videos... you name it. We will most likely have all features you want, and more.</p>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4 standout_block'>
                <div class='pic_holder'><img class='mt_top' src="./images/stand_pic_2.png"></div>
                <p class='head'>All inclusive</p>
                <p class='desc'>Hosting, support, our drag & drop builder and 15+ customisable templates are included.</p>
            </div>
            <div class='col-xs-12 col-sm-4 col-md-4 standout_block'>
                <div class='pic_holder'><img class='mt_top' src="./images/stand_pic_3.png"></div>
                <p class='head'>Mobile-friendly</p>
                <p class='desc'>Your website will automatically be mobile-friendly without you having to do anything.</p>
            </div>
          </div>
          <div class='text-center cnt'>
            <a class='btn' href="./pricing.html">All features <div class='arrow_wrap'></div></a>
          </div>
        </div>
      </div>

      <div class='our_word_section regular_content_block'>
        <div class='container'>
          <h1 class='h'>Don’t take our word for it</h1>
          
          <div class='row our_word_block clearfix'>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='pic_holder'><img src="./images/our_word_pic_1.png"></div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='desc_holder'>
                <p class='h'>A small design studio</p>
                <p class='desc'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <p class="disc">
                  <span class='n'>John Stefanik</span><br>
                  <span class='e'>Stefanikdesign.com</span>
                </p>
              </div>
            </div>
          </div>

          <div class='row our_word_block clearfix'>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='pic_holder'><img src="./images/our_word_pic_2.png"></div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='desc_holder'>
                <p class='h'>A small design studio</p>
                <p class='desc'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <p class="disc">
                  <span class='n'>John Stefanik</span><br>
                  <span class='e'>Stefanikdesign.com</span>
                </p>
              </div>
            </div>
          </div>

          <div class='row our_word_block clearfix'>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='pic_holder'><img src="./images/our_word_pic_3.png"></div>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-6 owb_holder clearfix'>
              <div class='desc_holder'>
                <p class='h'>A small design studio</p>
                <p class='desc'>
                  Signing up with PagePicnic is the best thing my company has done online to date! I was able to design and input content to my new PagePicnic website in only two days. The ease of use and familiarity of tools (as if you done this before) is​ truly fantastic! PagePicnic has left no stone unturned when it comes to feature rich, content driven tools that makes your business look awesome online! Thanks PagePicnic, you have a customer for life!!
                </p>
                <p class="disc">
                  <span class='n'>John Stefanik</span><br>
                  <span class='e'>Stefanikdesign.com</span>
                </p>
              </div>
            </div>
          </div>

          <div class='text-center cnt'>
            <a class='btn' href="javascript:void(0)">Show more testimonials <div class='arrow_wrap'></div></a>
          </div>

        </div>
      </div>

      <div class='twitter_feed_section regular_content_block'>
        <div class='container'>
          <h1 class='h'>Twittrat om PagePicnic</h1>
          <!-- <div class='row twitter_feed_holder clearfix'></div> -->
          <div class='twitter_feed_holder clearfix'></div>
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

      <div class="modal fade" id="demo_video_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span class='fa fa-times' aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
              <div class='demo_video_hold'></div>
            </div>
          </div>
        </div>
      </div>

      <!-- ====== CONTENT SECTION (END) ====== -->

      <?php include("./partials/footer.html"); ?>

      <script type="text/javascript" src="./js/twitter_fetcher.js"></script>
      <script type="text/javascript" src="./js/home.js"></script>

    </div>
    
</body>

</html>
