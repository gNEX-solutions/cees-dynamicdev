<?php
include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();


if( $_POST['method'] == "deletePage"){


    
    $stmt = $con->prepare("UPDATE program SET isDeleted = 1 WHERE idprogram = ?") ;
    $stmt->bind_param("i",$_POST["title_remove"]);
    if($stmt->execute()){
        echo ( '{"status":200,"message":"successfully deleted"}');
    }
    else{
        echo ( '{"status":500,"message":"Something went wrong"}');
    }

    }
    ?>