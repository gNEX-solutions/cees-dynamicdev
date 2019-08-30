<?php 



?>

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
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/theme/css/preloader.css">


</header>

<body>

<div id="preloader">
  <div id="status">&nbsp;</div>
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
<section class="features1 cid-ruNBDZ0eEF" >
<h1 class="display-3 font-weight-bolder" style="text-align:center;padding-top: 100px;    letter-spacing: -.025em;
    font-family: LabGrotesque,helvetica,sans-serif;
    font-weight: 900;
    text-transform: none;"><?php echo $heading?></h1>
</section>

<section class="features11 cid-ruXpPiazmW" id="features11-19" style="margin-top:100px;">
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                 <div class="col-md-6" style="overflow:hidden">
                     <img src="<?php echo $images[0]['url']?>" class="img-fluid">
                 </div>
                 <div class="col-md-6" >
                    <p style="    font-size: 18px;
    line-height: 1.67em;
    letter-spacing: .006em;
    font-family: BreveText,helvetica,sans-serif;
    font-weight: 400;
    text-transform: none;
    padding: 0;
    color: #1a1a1a;"><?php echo $datas[0]['description'] ?>'</p>
                 </div>
            </div>

            <div class="media-container-row" style="margin-top:40px">
                <div class="col-md-12" >
                    <p style="    font-size: 18px;
    line-height: 1.67em;
    letter-spacing: .006em;
    font-family: BreveText,helvetica,sans-serif;
    font-weight: 400;
    text-transform: none;
    padding: 0;
    color: #1a1a1a;" ><?php echo $datas[1]['description'] ?>'</p>
                </div>
            </div>

            <div class="media-container-row">
                <div>
                <table>
                    <tr>
                        <th>Program code: &nbsp </th>
                        <td>Maria Anders</td>
                    </tr>
                    <tr>
                        <th>Program Name:&nbsp</th>
                        <td>Francisco Chang</td>
                    </tr>
                    <tr>
                        <th>Venue:&nbsp</th>
                        <td>Francisco Chang</td>
                    </tr>
                    <tr>
                        <th>time:&nbsp</th>
                        <td>4.00PM-6.00PM</td>
                    </tr>
                    <tr>
                        <th>Content:&nbsp</th>
                        <td>Lorem Ipsum is simply dummy text</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Lorem Ipsum is simply dummy text</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Lorem Ipsum is simply dummy text</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Lorem Ipsum is simply dummy text</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Lorem Ipsum is simply dummy text</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
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