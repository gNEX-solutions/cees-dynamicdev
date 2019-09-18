<?php
include_once 'Model/dbh.inc.php';
include 'Model/eventWindow.php';
include 'Model/viewEvents.php';
include 'Model/getInsights.php';
include 'insights.php';
include 'Model/getClientLogos.php';
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <!-- <a href="https://www.freepik.com/free-photos-vectors/people">People photo created by freepik - www.freepik.com</a>
  <a href="https://www.freepik.com/free-photos-vectors/background">Background photo created by freepik - www.freepik.com</a>
  <a href="https://www.freepik.com/free-photos-vectors/business">Business photo created by rawpixel.com - www.freepik.com</a> -->

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
  <link rel="stylesheet" href="assets/theme/css/preloader.css">
  <link rel="stylesheet" href="assets/full-image-viewer/image-viewer.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

  <script src="assets/web/assets/jquery/jquery.min.js"></script>

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
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" >
            <div class="parallax cid-ruNtyUeTOv1 mbr-fullscreen d-block w-100"  alt="First slide"></div>
            <div class="carousel-caption first">
                <h5><span class="part1">CEES</span> 
                    <br>
                    <span class="part2">Academy</span>
                </h5>
                <p>Enlightening Minds</p>
            </div>
            </div>
            <div class="carousel-item">
            <div class="parallax cid-ruNtyUeTOv2 mbr-fullscreen d-block w-100"  alt="Second slide"></div>
            <div class="carousel-caption second">
                <h5><span class="part1">Consulting</span> 
                    <br>
                    <span class="part2">Services</span>
                </h5>
                <p>Unlocking Opportunities</p>
            </div>
            </div>
            <div class="carousel-item">
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
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true" >

        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section> 
    

<section class="features1 cid-ruNBDZ0eEF" id="features1-8">
    <h1 class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center">What We Do?</h1>
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
               <h3>Enlighten You</h3>
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-idea" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 120px;"></span>
                </div>
                <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="Programs.php">CEES Academy</a></h4>
                <div class="card-box">
                    <p class="mbr-text mbr-fonts-style display-7" >
                    <!-- CEES Academy is dedicated for training and development on Enterprise Excellence tools including Lean, Six Sigma and Industry 4.0 to enlighten business executives to successfully transform themselves, respective teams and organizations   -->
                    CEES Academy brings you the best knowledge in Enterprise Excellence (Lean, Six Sigma, Agile & Industry 4.0) from globally recognized Institutes and Universities. Our highly experienced international and local sensei panel is there to enlighten your minds to become excellent
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <a href="Programs.php" target="_blank">READ MORE » </a>
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
            <h3>Transform You</h3>
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-unlock" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 120px;"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="services-talent.php">Consulting Services&nbsp;</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7" >
                    <!-- Our expert consultants to visit organizations and deeply understand the Strategic problems and improvement opportunities and tactfully guide, coach and mentor business leaders on managing Enterprise Excellence transformation effectively  -->
                    Even the best of the best in the world can have ample opportunities improve. Our expert business transformation consultants are capable of unlocking these opportunities for you. We will guide, coach and mentor you to drive beyond your expectations.
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <a href="services-talent.php" target="_blank">READ MORE » </a>
                  </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
            <h3>Amplify You</h3>
                <div class="card-img pb-3">
                <img src="assets/images/mixer-512.png" style="width:121px; height:auto;">
                    <!-- <span class="mbr-iconfont mbri-growing-chart" style="color: rgb(15, 118, 153); fill: rgb(15, 118, 153); font-size: 120px;"></span> -->
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5"><a href="solutionslab.php">Solutions LAB</a></h4>
                    <p class="mbr-text mbr-fonts-style display-7" >
                    <!-- Dedicated set of engineers and scientists who are working on cutting edge technologies and develop integrated solutions considering Lean, Automation and Digitization initiatives to create quantum leaps in the Enterprise Excellence practices.  -->
                    Businesses are in direct need of creative, agile and high tech solutions than ever in the VUCA conditions. Our team of engineers offer you customized integrated solutions in Lean, Automation & Digitization to cater your specific needs. 
                    </p>
                  <span class="vspacer"></span>
                  <p class="py-3 mbr-fonts-style">
                    <a href="solutionslab.php" target="_blank">READ MORE » </a> 
                  </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="progress-bars2 cid-ruNvXuN71m" >
<div class="container">
    <div class="row" > 
        <!-- <h2 id="title-text">PROGRAM SCHEDULE</h2> -->
        <h1 id="title-text" class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center">Program Schedule</h1>
    </div>
<div id="post-slider-container">
    <div class="glide" id="Glide" >
                    <div class="glide__wrapper">
                        <ul class="glide__track">
                        <?php
                             $eventDetails = new ViewEvents();
                             $eventDetails->ShowEvent_List();
                        ?>
                        </ul>
                    </div>
                <ul class="glide__bullets"></ul>
         </div>
</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
</div>

</section>

