<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Contact us page">
  
  <title>Contact us</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">

  
  <?php 
  if(isset($_GET['contacted'])){
      $contacted=$_GET['contacted'];
      if($contacted=="true"){
        $form_status="hidden";
        $thanks="";
      }else{
        $form_status="";
        $thanks="hidden";
      }
    
  } else {
      $form_status="";
      $thanks="hidden";
  }
 
  ?>
  
  
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
        <?php require_once ('common/Components/header.php'); ?>
  </section>

<section class="mbr-section content5 cid-ruXJBlWiZf mbr-parallax-background" id="content5-1o">
  <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);" > 
    </div>
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
            <h2 style="font-size:40px;text-align:center;margin-top:30px">Get in touch</h2>
                <p class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-4">Want to find out how CEES can solve problems specific to your business? Let's talk.</p> 
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts2 cid-ruOSFMRcwn" id="contacts2-12">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                
                
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="b b-adress" style="align-items: center;">
                      
                               <img src="assets/images/img/Group 53.png" style=" display: block; margin-left: auto; margin-right: auto;"/>
                         
                            <p class="mbr-text align-left mbr-fonts-style display-4" style=" font-weight: bold;color: black; text-align: center;">
                                350 5th Ave, New York, NY 10118, USA
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="b b-phone" >
                      
                      
                            <img src="assets/images/img/Group 40.png" style=" display: block; margin-left: auto; margin-right: auto;"/>
                         
                            <p class="mbr-text align-left mbr-fonts-style display-4" style=" font-weight: bold; color: black; text-align: center;">
                            +94 778 241 664
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="b b-mail" >
                      
                            <img src="assets/images/img/Group 38.png" style=" display: block; margin-left: auto; margin-right: auto;"/>
                         
                            <p class="mbr-text align-left mbr-fonts-style display-4" style=" font-weight: bold;color: black; text-align: center;">
                            info@ceesinternational.org
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-ruOSWCqLJZ" id="form4-13">

    

    
    <div class="container" id="section_form">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEIpgj38KyLFELm2bK9Y7krBkz1K-cMq8&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Drop a Line
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3" style=" font-weight: bold;"> 
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for offers and cooperation
                        </h5>
                        <p class="align-left mbr-fonts-style display-7">
                            Phone:  +94 778 241 664 <br>
                            Email: info@ceesinternational.org
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid" >
                    <!---Formbuilder Form--->
                    <form action="send_mail.php" method="POST" class="mbr-form form-with-styler" data-form-title=" Form">
                        <!-- <input type="hidden" name="email" data-form-email="true" value="jnnKn/ep5LrfG1+XiB2QI/meobVgqJWazxXWnGZGEmThchQqffk0+LXWDVoQH21LvOL853j5U1bHD2sg0TrHmqMJisSgC/zQMCuzrO3PUt/UB4uQNbW9RKLIofYPDXav"> -->
                        <div class="row" <?php echo $thanks ?>>
                            <div  data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div  data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row" <?php echo $form_status ?>>
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-13">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="tel" size="10" name="phone" placeholder="Phone" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-13">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-13">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-13"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center"><button type="submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-ruOTxA2tiD" id="footer5-16">
<?php require_once ('common/Components/footer.php'); ?>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="assets/theme/js/preloader.js"></script>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>