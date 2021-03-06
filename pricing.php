<!DOCTYPE html>

<html lang="en">
<head>
    <title>Pricing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>
    <script type="text/javascript" src="./js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="./js/pricing.js"></script>
    <link href="./css/pricing.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='pricing_section regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>Simple, Trap Free Pricing</h1>
            <p class='disc'><span class='green_text'>No credit card required.</span> Upgrade, downgrade, or cancel anytime.</p>
            <div class='pricing_tabs_wrap'>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#pr_annual" role="tab" data-toggle="tab">Billed annually</a></li>
                  <li><a href="#pr_year" role="tab" data-toggle="tab">Billed yearly</a></li>
                </ul>
                <div class="tab-content">
                   <div class="tab-pane active" id="pr_annual">
                    <div class='row clearfix'>
                      <div class='col-xs-6 col-sm-6 col-md-6 price_box_wrap'>
                        <div class='price_box active'>
                          <p class='headline'>Standard</p>
                          <div class='pay_line'>
                            <p class='pcost_line'><span class='one'>$9.90</span><span class='two'>/mo</span></p>
                            <p class='dcost_line'>Billed annually</p>
                          </div>
                          <div class='reg_block'>
                            <p><span class='boldy'>5</span> GB of <span class='boldy'>Storage</span></p>
                            <p><span class='boldy'>Unlimited</span> sub-pages <img class='info_icon' src="./images/i_icon.png" data-toggle="tooltip" data-placement="right" title="" data-original-title="<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>"></p>
                            <p>Use a <span class='boldy'>real domain name</span></p>
                          </div>
                          <div class='foot'></div>
                        </div>
                      </div>
                      <div class='col-xs-6 col-sm-6 col-md-6 price_box_wrap'>
                        <div class='price_box'>
                          <p class='headline'>Professional</p>
                          <div class='pay_line'>
                            <p class='pcost_line'><span class='one'>$16.90</span><span class='two'>/mo</span></p>
                            <p class='dcost_line'>Billed annually</p>
                          </div>
                          <div class='reg_block'>
                            <p><span class='boldy'>5</span> GB of <span class='boldy'>Storage</span></p>
                            <p><span class='boldy'>Unlimited</span> sub-pages <img class='info_icon' src="./images/i_icon.png" data-toggle="tooltip" data-placement="right" title="" data-original-title="<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>"></p>
                            <p>Use a <span class='boldy'>real domain name</span></p>
                            <p><span class='boldy'>Multi-language support</span></p>
                          </div>
                          <div class='foot'></div>
                        </div>
                      </div>
                    </div>
                   </div>
                   <div class="tab-pane" id="pr_year">
                    <div class='row clearfix'>
                      <div class='col-xs-6 col-sm-6 col-md-6 price_box_wrap'>
                        <div class='price_box active'>
                          <p class='headline'>Standard</p>
                          <div class='pay_line'>
                            <p class='pcost_line'><span class='one'>$9.90</span><span class='two'>/year</span></p>
                            <p class='dcost_line'>Billed annually</p>
                          </div>
                          <div class='reg_block'>
                            <p><span class='boldy'>5</span> GB of <span class='boldy'>Storage</span></p>
                            <p><span class='boldy'>Unlimited</span> sub-pages <img class='info_icon' src="./images/i_icon.png" data-toggle="tooltip" data-placement="right" title="" data-original-title="<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>"></p>
                            <p>Use a <span class='boldy'>real domain name</span></p>
                          </div>
                          <div class='foot'></div>
                        </div>
                      </div>
                      <div class='col-xs-6 col-sm-6 col-md-6 price_box_wrap'>
                        <div class='price_box'>
                          <p class='headline'>Professional</p>
                          <div class='pay_line'>
                            <p class='pcost_line'><span class='one'>$16.90</span><span class='two'>/year</span></p>
                            <p class='dcost_line'>Billed annually</p>
                          </div>
                          <div class='reg_block'>
                            <p><span class='boldy'>5</span> GB of <span class='boldy'>Storage</span></p>
                            <p><span class='boldy'>Unlimited</span> sub-pages <img class='info_icon' src="./images/i_icon.png" data-toggle="tooltip" data-placement="right" title="" data-original-title="<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>"></p>
                            <p>Use a <span class='boldy'>real domain name</span></p>
                            <p><span class='boldy'>Multi-language support</span></p>
                          </div>
                          <div class='foot'></div>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
                <div class='all_f_dd'>
                  <p class="text-center"><a class='all_f_dd_lnk' href='javascript:void(0)'>See all features</a></p>
                </div>
                <div class='text-center cnt'>
                  <a class='btn filled fs_21' href="javascript:void(0)">Start now <div class='arrow_wrap'></div></a>
                </div>
                <div class='note'>
                  <p class='text-center'>Note: You order by signing up and going to our order page when logged in</p>
                </div>
            </div>

          </div>
        </div>
      </div>

      <div class='faq_section regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>Questions & Answers</h1>
            <p class='disc'>
              Don’t hesitate to <span class='green_text'>ask us</span> if you cannot find the answers below.
            </p>
          </div>

          <div class='row clearfix faq_blocks_rsec'>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Is there a long term contract?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Do you have a satisfaction guarantee?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes. 
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Can I switch subscription type?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.  
              </p>
            </div>
          </div>

          <div class='row clearfix faq_blocks_rsec'>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Is hosting included?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Is email included?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes. 
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>What happens after 30 days trial?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.  
              </p>
            </div>
          </div>

          <div class='row clearfix faq_blocks_rsec'>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>Can I use my own domain name?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>How can I pay?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes. 
              </p>
            </div>
            <div class='col-xs-4 col-sm-4 col-md-4 faq_block'>
              <p class='faq_h'>One more question?</p>
              <p class='faq_desc'>
                The drag-n-drop interface can be used by five year olds and design pros. We obsess about making you and your website successful. Our tools help you create a unique and mobile-friendly website in minutes.  
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class='all_features_section regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>All features</h1>
            <div class='row all_ft_stack clearfix'>
              <div class='ft_line_holder clearfix'>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>&nbsp;</div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Standart</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Professional</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>A real domain name</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Storage space</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>5 GB</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='green_text text-center'>15 GB</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Bandwidth</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>100 GB</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='green_text text-center'>200 GB</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Traffic Statistics</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Mobile site</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>iPhone & Android app</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Multi-language support</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>No</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='green_text text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Interactive SEO Guide</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Image gallery</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Image editor</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Online forms</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Calendar</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Video player</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Audio player</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Guestbook</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Blog</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>News</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Comments</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Maps</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Feed reader (RSS)</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Files & Documents</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Flash player</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Social media</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Number of pages</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Unlimited</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Unlimited</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Page levels</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>3 levels</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>3 levels</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Password protected pages</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
                  </div>
                </div>
                <div class='ft_line clearfix'>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_l'>
                    <p>Custom HTML</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_c'>
                    <p class='text-center'>Yes</p>
                  </div>
                  <div class='col-xs-4 col-sm-4 col-md-4 ft_line_r'>
                    <p class='text-center'>Yes</p>
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
