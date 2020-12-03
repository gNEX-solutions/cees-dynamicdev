<?php

include_once 'Model/dbh.inc.php';
include 'Model/eventWindow.php';
include 'Model/viewEvents.php';
include 'Model/getInsights.php';
include 'insights.php';
include 'Model/getClientLogos.php';

// unique_order_id|total_amount
$dtime = strtotime(date("Y-m-d h:i:s"));
$uniqueid = $dtime.''.mt_rand(10,100);
$text = $uniqueid.'|100';

$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDZU22QKT6n8GXrH7aMuxRhlgD/
zyK+iUTtpU+GKkg4qslgNyvRgW4O/rsVkV8wwE2i9RVEhhjTz1piMzIcTbKMG12U
WDhVtvsEHq/Tzm4q9iiamHOurkkcYj3qyF5i3/l0fILUesX9xAD0Fszprt4mMLtA
RN+QR62pEv8HtdrknQIDAQAB
-----END PUBLIC KEY-----";
//load public key for encrypting
openssl_public_encrypt($text, $encrypt, $publickey);

//encode for data passing
$payment = base64_encode($encrypt);
//checkout URL
$url = 'https://webxpay.com/index.php?route=checkout/billing';

//custom fields
//cus_1|cus_2|cus_3|cus_4
$custom_fields = base64_encode('cus_1|cus_2|cus_3|cus_4');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pavan Welihinda">
    <title>WebXPay | Sample checkout form</title>

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
  <body style="overflow-y: auto !important;">   
   

	<section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
			<?php require_once ('common/Components/header.php'); ?>
	</section> 
	<section id="header2-1" style="margin-left:15%;margin-right:15%;"> 	
	<br><br><br><br><br><br>
	         <h1 style="font-size:large;" class="text-center">Register For - <?php echo  $_GET['course_title'] ?></h1>
			 <br>
			 <form action="<?php echo $url; ?>" method="POST" class="pament_form" >
	
       
			<div class="form-group row">
				<label for="first_name"   class="col-sm-2 col-form-label col-form-label-sm">First name :</label>
				<div class="col-sm-8">
					<input type="text" name="first_name"   class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="last_name"   class="col-sm-2 col-form-label col-form-label-sm">Last name :</label>
				<div class="col-sm-8">
					<input type="text" name="last_name"  class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="email"   class="col-sm-2 col-form-label col-form-label-sm">Email :</label>
				<div class="col-sm-8">
					<input type="email" name="email"  class="form-control form-control-sm"required >
				</div> 
			</div> 
			<div class="form-group row">
				<label for="contact_number"   class="col-sm-2 col-form-label col-form-label-sm">Contact Number:</label>
				<div class="col-sm-8">
					<input type="number" name="contact_number"   class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="address_line_one"   class="col-sm-2 col-form-label col-form-label-sm">Address Line 1 :</label>
				<div class="col-sm-8">
					<input type="text" name="address_line_one"  class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="address_line_two"   class="col-sm-2 col-form-label col-form-label-sm">Address Line 2 :</label>
				<div class="col-sm-8">
					<input type="text" name="address_line_two"   class="form-control form-control-sm"requrequiredire >
				</div> 
			</div> 
			<div class="form-group row">
				<label for="city"   class="col-sm-2 col-form-label col-form-label-sm">City :</label>
				<div class="col-sm-8">
					<input type="text" name="city"   class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="province"   class="col-sm-2 col-form-label col-form-label-sm">Province :</label>
				<div class="col-sm-8">
					<input type="text" name="state"   class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="postal_code"   class="col-sm-2 col-form-label col-form-label-sm">Zip/Postal Code:</label>
				<div class="col-sm-8">
					<input type="text" name="postal_code"  class="form-control form-control-sm" required>
				</div> 
			</div> 
			<div class="form-group row">
				<label for="country"   class="col-sm-2 col-form-label col-form-label-sm">Country :</label>
				<div class="col-sm-8">
					<input type="text" name="country"   class="form-control form-control-sm" required>
				</div> 
			</div> 
		<?php $price = explode(".",$_GET['course_fee']); ?>
			<div class="form-group row">
				<label for="country"   class="col-sm-2 col-form-label col-form-label-sm">Price :</label>
				<div class="col-sm-8">
					<input type="text" name="price" value="Rs. <?php echo $price[1] ?>.00"  class="form-control form-control-sm" disabled>
				</div> 
			</div> 
			<br>
			<div class="form-group row">
			  <div class="col align-self-end">
			    <button  type="submit" value="Pay Now" class="btn btn-primary"  style="float:right !important;margin-right:25%">Pay Now</button>
			  </div>	
			 </div> 
			
			 <p></p>
		   <input type="hidden"  name="process_currency" value="LKR"></td> <!-- currency value must be LKR or USD -->
		   <input  type="hidden" name="cms" value="PHP">
		   <input  type="hidden" name="custom_fields" value="<?php echo $custom_fields; ?>">
		   <input type="hidden" name="enc_method" value="JCs3J+6oSz4V0LgE0zi/Bg==">
		   <input type="hidden" name="secret_key" value="630be963-59e2-447a-8f3b-93b3d7a3bf25" >
		   <input type="hidden" name="payment" value="<?php echo $payment; ?>" >
		   
		   <br><br><br>
			
		</form>   
	</section>
  </body>
</html>
