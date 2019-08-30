<?php
    include '../../Model/dbh.inc.php';
    // echo('ima')

    $newConnection= new dbh;
    $con=$newConnection->connect();
    $target_dir = "../../assets/images/";
    $target_file = $target_dir .$_FILES['file']['name'] ;
    
    echo($target_file);

    $uploadOk = 1;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        // echo " The file  has been uploaded to ".$title;
        $response_array['status'] = 'success';

    } else {
        $response_array['status'] = 'error';
        // exit("Sorry, there was an error uploading your file. Please try again");
    }
    


    


?>