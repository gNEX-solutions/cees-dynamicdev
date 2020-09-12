<?php

include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();

if( $_POST['req'] == "clientRemove"){
  // echo("image remove");
  // echo($_POST['img_remove']);
  echo('running');
  $stmt = $con->prepare("update team_members set team_members.`status` = 0 where team_members.idTeam_members = ?;") ;
  echo $con->error;
  $stmt->bind_param("s",$_POST["img_remove"]);
  if($stmt->execute()){
      $response_array['status'] = 'success';
  }
  else{
      $response_array['status'] = 'error';
  }
  }