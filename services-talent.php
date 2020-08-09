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
  <meta name="description" content="Post page">

  <title>Bussiness Partnering</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/services/style.css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
</head>

<body>

  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  <section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
        <?php require_once ('common/Components/header.php'); ?>
  </section>

  <section id="header2-1">
    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" >
            <div class="parallax cid-ruNtyUeTOv2 mbr-fullscreen d-block w-100"  alt="Second slide"></div>
              <div class="carousel-caption second">
                  <h5><span class="part1">Business</span> 
                      <br>
                      <span class="part2">Partnering</span>
                  </h5>
                  <p>Unlocking Opportunities</p>
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

  <section class="header1 cid-ruXI5S6ubv" id="header16-1l">
    <!--Griglia alternata testo e immagine, resposive con flexbox.-->
    <?php
      $services=new ViewSections();
      $services->ShowCS_MENU();
    ?> 
  </section>
 
  

  <section class="cid-ruOTxA2tiD" id="footer5-16">
    <?php require_once('common/Components/footer.php'); ?>
  </section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/theme/js/preloader.js"></script>
  <script>
    $(function() { // $(document).ready shorthand
      $('.monster').fadeIn('slow');
    });

    $(document).ready(function() {

      /* Every time the window is scrolled ... */
      $(window).scroll(function() {

        /* Check the location of each desired element */
        $('.hideme').each(function(i) {

          var bottom_of_object = $(this).position().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();

          /* If the object is completely visible in the window, fade it it */
          if (bottom_of_window > bottom_of_object) {

            $(this).animate({
              'opacity': '1'
            }, 1500);

          }

        });

      });

    });
  </script>

  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>