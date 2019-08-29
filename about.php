<?php session_start();
include_once "Model/teamMembers.php";
$service = new Member();

//getMember
$members = $service->getMembers();
if($members){
$no_mem =mysqli_num_rows($members);
}else{
$no_mem ='';
}

//getUser
$user = $service->getUsers();
if($user){
$no_user =mysqli_num_rows($user);
}else{
$no_user ='';
}

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="About us page">
  
  <title>About</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/research-section.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">
  


  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional2.css" type="text/css">
  
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<?php require_once 'common/Components/header.php'; ?>
<section class="mbr-section content5 cid-ruXJBlWi22 mbr-parallax-background" id="content5-1o">
  <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);" > 
    </div>
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    About Us</h2>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article content1 cid-ruXHzFNbH4" id="content2-1i">
    <div class="container">
        <!-- <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
                <blockquote><strong>Lorem ipsum dolor sit amet, consectetur </strong>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed velit dignissim sodales ut eu sem integer vitae justo. Dignissim enim sit amet venenatis urna cursus. Integer enim neque volutpat ac. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Facilisis sed odio morbi quis commodo odio aenean. Facilisi etiam dignissim diam quis enim lobortis. Eu turpis egestas pretium aenean pharetra magna ac. Justo nec ultrices dui sapien eget mi proin sed. Sit amet luctus venenatis lectus magna fringilla urna porttitor.</blockquote>
            </div>
        </div> -->
        <section class="features11 cid-ruXpPiazmW" id="features11-19">
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class=" align-left aside-content">
                    <div class="block-content">
                        <div class="card p-2 pr-2">
                            <div class="media">
                                <!-- <div class=" align-self-center card-img pb-3">
                                    <span class="mbr-iconfont mbri-like"></span>
                                </div>      -->
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-6"  style="font-size:30px;font-wight:100">Academically & Professionally Qualified</h4>
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
                                    <h4 class="card-title mbr-fonts-style display-6" style="font-size:30px;font-wight:100">International Exposure</h4>
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
                                    <h4 class="card-title mbr-fonts-style display-6" style="font-size:30px;font-wight:100">Tested & Proven Methodologis</h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">
                                And we have tested & proven home grown expertise and access to original worldwide enterprise excellence knowledge sources to guide you in the journey of business transformation. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-us-image">
                </div>
            </div>
        </div> 
    </div>          
</section>
    </div>
</section>
<section class="team1 cid-ruXEWX5uJh" id="team1-1g">   
    <div class="container align-center">
        <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
            OUR AWESOME TEAM
        </h2>
        <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed velit dignissim sodales ut eu sem integer vitae justo.</h3>
        <div class="row media-row">

        <?php
        if($no_mem>0){
            while ($row = mysqli_fetch_array($members)) { ?>
            <div class="team-item col-lg-3 col-md-6">
                <div class="item-image">
                    <img src="<?php echo $row['profilepic_url']; ?>" alt="" title="">
                </div>
                <div class="item-caption py-3">
                    <div class="item-name px-2">
                        <p class="mbr-fonts-style display-5">
                           <?php echo $row['first_name']." ".$row['last_name']; ?></p>
                    </div>
                    <div class="item-role px-2">
                        <p><?php echo $row['role']; ?></p>
                    </div>
                    <div class="item-social pt-2">
                    <?php if ($row['twitter_url']){?> 
                        <a href="<?php echo $row['twitter_url']; ?>" target="_blank">
                            <span class="p-1 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    <?php } 
                     if ($row['facebook_url']){?>
                        <a href="<?php echo $row['facebook_url']; ?>" target="_blank">
                            <span class="p-1 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    <?php } 
                    if ($row['linkedin_url']){?>
                        <a href="<?php echo $row['linkedin_url']; ?>" target="_blank">
                            <span class="p-1 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <?php  } } ?>
            </div>    
    </div>
</section>

<!-- <section class="carousel slide testimonials-slider cid-ryEUu17Rx5" data-interval="false" id="testimonials-slider1-0">
    <div class="container text-center">
        <h2 class="pb-5 mbr-fonts-style display-2">
            WHAT OUR FANTASTIC USERS SAY
        </h2>

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
            <?php
            if($no_user>0){
            while ($row = mysqli_fetch_array($user)) { ?>
                <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                            <img src="<?php echo $row['profilepic_url']; ?>">
                            </div>
                            <div class="user_text pb-3">
                                <p class="mbr-fonts-style display-7">
                                <?php echo $row['quote'];?>
                                </p>
                            </div>
                            <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                            <?php echo $row['first_name']; ?>
                            </div>
                            <div class="user_desk mbr-light mbr-fonts-style display-7">
                            <?php echo $row['role']; ?>
                            </div>
                        </div>
                </div>
            <?php } } ?>
            </div>
            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                  <span aria-hidden="true" class="mbri-arrow-prev mbr-iconfont"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" role="button" data-slide="next">
                  <span aria-hidden="true" class="mbri-arrow-next mbr-iconfont"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>-->
<section class="cid-ruOTxA2tiD" id="footer5-16">
<?php require_once ('common/Components/footer.php'); ?>
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
  <section class="engine"><a href="https://mobirise.info/x">free css templates</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/theme/js/preloader.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>