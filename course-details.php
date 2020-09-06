
<!DOCTYPE html>
<html lang="en">
<?php
include_once 'Model/dbh.inc.php';
include 'Model/courses_service.php';
include 'Model/courses_view.php';

$artID =  $_GET['artID'];
if($artID==NULL){
header("Location: 404.php");
exit();
}
?>


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="assets/images/logo2.png" type="image/png" />
    <title>ICEES - Courses Details</title> <!-- Needs to be dynamically changed -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/courseDetails/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/courseDetails/flaticon.css" />
    <link rel="stylesheet" href="assets/css/courseDetails/themify-icons.css" />
 
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">


  <link rel="stylesheet" href="assets/css/courseDetails/style.css"/>
  </head>

  <body>
<?php 
$CoursesView =new CoursesView()
?>
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <div class="container relative pt5-l">
  
 
</div>
<section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
    <?php require_once 'common/Components/header.php'; ?>
</section>
    <!--================ Start Header Menu Area =================-->

    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area banner_image">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content">
                <h2> 
                    <?php 
                    $CoursesView->ShowTitle($artID);
                   
                    ?>
                </h2>
                <h4>
                <?php 
                   
                    $CoursesView->ShowSummary($artID);
                    ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area" style="background: lightgrey;">
        <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                   
                    <div class="content_wrapper" style="padding-left:50px; padding-right: 80px;">
                        <h4 class="title">Objectives</h4>
                        <div class="content">
                        <?php  $CoursesView->ShowContent($artID);    ?>
                        </div>

                        <!-- <h4 class="title">Certificate Program Outcomes</h4>
                        <div class="content">
                            • Learn a process to make strategic choices centered on both the needs of your customers as well as your business or organization.
                            <br/>
                            <br/>
                            • Follow repeatable steps to imagine and test strategic initiatives that combine analytical rigor and creativity, and equip you with confidence to move these initiatives forward.
                            <br/>
                            <br/>
                            • Gain techniques to quickly develop, test, and iterate parts of a business model (value proposition, revenue model, and channel) to make new programs, products, and services that are grounded in what people really want.
                            <br/>
                            <br/>
                            • Apply methods from design thinking (such as brainstorming, prototyping, and iteration) to business modeling and strategy.
                            <br/>
                            <br/>
                            • Grow your skills and confidence to undertake, plan, and lead day-to-day strategic efforts, as well as broad wide-scale innovation initiatives.
                        </div> -->

                        <!--  <h4 class="title">Course Outline</h4>
                        <div class="content">
                           <ol class="course_list">
                                <li class="">
                                    Introduction Lesson
                                   </li>
                                <li class="justify-content-between d-flex">
                                    <p>Basics of HTML</p>
                                    </li>
                                <li class="justify-content-between d-flex">
                                    <p>Getting Know about HTML</p>
                                     </li>
                                <li class="justify-content-between d-flex">
                                    <p>Tags and Attributes</p>
                                    </li>
                                <li class="justify-content-between d-flex">
                                    <p>Basics of CSS</p>
                                    </li>
                                <li class="justify-content-between d-flex">
                                    <p>Getting Familiar with CSS</p>
                                     </li>
                                <li class="justify-content-between d-flex">
                                    <p>Introduction to Bootstrap</p>
                                    </li>
                                <li class="justify-content-between d-flex">
                                    <p>Responsive Design</p>
                                    </li>
                                <li class="justify-content-between d-flex">
                                    <p>Canvas in HTML 5</p>
                                </li>
                            </ol> 
                        </div>-->
                    </div>
                </div>


                <div class="col-lg-4 right-contents" >
                    <div class="container">
                        <h3></h3>
                    </div>
                    <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or"> <?php  $CoursesView->getLecturer($artID);    ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Format</p>
                                <span class="or">2 Online Cohort Courses</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Duratuion</p>
                                <span class="or"> <?php  $CoursesView->getcourseDuration($artID);    ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span class="or"> <?php  $CoursesView->getFee($artID);    ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Seats </p>
                                <span class="or">15</span>
                            </a>
                        </li>
                    </ul>

                    <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 " >Enroll the course</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <!--================ Start footer Area  =================-->
    
    <!--================ End footer Area  =================-->
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->



<section class="cid-ruOTxA2tiD" id="footer5-16">

<?php require_once ('common/Components/footer.php'); ?>
        
</section>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <!-- <script src="assets/tether/tether.min.js"></script> -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <!-- <script src="assets/theme/js/script.js"></script> -->
  <script src="assets/theme/js/preloader.js"></script>

  <style>
.cid-ruNBDZ0eEF {
    padding-top:30px !important;
}
.cid-ruXpPiazmW{
    /* margin:auto !important; */
}
</style>


   
        </body>
      </html>