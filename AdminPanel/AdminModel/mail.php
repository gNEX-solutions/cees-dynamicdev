<?php
$recipientEmail = "dumindu.desilva@outlook.com";
$emailSubject = "PHP Mailing Function";
$emailContext = "Sending content using PHP mail function";


$fromAddress = "dumindu@gnexsolutions.com";
$emailStatus = mail($recipientEmail, $emailSubject, $emailContext, $fromAddress);
if($emailStatus) {
echo "EMail Sent Successfully!";
} else {
echo "No Email is sent";
}
?>