<!-- <section class="mbr-section content7 cid-ruNvXuN71m" id="content7-2">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="media-content">
                      
                      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Hire us for your business needs!</h2>
                        <div class="mbr-section-text">
                            <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed velit dignissim sodales ut eu sem integer vitae justo. Dignissim enim sit amet venenatis urna cursus. Integer enim neque volutpat ac. <br><br>Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Facilisis sed odio morbi quis commodo odio aenean. Facilisi etiam dignissim diam quis enim lobortis.&nbsp;</p>                           
                        </div>
                      	<span class="vspacer"></span>
                      	<div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="#">Lorem ipsum</a></div>
                    </div>
                    <div class="mbr-figure" style="width: 75%;">
                     <img src="assets/images/mbr-1-1036x1036.jpg" alt="" title="">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="features11 cid-ruXpPiazmW" id="features11-19">
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class=" align-left aside-content">
                <h1 class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center;">Why Us?</h1>
                    <div class="block-content">
                        <div class="card p-2 pr-2">
                            <div class="media">
                                <!-- <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-like"></span>
                                </div>      -->
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7"  style="font-size:30px;font-wight:100">Academically & Professionally Qualified</h4>
                                </div>
                            </div>                
                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                We are set of academically and professionally qualified business leaders with hands on experience on Enterprise transformation in various countries and industries
                            </div>
                        </div>

                        <div class="card p-2 pr-2">
                            <div class="media">
                                <!-- <div class="align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-apple"></span>
                                </div>      -->
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7" style="font-size:30px;font-wight:100">International Exposure</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                We have been exposed to latest and original enterprise excellence tools and methodologies from Japan, USA and Singapore 
                            </div>
                        </div>


                        <div class="card p-2 pr-2" >
                            <div class="media">
                                <!-- <div class="align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-apple"></span>
                                </div>      -->
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7" style="font-size:30px;font-wight:100">Tested & Proven Methodologis</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                And we have tested & proven home grown expertise and access to original worldwide enterprise excellence knowledge sources to guide you in the journey of business transformation. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-us-image">
                </div>
            </div>
        </div> 
    </div>          
</section>
<section class="progress-bars2 cid-ruXscj5IY2" id="progress-bars2-1b">
    <!-- <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Our Expertise</h2>

        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            Over the years we have completed a wide range of projects shown below in %.</h3>

        <div class="row pt-5 mt-5">
            <div class="col-md-6 text-elements">
                <h4 class="section-content-title pb-3 align-left mbr-fonts-style display-5">
                    % of type of projects</h4>
                <p class="section-content-text align-left mbr-fonts-style display-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed velit dignissim sodales ut eu sem integer vitae justo. Dignissim enim sit amet venenatis urna cursus. Integer enim neque volutpat ac. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Facilisis sed odio morbi quis commodo odio aenean. Facilisi etiam dignissim diam quis enim lobortis.&nbsp;</p>
            </div>
            <div class="progress_elements col-md-6">
                <div class="progress1 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p>
                                Design</p>
                        </div>
                        <div class="progress_value mbr-fonts-style display-7">
                            <div class="progressbar-number">
                            </div>
                            <span>%</span>
                        </div>
                    </div>
                    <progress class="progress progress-primary " max="100" value="100">
                    </progress>
                </div>
                 
                <div class="progress2 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p>Marketing</p>
                        </div>
                    <div class="progress_value mbr-fonts-style display-7">
                        <div class="progressbar-number">
                        </div>
                        <span>%</span>
                    </div>
                    </div>
                    <progress class="progress progress-primary" max="100" value="90">
                    </progress>
                </div>
                
                <div class="progress3 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p>
                                Content</p>
                        </div>
                    <div class="progress_value mbr-fonts-style display-7">
                        <div class="progressbar-number">
                        </div>
                        <span>%</span>
                    </div>
                    </div>
                    <progress class="progress progress-primary" max="100" value="80">
                    </progress>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
         <div class="row" > 
         <h1 id="title-text" class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center">
                Insights & Research
            </h1>
        </div>
        <br>
       
        <div class="row" id="research-section">

           <?php showInsights(); ?>

            
           
        </div>
    </div>

</section>
<br>
<section class="cid-ruXscj5IY2" id="our_Clients">
        <div class="container">
            <div class="row" > 
                <h1 id="title-text" class="mbr-title pt-2 mbr-fonts-style display-2" style="text-align:center;width:100%">
                        Our Partners
                </h1>
            </div>
            <div id="slider-logo">
                <div id="slider-logo-track">
                  <?php
                        $getClientLogos = new getClientLogos();
                        $data = $getClientLogos->getAllClientLogos();
                        foreach ($data as $key=>$img1) {
                            echo "<div class='slide' style='margin-left: 100px;'>
                            <img src='$img1[imageUrl]' height='60' width='auto' alt='' />
                            </div>";
                        }
                    ?>
                </div>
            </div>

        </div>

</section>

<section class="mbr-section info2 cid-ruOTHzyksn" id="info2-17">

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(7, 59, 76);">
    </div>

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4">
                   <div class="row"><a class="btn btn-secondary display-4" href="./contact.php">Contact us</a></div>
                </div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">
                    Let us help grow your business !</span></h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">Want to find out how CEES can solve problems specific to your business? Let's talk</h3>
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
  <script src="assets/full-image-viewer/image-viewer.js"></script>
  <script src="assets/logo slider/logoSlider.js"></script>

  <script src="assets/theme/js/preloader.js"></script>
  
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

