<?php
include_once 'Model/dbh.inc.php';
include 'Model/business_partnering_service.php';
include 'Model/business_partnering_view.php';

$artID =  $_GET['artID'];
if($artID==NULL)
{
    header("Location: 404.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/images/logo2.png" type="image/png" />
    <title>ICEES - Courses Details</title> <!-- Needs to be dynamically changed -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/courseDetails/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/courseDetails/flaticon.css" />
    <link rel="stylesheet" href="assets/css/courseDetails/themify-icons.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/theme/css/preloader.css">


    <link rel="stylesheet" href="assets/css/courseDetails/style.css" />
</head>

<body>

    </div>
    <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
        <?php require_once 'common/Components/header.php'; ?>
    </section >
    <!--================ Start Header Menu Area =================-->

    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section style="padding-top: 86px" >
        <?php
        $businessPartneringView = new BusinessPartneringView();
        $businessPartneringView->ShowTitle($artID);
        ?>


    </section>

    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area" style="background: lightgrey;">
        <div class="container" style="background: #fff; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
            <div class="row">
                <div class="col-lg-8 course_details_left">

                    <div class="content_wrapper" style="padding-left:50px; padding-right: 80px;">
                        <?php $businessPartneringView->ShowContent($artID);  ?>
                    </div>


                </div>
                <div class="col-lg-4 right-contents">
                    <div class="container">
                        <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                        <?php $businessPartneringView->ShowImage($artID);  ?>
                        </div>
                    </div>
                    <div class="container">
                        <div class="container right-contents" style="padding-bottom: 20px;  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                        <?php $businessPartneringView->ShowImage2($artID);  ?>
                        </div>
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

        <?php require_once('common/Components/footer.php'); ?>

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
            padding-top: 30px !important;
        }

        .cid-ruXpPiazmW {
            /* margin:auto !important; */
        }
    </style>



</body>

</html>