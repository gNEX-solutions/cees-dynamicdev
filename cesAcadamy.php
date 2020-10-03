<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/research-section.css">
  <link rel="stylesheet" href="assets/slider-home/slider.css">
  <link rel="stylesheet" href="assets/logo slider/style.css">

  <script src="assets/web/assets/jquery/jquery.min.js"></script>


</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:9999;">
        <?php require_once ('common/Components/header.php'); ?>
  </section>
  
<section class="mbr-section content5 cid-ruXCVKDreY mbr-parallax-background" id="content5-1f">

    

<div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);">
</div>

<div class="container">
    <div class="media-container-row">
        <div class="title col-12 col-md-8">
            <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                ICEES ACADEMY</h2>
            
            
            
        </div>
    </div>
</div>
</section>

<section class="mbr-section article content1 cid-ruXHzFNbH4" id="content2-1i">

 

<div class="container">
    <div class="media-container-row">
        <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
            <blockquote><strong>Lorem ipsum dolor sit amet, consectetur </strong>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed velit dignissim sodales ut eu sem integer vitae justo. Dignissim enim sit amet venenatis urna cursus. Integer enim neque volutpat ac. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Facilisis sed odio morbi quis commodo odio aenean. Facilisi etiam dignissim diam quis enim lobortis. Eu turpis egestas pretium aenean pharetra magna ac. Justo nec ultrices dui sapien eget mi proin sed. Sit amet luctus venenatis lectus magna fringilla urna porttitor.</blockquote>
            <?php
    $compname = $_GET['idconsultancies']; 
    $services=new ViewServices();
    $services->ShowCA_CONTENT($compname);
    ?> 
        </div>
    </div>
</div>
</section>



  








<section class="cid-ruOTxA2tiD" id="footer5-16">

<?php require_once ('common/Components/footer.php'); ?>
        
</section>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>

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
  
  <link rel="stylesheet" href="https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/css/glide.core.min.css" >
  <link rel="stylesheet" href="https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/css/glide.theme.min.css" >
  
  <script src="https://cdn.rawgit.com/jedrzejchalubek/glidejs/8eabfbb9/dist/glide.min.js"></script>

  <script>
    document.onready =  function(){
        $('.carousel').carousel({
            interval: 5000
        });
    }
  </script>

    <script>
        document.onready =  function(){
            $('#nav-icon1').click(function(){
                $(this).toggleClass('open');
            });
        }
    </script>
  
  
  <script>
            $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
            })
            
            window.addEventListener('load', function(){
            function coverflow(i, el) {
                el.removeClass('pre following')
                    .nextAll()
                        .removeClass('pre following')
                        .addClass('following')
                    .end()
                    .prevAll()
                        .removeClass('pre following')
                        .addClass('pre');
            }
                $('#Glide').glide({
                        type: 'slider',
                        startAt: 2,
                        animationDuration: 500,
                        paddings: '15%',
                        afterInit: function (event) {
                            coverflow(event.index, event.current);
                        },
                        afterTransition: function (event) {
                            coverflow(event.index, event.current);
                        }
                    });
                });
      </script>

</body>
</html>


<style>
body {
  overflow: hidden;
}


/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  background-image: url(assets/cees.gif);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}
</style>