<?php
include_once 'Model/dbh.inc.php';
include 'Model/researchWindow.php';
include 'Model/researchService.php';
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Post page">

  <title>Insights & Research</title>
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



</head>

<body>
  <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0">
    <?php require_once 'common/Components/header.php'; ?>
  </section>

  <div class="carousel-inner">
    <img style="  height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" src="assets\images\research.jpg" alt="" title="">
    <div class="carousel-caption">
      <h5>Insights & Research</h5>
      <p>Try to Do Something Beyond What have been already mastered, Thats the growth.</p>
    </div>
  </div>

  <section class="header1 cid-ruXI5S6ubv" id="header16-1l">
    <!--Griglia alternata testo e immagine, resposive con flexbox.-->
    <div class="container">

      <!-- <div class="grid-flex hideme">
        <div class="col col-image">
          <img src="assets\images\consultancy\01.png" alt="" class="mx-auto d-block" />
        </div>
        <div class="col col-text">
          <div class="Aligner-item text-left">
            <h3 class="text-left display-2 font-weight-normal">Enterprise Diagnosis Tool 1.0</h3>
            <p class="text-justify">Comprehensive tool to diagnosis KPIs system alignment, process stability, people capability, management system and lean cultural aspects of an organization.

            </p>
          </div>
        </div>
      </div>

      <hr>

      <div class="grid-flex hideme">
        <div class="col col-image">
          <img src="assets\images\consultancy\02.png" alt="" class="mx-auto d-block" />
        </div>
        <div class="col col-text col-left" style="margin-left:75px;">
          <div class="Aligner-item">
            <h3 class="text-left display-2 font-weight-normal">Focused Business Improvement</h3>
            <p class="text-justify">Focus on biggest problems in the business and rapid implementation of
              countermeasures through cross functional team approach</p>
            <ul style="list-style-type:disc;" class="text-left">
              <li>Product development support</li>
              <li>Cost of quality reduction</li>
              <li>Changeover loss reduction</li>
              <li>Material Leadtime reduction</li>
              <li>Machine downtime and spare part cost reduction</li>
              <li>Work life improvement for support services</li>
            </ul>
          </div>
        </div>
      </div>

      <hr>

      <div class="grid-flex hideme">
        <div class="col col-image">
          <img src="assets\images\consultancy\03.png" alt="" class="mx-auto d-block" />
        </div>
        <div class="col col-text">
          <div class="Aligner-item text-left">
            <h3 class="text-left display-2 font-weight-normal">Management System Development</h3>
            <p class="text-justify">Develop sustainable management systems to align the leadership direction
              while cultivating the lean culture across the organization</p>
            <ul style="list-style-type:disc;" class="text-left">
              <li>Establish sustainable management systems</li>
              <li>Lean behavior cultivation</li>
            </ul>
          </div>
        </div>
      </div>

      <hr> -->

      <?php
      $consultInfo = new researchService();
      $consultInfo->ShowResearch_List();
      ?>

    </div>

  </section>

  <!-- <div class="content-slider col-12">
    <div class="slider">
      <div class="mask">
        <ul>
          <li class="anim1">
            <div class="quote">Enterprise Diagnosis Tool 1.0</div>
            <div class="source"> Lorem Ipsum has been the industry"s standard dummy text ever since..</div>
          </li>
          <li class="anim2">
            <div class="quote">Focused Business Improvement</div>
            <div class="source"> Lorem Ipsum has been the industry"s standard dummy text ever since..</div>
          </li>
          <li class="anim3">
            <div class="quote">Management System Development</div>
            <div class="source"> Lorem Ipsum has been the industry"s standard dummy text ever since..</div>
          </li>
        </ul>
      </div>
    </div>
  </div> -->
  </div>
  </section>

  <!-- <section class="mbr-section info2 cid-ruXIRFRxrA" id="info2-1n">
    <div class="container">
      <div class="row main justify-content-center">
        <div class="media-container-column col-12 col-lg-3 col-md-4">
          <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="#">

              Get a Quote !</a></div>
        </div>
        <div class="media-container-column title col-12 col-lg-7 col-md-6">
          <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
            Let us help grow your business !</h2>
          <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
            Lorem ipsum dolor set amet titus malesuada proin libero.</h3>
        </div>
      </div>
    </div>
  </section> -->

  <!-- <section>
    <div class="col 12">

      <div class="container">

        <h1 class="heading">Recommended Programs <span>& CEES</span></h1>

        <div class="gallery">

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=500&h=500&fit=crop" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1515260268569-9271009adfdb?w=500&h=500&fit=crop" alt="sunset behind San Francisco city skyline">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop" alt="people holding umbrellas on a busy street at night lit by street lights and illuminated signs in Tokyo, Japan">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1514041181368-bca62cceffcd?w=500&h=500&fit=crop" alt="car interior from central back seat position showing driver and blurred view through windscreen of a busy road at night">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1445810694374-0a94739e4a03?w=500&h=500&fit=crop" alt="back view of woman wearing a backpack and beanie waiting to cross the road on a busy street at night in New York City, USA">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="https://images.unsplash.com/photo-1486334803289-1623f249dd1e?w=500&h=500&fit=crop" alt="man wearing a black jacket, white shirt, blue jeans, and brown boots, playing a white electric guitar while sitting on an amp">
          </div>

        </div>

      </div>
    </div>
  </section> -->

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