<!DOCTYPE html>
<html>

<header>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">

  <title>Program</title>

  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/programstyle.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">


</header>

<body>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<div class="container relative pt5-l">
  
 
</div>
<section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
    <?php require_once 'common/Components/header.php'; ?>
</section>
<?php
$compname = $_GET['idconsultancies']; 
$heading = $_GET['heading']; 
$services=new ViewServices();
$datas=$services->ShowCA_CONTENT($compname);
$images=$services->showCA_IMAGES($compname);
?>

 <div class="relative pt5-l">
<!-- <img src="https://blog.gathercontent.com/wp-content/themes/gc-blog/images/article.png" alt="" class="headline-image"> -->
<img src="https://blog.gathercontent.com/wp-content/themes/gc-blog/images/article.png" alt="Snow" style="width:100%;">
<div class="bottom-left">Bottom Left</div>
<div class="centered mw55 center pa3 pa5-ns pa4-m bg-white ba b--gc-silver br2 gc-box-shadow mb5 relative">
<section >
<h1><?php echo $heading?></h1>
</section>
<section id="features11-19" style="margin-top:100px;">
    <div class="container">   
        <div class="col">
           
                 <div>
                     <img src="<?php echo $images[0]['url']?>" class="img-fluid">
                 </div>
                 <div>
                    <p style="font-size: 18px;"><?php echo $datas[0]['description'] ?>'</p>
                 </div>
                <div >
                    <p style="font-size: 18px;" ><?php echo $datas[1]['description'] ?>'</p>
                </div>
         

          
        </div>
    </div>
</section>

</div>
</div> 



<br><br>
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
  <script src="assets/theme/js/preloader.js"></script>

  <style>
.cid-ruNBDZ0eEF {
    padding-top:30px !important;
}
.cid-ruXpPiazmW{
    /* margin:auto !important; */
}
</style>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>

</body>



</html>