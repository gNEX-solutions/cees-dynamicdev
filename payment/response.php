<?php

//decode & get POST parameters
$payment = base64_decode($_POST ["payment"]);
$signature = base64_decode($_POST ["signature"]);
$custom_fields = base64_decode($_POST ["custom_fields"]);
//load public key for signature matching
$publickey = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDZU22QKT6n8GXrH7aMuxRhlgD/
zyK+iUTtpU+GKkg4qslgNyvRgW4O/rsVkV8wwE2i9RVEhhjTz1piMzIcTbKMG12U
WDhVtvsEHq/Tzm4q9iiamHOurkkcYj3qyF5i3/l0fILUesX9xAD0Fszprt4mMLtA
RN+QR62pEv8HtdrknQIDAQAB
-----END PUBLIC KEY-----";
openssl_public_decrypt($signature, $value, $publickey);

$signature_status = false ;

if($value == $payment){
	$signature_status = true ;
}

//get payment response in segments
//payment format: order_id|order_refference_number|date_time_transaction|payment_gateway_used|status_code|comment;
$responseVariables = explode('|', $payment);      

if($signature_status == true)
{
	//display values
	echo $signature_status;
	$custom_fields_varible = explode('|', $custom_fields);
	var_dump($custom_fields_varible);
	echo '<br/>';
	var_dump($responseVariables);
	header('Location: ../success.php');
}else
{
	echo 'Error Validation';
	header('Location: ../error.php');
}
	
?>  