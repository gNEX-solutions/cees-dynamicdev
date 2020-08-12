<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$inquiry=$_POST['message'];
$email=$_POST['email'];
$to = "info@iceesinternational.org"; //replace this relevant emailID
$subject = "Requesting Information";

$message = "
<html>
<head>
<title>Requestor Information</title>
</head>
<body>
<p>Requestor Info</p>
<table>
<tr>
<th>Name</th>
<td>".$name."</td>
</tr>
<tr>
<th>Phone Number</th>
<td>".$phone."</td>
</tr>
<tr>
<th>Email</th>
<td>".$email."</td>
</tr>
<tr>
<th>Message</th>
<td>".$inquiry."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
   header("Location:contact.php?contacted=true#form4-13");
} else {
    header("Location:contact.php?contacted=false#form4-13");
}

?>
