<!DOCTYPE html>

<html lang="en">
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>

    <script type="text/javascript" src="./js/ajaxupload.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
    <script type="text/javascript" src="./js/about_us.js"></script>
    <link href="./css/aboutus.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='aboutus_headline_block regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>Made in <img src="./images/sweden_flag.png"> by entrepreneurs, for entrepreneurs</h1>
          </div>
        </div>
      </div>

      <div class='aboutus_headnav_block'>
        <div class='ahb_nav_hold'>
          <div class='container'>
            <div class='row clearfix text-center'>
              <ul class='clearfix'>
                <li><a id="about_us_tbl_lnk" class='active' href="javascript:void(0)" onclick="location.hash = 'about_us'">About us</a></li>
                <li><a id="our_team_tbl_lnk" href="javascript:void(0)" onclick="location.hash = 'our_team'">Our team</a></li>
                <li><a id="jobs_tbl_lnk" href="javascript:void(0)" onclick="location.hash = 'jobs'">Jobs</a></li>
                <li><a id="press_tbl_lnk" href="javascript:void(0)" onclick="location.hash = 'press'">Press</a></li>
                <li><a id="soc_resp_tbl_lnk" href="javascript:void(0)" onclick="location.hash = 'soc_resp'">Social Responsibility</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class='tabs_system_section active' page-id='about_us'>

        <div class='aboutus_headnav_img_hold'><img class='img-responsive' src="./images/aboutus_headnav_img_hold.jpg"></div>
        <div class="about_us_content_line p_top p_bottom">
          <div class='container'>
            <div class='row clearfix'>
              <div class='auc_txt_block_wrap rect_middle'>
                <p class='auc_headline'>About PagePicnic</p>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>We launched our website builder back in 2008, and in April 2014 we launched the international version - the one you are using right now!</p>
                  <p class='basic_txt'>Now we have more than 11 000 entrepreneurs using our website- builder to create, manage and tweak their websites.</p>
                  <p class='basic_txt'>We are a team of 16 people with skills in everything from programming to product development and design. We pride ourselves on working hard to make sure that you will have a successful website for years to come.</p>
                </div>
              </div>
              <div class='auc_bc_txt_block'>
                <div class='abtb_inside pull-right'>
                  <p class='bl_hl boldy'>Our values</p>
                  <div class='abtb_sub_block'>
                    <p class='abtb_sb_h boldy'>Excellence</p>
                    <p class='abtb_sb_r'>
                      For us, merely meeting customer expectations is not good enough. We endeavour to exceed your expectations in all aspects of our service.
                    </p>
                  </div>
                  <div class='abtb_sub_block'>
                    <p class='abtb_sb_h boldy'>Fostering creativity</p>
                    <p class='abtb_sb_r'>
                      Creativity is a natural part of who we are as people. That’s why it makes sense for us to embrace and encourage the creative freedom our customers employ when building their websites.
                    </p>
                  </div>
                  <div class='abtb_sub_block'>
                    <p class='abtb_sb_h boldy'>Long-term thinking</p>
                    <p class='abtb_sb_r'>
                      As entrepreneurs ourselves, we try to always be forward-thinking.  Rather than short-lived and sporadic trends, we focus on giving our customer exactly what they need now, and on what will benefit them most in the long-term. You can be sure that we’re here to stay and grow with you. 
                    </p>
                  </div>
                  <div class='abtb_sub_block'>
                    <p class='abtb_sb_h boldy'>Doing more with less</p>
                    <p class='abtb_sb_r'>
                      We are big fans of being able to produce amazing results without the expensive price tag. We pass this on to our customers, who enjoy the benefits of a low-cost website solution that always looks stunning.  
                    </p>
                  </div>
                  <div class='abtb_sub_block'>
                    <p class='abtb_sb_h boldy'>Building a strong community, together.</p>
                    <p class='abtb_sb_r'>
                      We love what we do and it’s important to us that our customers feel the same. That’s why our values are directed towards building a strong sense of community that we can all benefit from, whilst having fun at the same time!  
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="about_us_content_line p_bottom">
          <div class='container'>
            <div class='row clearfix'>
              <div class='auc_txt_block_wrap rect_middle'>
                <p class='auc_headline'>Our history</p>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  </p>
                </div>
              </div>
              <div class='basic_pic_holder'><img src="./images/aboutus_history_pic.jpg"></div>
            </div>
          </div>
        </div>

        <div class="about_us_content_line p_bottom">
          <div class='container'>
            <div class='row clearfix'>
              <div class='auc_txt_block_wrap rect_middle'>
                <p class='auc_headline'>Our headquarters</p>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>
                    We are currently based in Sweden in a lovely town called Halmstad, a place particularly famous for its wonderful beaches and summer parties (which we rather enjoy).  
                  </p>
                  <p class='basic_txt'>If you’re in town swing by our office for a cup of coffee or tea!</p>
                </div>
              </div>
              <div class='basic_pic_holder'><img src="./images/aboutus_hq_pic.jpg"></div>
              <div class='auc_txt_block_wrap rect_middle'>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>
                    Our office is an old apartment in central Halmstad, dated from 1901 and it is absolutely beautiful. 
                    If you happen to come by Halmstad, please visit our office!
                  </p>
                </div>
              </div>
              <div class='basic_pic_holder'><img src="./images/aboutus_hq_pic_1.jpg"></div>
              <div class='auc_txt_block_wrap rect_middle'>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>
                    Our company is profitable, self-funded and in it for the long term. So don't worry, we will work hard to make sure you have a successful website for years to come.
                  </p>
                </div>
              </div>
              <div class='basic_pic_holder'><img src="./images/aboutus_hq_pic_2.jpg"></div>
              <div class='auc_txt_block_wrap rect_middle'>
                <div class="auc_reg_txt_block">
                  <p class='basic_txt'>
                    Our company is profitable, self-funded and in it for the long term. So don't worry, we will work hard to make sure you have a successful website for years to come.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class='aboutus_map_block'>
          <div class='amb_bottom_overlay'></div>
          <div class='amb_textline'>
            <p>Office</p>
            <p>12 Sweden street, Halmstad</p>
          </div>
          <div id="about_us_map" class='aboutus_map_img_hold'></div>
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

      </div>

      <div class='tabs_system_section tss_our_team_page' page-id='our_team'>
        <div class='our_team_wrap regular_content_block'>
          <div class='container'>
            <div class='row clearfix'>
              <h1 class='h'>The PagePicnic family</h1>
              <p class='disc'><span class='green_text'>Hi there!</span> Here we are.</p>
              <div class='team_members_wrap'>
                <div class='row tmw_row clearfix'>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                </div>
                <div class='row tmw_row clearfix'>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                </div>
                <div class='row tmw_row clearfix'>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                </div>
                <div class='row tmw_row clearfix'>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                  <div class='col-xs-6 col-sm-3 col-md-3 team_member_block'>
                    <div class='tmb_img_holder'><img src="./images/our_team_demo_pic.png"></div>
                    <p class='t_h'>John</p>
                    <p class='t_d'>UI/UX Designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class='tabs_system_section tss_jobs_page' page-id='jobs'>
        <div class='container'>
          <h1 class='hl'>Work at PagePicnic</h1>
          <div class='jobs_form_wrap'>
            <p class='ds'>
              Currently we havee no open positions, but we are always looking for great people to join us, so feel free to send us your appication.
            </p>
            <form role="form" class='jobs_form'>
              <div class="form-group">
                <label>Your name:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group two_lines_rows clearfix">
                <div class='col-xs-6 col-sm-6 col-md-6'>
                  <label>Email:</label>
                  <input type="text" class="form-control">
                </div>
                <div class='col-xs-6 col-sm-6 col-md-6'>
                  <label>Phone number:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group two_lines_rows clearfix">
                <div class='col-xs-6 col-sm-6 col-md-6'>
                  <a id="attach_csv_file" href="javascript:void(0)" class="btn btn-success btn-success-custom middle_size filled full_w">Upload CV</a>
                </div>
                <div class='col-xs-6 col-sm-6 col-md-6'>
                  <a id="attach_letter_file" href="javascript:void(0)" class="btn btn-success btn-success-custom middle_size filled full_w">Upload letter</a>
                </div>
              </div>
              <div class="form-group">
                <label>Message:</label>
                <textarea class='form-control'></textarea>
              </div>
              <div class='text-center'>
                <button type="submit" class="btn btn-success btn-success-custom middle_size filled" onclick='return false;'>Send</button>
              </div>
            </form>
            <p class='party_hl'>Below is video from one of our company parties</p>
            <div class='video_holder'>
              <iframe src='//player.vimeo.com/video/79957362' width='100%' height='406' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </div>

      <div class='tabs_system_section tss_press_page' page-id='press'>
        <div class='press_page_wrap regular_content_block'>
          <div class='container'>
            <h1 class='h'>Press Resources</h1>
            <p class='disc'>Here is everything we have</p>
          </div>
          <div class='press_down_green_line'>
            <div class='pdgl_cnt text-center'>
              <a class='btn btn-default btn-default-custom middle_size' href="javascript:void(0)"><span class='fa fa-download'></span> Download the PagePicnic logotype</a>
            </div>
          </div>
          <div class='container'>
            <div class='row pr_tbl_wrap clearfix'>
              <div class='col-xs-6 col-sm-6 col-md-6 left_pr'>
                <p class='hl'>Latest press releases</p>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Don't worry. Be happy: A business strategy</p>
                  <p class='hl_body'>(PandoDaily 2014-01-22)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>PagePicnic and Amazon Web Services team up for Stockholm event</p>
                  <p class='hl_body'>(Swedish Startup Space 2014-01-02)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Lika för alla är ledordet</p>
                  <p class='hl_body'>(Hallandsposten 2013-12-30)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 to Launch Internationally</p>
                  <p class='hl_body'>(ArcticStartup 2013-12-09)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Värda en plats i solen</p>
                  <p class='hl_body'>(Ingenjörskarriär 2013-10-21)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De flyttar hela kontoret till solen</p>
                  <p class='hl_body'>(Computer Sweden 2013-10-10)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 blir Page Picnic - och lanserar internationellt</p>
                  <p class='hl_body'>(StartupSweden 2013-10-08)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 når drömgränsen 10000 kunder</p>
                  <p class='hl_body'>(Pressmeddelande 2013-09-17)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>40 procent av mikroföretagen saknar hemsida</p>
                  <p class='hl_body'>(Pressmeddelande 2013-01-16)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Sveriges främsta hemsideverktyg blir gratis</p>
                  <p class='hl_body'>(Pressmeddelande 2012-12-11)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De flyttar ut kontoret i solen</p>
                  <p class='hl_body'>(TV4 Halland 2012-07-13)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 årets inkubatorföretag</p>
                  <p class='hl_body'>(Halmstads näringslivs AB 2009)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De drar ihop nya webbshoppar</p>
                  <p class='hl_body'>(Internetworld 2009-10-12)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Nu kan alla öppna nätaffär</p>
                  <p class='hl_body'>(GöteborgsPosten 2009-10-12)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 vill utmana webbhotellen</p>
                  <p class='hl_body'>(Internetworld 2008-11-21)</p>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-6 right_pr'>
                <p class='hl'>PagePicnic in the news</p>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Don't worry. Be happy: A business strategy</p>
                  <p class='hl_body'>(PandoDaily 2014-01-22)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>PagePicnic and Amazon Web Services team up for Stockholm event</p>
                  <p class='hl_body'>(Swedish Startup Space 2014-01-02)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Lika för alla är ledordet</p>
                  <p class='hl_body'>(Hallandsposten 2013-12-30)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 to Launch Internationally</p>
                  <p class='hl_body'>(ArcticStartup 2013-12-09)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Värda en plats i solen</p>
                  <p class='hl_body'>(Ingenjörskarriär 2013-10-21)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De flyttar hela kontoret till solen</p>
                  <p class='hl_body'>(Computer Sweden 2013-10-10)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 blir Page Picnic - och lanserar internationellt</p>
                  <p class='hl_body'>(StartupSweden 2013-10-08)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 når drömgränsen 10000 kunder</p>
                  <p class='hl_body'>(Pressmeddelande 2013-09-17)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>40 procent av mikroföretagen saknar hemsida</p>
                  <p class='hl_body'>(Pressmeddelande 2013-01-16)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Sveriges främsta hemsideverktyg blir gratis</p>
                  <p class='hl_body'>(Pressmeddelande 2012-12-11)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De flyttar ut kontoret i solen</p>
                  <p class='hl_body'>(TV4 Halland 2012-07-13)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 årets inkubatorföretag</p>
                  <p class='hl_body'>(Halmstads näringslivs AB 2009)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>De drar ihop nya webbshoppar</p>
                  <p class='hl_body'>(Internetworld 2009-10-12)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Nu kan alla öppna nätaffär</p>
                  <p class='hl_body'>(GöteborgsPosten 2009-10-12)</p>
                </div>
                <div class='press_post_line'>
                  <p class='hl_post boldy_m'>Hemsida24 vill utmana webbhotellen</p>
                  <p class='hl_body'>(Internetworld 2008-11-21)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class='tabs_system_section tss_soc_resp_page' page-id='soc_resp'>
        <div class='container'>
          <h1 class='hl'>We support the following organizations</h1>
          <div class='org_stack_over'>
            <div class='row org_row clearfix'>
              <div class='col-xs-6 col-sm-6 col-md-6'>
                <div class='org_block'>
                  <img src="./images/org_block_1.jpg">
                  <p>Nyforetagarcentrum Halland Guldpartner.</p>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-6'>
                <div class='org_block'>
                  <img src="./images/org_block_2.jpg">
                  <p>Unf foretagsamhet Halland Guldpartner.</p>
                </div>
              </div>
            </div>
            <div class='row org_row clearfix'>
              <div class='col-xs-6 col-sm-6 col-md-6'>
                <div class='org_block'>
                  <img src="./images/org_block_3.jpg">
                  <p>Hallesresa.se<br>Vi sponsrar med hemsidan.</p>
                </div>
              </div>
              <div class='col-xs-6 col-sm-6 col-md-6'>
                <div class='org_block'>
                  <img src="./images/org_block_4.jpg">
                  <p>Carl Henrik, utvecklare och bagskytt Kommer tavla i VM och sponsras av oss.</p>
                </div>
              </div>
            </div>
            <div class='row org_row clearfix'>
              <div class='col-xs-12 col-sm-12 col-md-12'>
                <div class='org_block'>
                  <img src="./images/org_block_5.jpg">
                  <p>Plan Sverige<br>Alla med fast anstallning hos oss har ett fadderbarn</p>
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
