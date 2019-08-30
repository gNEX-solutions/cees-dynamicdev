

<?php 

include '../../Model/dbh.inc.php';

$newConnection= new dbh;
$con=$newConnection->connect();

// echo("<h1> edit page is workinng </h1>");
if($_POST["req"] == 'update_table'){
    // echo("<h1> edit page is workinng </h1>");
    $pageId = $_POST['page']; // id of the page 
    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $descriptions = array();
    $descriptions = $_POST['paragraphs'];

    $target_dir = "../../assets/images/";
    $target_file = $target_dir .$_POST['fileloc'] ;


    $desIds = array();
    $desIds = $_POST['paragraphIds'];
    // $pageOdres = array();
    $imgPositions = array(); // positions of the images 
    $imgPositions = $_POST['imagePositions'];
    $imgIds = array(); // ids of the images 
    $imgIds = $_POST['imageIds'];
    
    // $file = $_POST['file'];



    // // getting the paragraph information dynamically 
    // for( $i = 1; $i < 4; $i++){
    //     // $string = 'desId'.strval($i);
    //     $desId = null;
    //     $description = null;
    //     $pgorder = null;
    //     $desId = $_POST['desId'.strval($i)];
    //     if($desId == null || $desId == ''){
    //         $desId = '-1';
    //     }
    //     // echo($desId);

    //     $description = $_POST['inputDescription'.strval($i)];
    //     $pgorder = strval($i);

    //     array_push($desIds,$desId);
    //     array_push($descriptions, $description);
    //     array_push($pageOdres,$pgorder);

    // }


    // getting the image realted informartion dynamically 
    // for ( $i =1 ; $i < 3; $i++){
    //     $imgPos = $_POST['positon_select'.$i];
    //     $id = $_POST['imgid'.$i];
    //     // echo("\n");
    //     // echo($imgIds);
    //     array_push($imgPositions, $imgPos);
    //     array_push($imgIds,$id );
    // }

    // echo(count($desIds));
    


    
    // $description1=$_POST['inputDescription1'];
    // $description2=$_POST['inputDescription2'];
    // $type=$_POST['input'];

    // echo($pageId);
    // echo($descriptionId1);


   


    // echo($target_file);
    
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["inputImage"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }
    // // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // Check file size
    // if ($_FILES["file"] > 5000000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }
    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }
    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     echo "Sorry, your file was not uploaded.";
    // // if everything is ok, try to upload file
    // } else {
    //     if (move_uploaded_file($_FILES["file"], $target_file)) {
    //        echo " The file  has been uploaded to ".$title;

    //     } else {
        
    //         exit("Sorry, there was an error uploading your file. Please try again");
    //     }
    // }

    // creating the new db connection
    $newConnection= new dbh;
    // $success=1;
    $conn=$newConnection->connect();

    // updating the consultancies table 
    $stmt= $conn->prepare("update consultancies set
        consultancies.heading = ?, consultancies.summary = ? , consultancies.status = 1 where consultancies.idconsultancies = ?;");
    $stmt->bind_param("sss",$title,$summary,$pageId);
    $stmt->execute();

    // updating the consultancy description table 
    $updateSql = "update consultaies_descriptions set 
    consultaies_descriptions.`description` = ? where consultaies_descriptions.idconsultaies_descriptions = ?;";

    $insertSql = "insert into consultaies_descriptions( description , idconsultancies, description_order) 
        values (? , ?, ?)";

    for($i = 0; $i < count($desIds);$i++){
        // echo($desIds[$i]);
        if($desIds[$i] == '-1'){
                // echo("<h1> null desc id</h1>");
                echo($pageId.' '.$descriptions[$i]);
                if($descriptions[$i] != null || $descriptions[$i] != ""){
                    $pageOrder = $i +1;
                    $stmt= $con->prepare($insertSql);
                     $stmt->bind_param("sss",$descriptions[$i],$pageId,$pageOrder);
                    $stmt->execute();
                }
                
                
            }
        else {
            // echo("<h1> excuting this </h1>");
            echo($descriptions[$i]. ' '. $desIds[$i]);
            $stmt= $con->prepare($updateSql);
            $stmt->bind_param("ss",$descriptions[$i],$desIds[$i]);
            echo($stmt->execute());
        }
    }
    // 
    
    // echo($description1);
    // echo($descriptionId1);
   //adding new image to images table 
//    if($uploadOk){
    if(1){
        $file_url = substr($target_file,6);
        echo($file_url.' '.$pageId);
        $stmt= $con->prepare("insert into  consultancies_images( status, caption, url, idConsultancies, position )
        values ( 1,'',?, ?,'LU');");
        $stmt->bind_param("ss",$file_url,$pageId);
        $stmt->execute();
    }
    

    
    // updating the image information 

    for($i = 0 ; $i < count($imgIds); $i++ ){
        $stmt = $con->prepare("update consultancies_images set consultancies_images.position = ?
         where consultancies_images.idconsultancies_images = ?;");
        $stmt->bind_param("ss",$imgPositions[$i],$imgIds[$i]);
        $stmt->execute();
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["update_table_reserch"])){
    // echo("<h1> update table research is workinng </h1>");
    $pageId = $_POST['page']; // id of the page 
    $NOW = new DateTime(null, new DateTimeZone('Asia/Colombo')); // CURENT TIME

    
    $descriptions = array();
    $desIds = array();
    $pageOdres = array();
    $imgPositions = array(); // positions of the images 
    $imgIds = array(); // ids of the images 

    $update_reserch_table = 1; 


    // getting the paragraph information dynamically 
    for( $i = 1; $i < 6; $i++){
        // $string = 'desId'.strval($i);
        $desId = null;
        $description = null;
        $pgorder = null;
        $desId = $_POST['desId'.strval($i)];
        if($desId == null || $desId == ''){
            $desId = '-1';
        }
        // echo($desId);

        $description = $_POST['inputDescription'.strval($i)];
        $pgorder = strval($i);

        array_push($desIds,$desId);
        array_push($descriptions, $description);
        array_push($pageOdres,$pgorder);

    }


    // getting the image realted informartion dynamically 
    for ( $i =1 ; $i < 4; $i++){
        $imgPos = $_POST['positon_select'.$i];
        $id = $_POST['imgid'.$i];
        // echo("\n");
        // echo($imgIds);
        array_push($imgPositions, $imgPos);
        array_push($imgIds,$id );
    }

    // echo(count($desIds));
    


    $title=$_POST['inputTitle'];
    $summary=$_POST['inputSummary'];
    $publishedDate = $_POST['published_date'];
    
    // echo($NOW->format('Y-m-d H:i:s'));
    if(new DateTime($publishedDate) < $NOW){
        $update_reserch_table = 0;
        echo(" <div class=\"alert alert-danger\" role=\"alert\">
            The published date cannot be before today
            </div>"
        );
    }
    // $type=$_POST['input'];

    // echo($pageId);
    // echo($descriptionId1);


    $target_dir = "../assets/images/";
    $target_file = $target_dir . basename($_FILES["inputImage"]["name"]);


    // echo($target_file);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["inputImage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["inputImage"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file)) {
        //    echo " The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.".$title;
    echo(" <div class=\"alert alert-success\" role=\"alert\">
            The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.".$title.
            "</div>"
        );
        } else {
        
            exit("Sorry, there was an error uploading your file. Please try again");
        }
    }

    // creating the new db connection
    $newConnection= new dbh;
    $conn=$newConnection->connect();

    // updating the reserches  table 
    if($update_reserch_table){
        $stmt= $conn->prepare("UPDATE `researches`
        SET `heading` = ?, `summary` = ? , published_date = ? WHERE `idresearches` = ?;");
        $stmt->bind_param("ssss",$title,$summary,$publishedDate,$pageId);
        $stmt->execute();
    }
   

    // updating the reserches  description table 
    $updateSql = "UPDATE `researches_descriptions`
    SET `description` = ? WHERE `idresearches_descriptions` = ?;";

    $insertSql = "INSERT INTO `researches_descriptions`
    (`description`, `idresearches`, `description_order`) VALUES ( ?, ?, ?);";

    for($i = 0; $i < count($desIds);$i++){
        // echo($desIds[$i]);
        if($desIds[$i] == '-1'){
                // echo("<h1> null desc id</h1>");
                // echo($pageId.' '.$descriptions[$i]);
                if($descriptions[$i] != null || $descriptions[$i] != ""){
                    $stmt= $conn->prepare($insertSql);
                     $stmt->bind_param("sss",$descriptions[$i],$pageId,$pageOdres[$i]);
                    $stmt->execute();
                }
                
                
            }
        else {
            // echo("<h1> excuting this </h1>");
            // echo($description1. ' '. $descriptionId1);
            $stmt= $conn->prepare($updateSql);
            $stmt->bind_param("ss",$descriptions[$i],$desIds[$i]);
            $stmt->execute();
        }
    }
    // 
    
    // echo($description1);
    // echo($descriptionId1);
   
    

    //adding new image to images table 
    if($uploadOk){
        $file_url = substr($target_file,3);
        // echo($file_url.' '.$pageId);
        $stmt= $conn->prepare("INSERT INTO `researches_images` ( `status`, `caption`, `url`, `idresearches`, `position`)
        VALUES ( 1, '', ?,?,'LU');");
        $stmt->bind_param("ss",$file_url,$pageId);
        $stmt->execute();
    }
    // updating the image information 

    for($i = 0 ; $i < count($imgIds); $i++ ){
        $stmt = $conn->prepare("UPDATE `researches_images` SET `position` = ?
         WHERE `idresearches_images` = ?;");
        $stmt->bind_param("ss",$imgPositions[$i],$imgIds[$i]);
        $stmt->execute();
    }
}

// to be fired when the user clicks image remove icon 
if( $_POST['req'] == "imgRemove"){
    // echo("image remove");
    // echo($_POST['img_remove']);
    echo('running');
    $stmt = $con->prepare("update heroku_3dffaa1b8ca65ff.consultancies_images set consultancies_images.`status` = 0 
    where consultancies_images.idconsultancies_images = ?;") ;
    $stmt->bind_param("s",$_POST["img_remove"]);
    if($stmt->execute()){
        $response_array['status'] = 'success';
    }
    else{
        $response_array['status'] = 'error';
    }
}

if( $_POST["req"] == "delete_page"){
    echo("delete_page is executed");
    $page_id = $_POST['page']; //  the id of the page 
    // $title=$_POST['inputTitle'];
    $stmt = $con->prepare("update  heroku_3dffaa1b8ca65ff.consultancies 
      set consultancies.status = 0 where consultancies.idconsultancies = ?;") ;
    $stmt->bind_param("s",$page_id);
    if($stmt->execute()){
        $response_array['status'] = 'success';
    }
    else{
        $response_array['status'] = 'error';
    }
    

    
  
}

?>




