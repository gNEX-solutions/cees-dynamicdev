<?php
include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();

echo ($_POST["method"]);
if( $_POST['method'] == "deletePage"){
    echo($_POST["title_remove"]);
    echo('running');
    
    $stmt = $con->prepare("DELETE FROM program WHERE program_title = ?;") ;
    $stmt->bind_param("s",$_POST["title_remove"]);
    if($stmt->execute()){
        $response_array['status'] = 'success';
    }
    else{
        $response_array['status'] = 'error';
    }
    }
    ?>