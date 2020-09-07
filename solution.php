
<?php
include_once 'Model/dbh.inc.php';
include 'Model/sections.inc.php';
include 'Model/viewSections.inc.php';
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Solutions Lab</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">
  <!-- page css-->
  <link href="assets/css/newstyles.css" rel="stylesheet">
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/blue.css"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <!-- Header Navbar -->
  <section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
        <?php require_once ('common/Components/header.php'); ?>
  </section>

  <section id="header2-1">
    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" >
              <div class="parallax cid-ruNtyUeTOv3 mbr-fullscreen d-block w-100" alt="Third slide"></div>
              <div class="carousel-caption third">
              <h5><span class="part1">Solutions</span> 
                      <br>
                      <span class="part2">Lab</span>
                  </h5>
              <p>Amplifying Future</p>
              </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true" >
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section> 
<!-- end section -->

<!-- dynamic view  -->
<section class="first-section">
<?php
    $services=new ViewSections();
    $services->ShowSL_CONTENT('1012');
  ?>
</section>


 <!-- end dynamic view -->


 <section class="cid-ruXI5U4sXz" id="footer5-1m" style="padding: 0;">
    <?php require_once ('common/Components/footer.php'); ?>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script> -->
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/theme/js/preloader.js"></script>

<!-- page js-->
 <!-- JavaScript Libraries -->
 <!--  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script> -->
  <script src="assets/lib/php-mail-form/validate.js"></script>
  <script src="assets/lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="assets/lib/isotope/isotope.min.js"></script>
  <script src="assets/lib/hover/hoverdir.js"></script>
  <script src="assets/lib/hover/hoverex.min.js"></script>
  <script src="assets/lib/unveil-effects/unveil-effects.js"></script>
  <script src="assets/lib/owl-carousel/owl-carousel.js"></script>
  <script src="assets/lib/jetmenu/jetmenu.js"></script>
  <script src="assets/lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="assets/lib/jigowatt/jigowatt.js"></script>
  <script src="assets/lib/easypiechart/easypiechart.min.js"></script>

  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>

</body>
</html>




