<?php 

include '../../Model/dbh.inc.php';

echo("<h1> edit page is workinng </h1>");

$pageId = $_POST['inputId']; // id of the page 
$descriptionId1 = $_POST['desId1']; // id of the description 1
$descriptionId2 = $_POST['desId2'];// id of the description 2


$title=$_POST['inputTitle'];
$summary=$_POST['inputSummary'];
$description1=$_POST['inputDescription1'];
$description2=$_POST['inputDescription2'];
// $type=$_POST['input'];

// echo($pageId);
// echo($descriptionId1);


$target_dir = "../../assets/images/";
$target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
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
       echo "The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.".$title;
    } else {
     
        exit("Sorry, there was an error uploading your file. Please try again");
    }
}

// creating the new db connection
$newConnection= new dbh;
$conn=$newConnection->connect();

// updating the consultancies table 
$stmt= $conn->prepare("update heroku_3dffaa1b8ca65ff.consultancies set
     consultancies.heading = ?, consultancies.summary = ? where consultancies.idconsultancies = ?;");
$stmt->bind_param("sss",$title,$summary,$pageId);
$stmt->execute();

// updating the consultancy description table 
$stmt= $conn->prepare("update heroku_3dffaa1b8ca65ff.consultaies_descriptions set 
    consultaies_descriptions.`description` = ? where consultaies_descriptions.idconsultaies_descriptions = ?;");
$stmt->bind_param("ss",$description1,$descriptionId1);
$stmt->execute();
$stmt->bind_param("ss",$description2,$descriptionId2);
$stmt->execute();

