<?php 

include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();

if( $_POST['req'] == "imgRemove"){
    // echo("image remove");
    // echo($_POST['img_remove']);
    echo('running');
    $stmt = $con->prepare("update events_images set events_images.`status` = 0 
    where events_images.idImages = ?;") ;
    $stmt->bind_param("s",$_POST["img_remove"]);
    if($stmt->execute()){
        $response_array['status'] = 'success';
    }
    else{
        $response_array['status'] = 'error';
    }
}

if( $_POST['req'] == "imgUpdate"){
    // echo("image remove");
    // echo($_POST['img_remove']);
    echo('running');
    echo($_POST["img_Id"]);
    $target_dir = "../../assets/images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    $stmt = $con->prepare("update events_images set events_images.url = ? 
    where events_images.idEvent = ?;") ;
    $stmt1 = $con->prepare("update events_images set events_images.status = 1 
    where events_images.idEvent = ?;") ;
    $stmt->bind_param("ss",$target_file,$_POST["img_Id"]);
    $stmt1->bind_param("s",$_POST["img_Id"]);

    if($stmt->execute()){
        $stmt1->execute();
        $response_array['status'] = 'success';
    }
    else{
        $response_array['status'] = 'error';
    }
}