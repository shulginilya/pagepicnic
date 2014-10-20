<!DOCTYPE html>

<html lang="en">
<head>
    <title>Support Registered</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php include("./partials/head.html"); ?>
    <script type="text/javascript" src="./js/ajaxupload.js"></script>
    <script type="text/javascript" src="./js/support_reg.js"></script>
    <link href="./css/support_reg.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>
</head>

<body>

    <?php include("./partials/mobile_sidebar_menu.html"); ?>

    <div id='root'>

      <?php include("./partials/header.html"); ?>

      <!-- ====== CONTENT SECTION (START) ====== -->
      <div class='support_reg_headline_block regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>
            <h1 class='h'>We are here to help</h1>
            <p class='disc'>
              Today’s support team
            </p>
          </div>
        </div>  
      </div>

      <div class='support_reg_inside regular_content_block'>
        <div class='container'>
          <div class='row clearfix'>

            <div class='col-xs-6 col-sm-7 col-md-7 clearfix left_r'>
              <div class='sri_logged_block'>
                <div class='row logged_row_wrap clearfix'>
                  <div class='logged_row clearfix'>
                    <div class='col-xs-6 col-sm-4 col-md-4'>
                      <p>You are logged in as:</p>
                    </div>
                    <div class='col-xs-6 col-sm-8 col-md-8'>
                      <p class='boldy'>Peter Parker</p>
                    </div>
                  </div>
                  <div class='logged_row clearfix'>
                    <div class='col-xs-6 col-sm-4 col-md-4'>
                      <p>Your email address:</p>
                    </div>
                    <div class='col-xs-6 col-sm-8 col-md-8'>
                      <p class='boldy'>peter@parker.com</p>
                    </div>
                  </div>
                  <div class='logged_row clearfix'>
                    <div class='col-xs-6 col-sm-4 col-md-4'>
                      <p>Your mobile number:</p>
                    </div>
                    <div class='col-xs-6 col-sm-8 col-md-8'>
                      <p class='boldy'>070-3243432</p>
                    </div>
                  </div>
                </div>
              </div>

              <form role="form" class='contact_us_form'>
                <div class="form-group">
                  <label>Explain your question in short words:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Write your question:</label>
                  <textarea class='form-control'></textarea>
                </div>
                <div class="form-group">
                  <button type="button" id="attach_image_file" class="btn btn-success btn-success-custom middle_size filled">Attach a file or image</button>
                </div>
                <div class='text-center'>
                  <button type="submit" class="btn btn-success btn-success-custom middle_size filled" onclick='return false;'>Send</button>
                </div>
              </form>

            </div>

            <div class='col-xs-6 col-sm-5 col-md-5 right_r'>

              <div class='team_member_block'>
                <p>The team that will help</p>
                <div class="team_member_box clearfix">
                  <div class='team_pic_block'>
                    <img src="./images/team_pic_1.png">
                    <p class='tpb_h text-center boldy'>Joanna</p>
                  </div>
                  <div class='team_pic_block'>
                    <img src="./images/team_pic_2.png">
                    <p class='tpb_h text-center boldy'>John</p>
                  </div>
                  <div class='team_pic_block'>
                    <img src="./images/team_pic_3.png">
                    <p class='tpb_h text-center boldy'>Lara</p>
                  </div>
                  <div class='team_pic_block'>
                    <img src="./images/team_pic_4.png">
                    <p class='tpb_h text-center boldy'>Julia</p>
                  </div>
                  <div class='team_pic_block'>
                    <img src="./images/team_pic_5.png">
                    <p class='tpb_h text-center boldy'>Carolina</p>
                  </div>
                </div>
              </div>

              <div class='tickets_block'>
                <p>Current ticket que</p>
                <div class='tickets_box'>
                  <p class='hl1 text-center boldy'>We currently have</p>
                  <p class='hl2 text-center green_text'>4</p>
                  <p class='hl3 text-center boldy'>tickets in queue</p>
                </div>
              </div>

              <div class='timing_block'>
                <p>Opening hours</p>
                <div class='timing_box'>
                  <p class='hl text-center boldy'>Mondays - Thursdays</p>
                  <p class='tl text-center'>8.00 am - 5.00 pm GMT +1 </p>
                  <p class='hl text-center boldy'>Fridays</p>
                  <p class='tl text-center'>8.00 am - 3.00 pm GMT +1 </p>
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
