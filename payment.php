<?php

include_once 'Model/dbh.inc.php';
include 'Model/eventWindow.php';
include 'Model/viewEvents.php';
include 'Model/getInsights.php';
include 'insights.php';
include 'Model/getClientLogos.php';
// unique_order_id|total_amount
$plaintext = '525|10';
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC9l2HykxDIDVZeyDPJU4pA0imf
3nWsvyJgb3zTsnN8B0mFX6u5squ5NQcnQ03L8uQ56b4/isHBgiyKwfMr4cpEpCTY
/t1WSdJ5EokCI/F7hCM7aSSSY85S7IYOiC6pKR4WbaOYMvAMKn5gCobEPtosmPLz
gh8Lo3b8UsjPq2W26QIDAQAB
-----END PUBLIC KEY-----";
//load public key for encrypting
openssl_public_encrypt($plaintext, $encrypt, $publickey);

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
  <body>   
 
	<section class="menu cid-ruNsw1yRec"  once="menu" id="menu1-0" style="width:100%; position:fixed; z-index:999;">
			<?php require_once ('common/Components/header.php'); ?>
	</section> 
	<section id="header2-1"> 	
	<br><br><br><br><br>  
        <form action="<?php echo $url; ?>" method="POST">
			<table>
				<tr>
					<td><div>First name: </div> </td>
					<td><input type="text" name="first_name" value="Pavan"></td>
				</tr>
				<tr>
					<td>Last name: </td>
					<td><input type="text" name="last_name" value="Welihinda"></td>
				</tr>
				<tr>
					<td>Email: </td> 
					<td><input type="text" name="email" value="customer_email@email.com"></td>
				</tr>
				<tr>
					<td>Contact Number: </td> 
					<td><input type="text" name="contact_number" value="0773606370"></td>
				</tr>
				<tr>
					<td>Address Line 1: </td> 
					<td><input type="text" name="address_line_one" value="46/46, Green Lanka Building"></td>
				</tr>
				<tr>
					<td>Address Line 2: </td>
					<td><input type="text" name="address_line_two" value="Nawam Mawatha"></td>
				</tr>
				<tr>
					<td>City: </td> 
					<td><input type="text" name="city" value="Colombo"></td>
				</tr>
				<tr>
					<td>State: </td> 
					<td><input type="text" name="state" value="Western"></td>
				</tr>
				<tr>
					<td>Zip/Postal Code:</td>
					<td><input type="text" name="postal_code" value="10300"></td>
				</tr>
				<tr>
					<td>Country:</td>
					<td><input type="text" name="country" value="Sri Lanka"></td>
				</tr>
				<tr>
					<td>currency: <input type="text" name="process_currency" value="LKR"></td> <!-- currency value must be LKR or USD -->
					<td></td>
				</tr>
				<tr>	
					<td>CMS : <input type="text" name="cms" value="PHP"></td>
					<td></td>
				</tr>
				<tr>
					<td>custom: <input type="text" name="custom_fields" value="<?php echo $custom_fields; ?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Mechanism: <input type="text" name="enc_method" value="JCs3J+6oSz4V0LgE0zi/Bg=="></td>
					<td></td>
				</tr>
				<tr>		   
					<!-- POST parameters -->
					<td><input type="hidden" name="secret_key" value="630be963-59e2-447a-8f3b-93b3d7a3bf25" ></td> 
					<td></td>
				</tr>
				<tr> 
					<td><input type="hidden" name="payment" value="<?php echo $payment; ?>" ></td> 
					<td></td>  
				</tr>
				<tr>                      
					<td><input type="submit" value="Pay Now" ></td>
					<td></td>
				</tr>
			</table>
		</form>   
	</section>
  </body>
</html>
