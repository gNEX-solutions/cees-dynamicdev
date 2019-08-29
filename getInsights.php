<?php 

$newConnection= new dbh;
$success=1;
$conn=$newConnection->connect();

$stmt = $conn->prepare("SELECT r.idresearches,r.heading,r.summary, i.url FROM researches r,researches_images i WHERE r.idresearches=i.idresearches"); 
$stmt->execute();

?>