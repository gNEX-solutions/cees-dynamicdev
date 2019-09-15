<?php

include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();

if( $_POST['req'] == "imgRemove"){
  // echo("image remove");
  // echo($_POST['img_remove']);
  echo('running');
  $stmt = $con->prepare("update clients set clients.`status` = 0 
  where clients.idclients = ?;") ;
  $stmt->bind_param("s",$_POST["img_remove"]);
  if($stmt->execute()){
      $response_array['status'] = 'success';
  }
  else{
      $response_array['status'] = 'error';
  }
  }
  ?>