<?php 
include '../../Model/dbh.inc.php';


$title=$_POST['inputTitle'];
$summary=$_POST['inputSummary'];
$description1=$_POST['inputDescription1'];
$description2=$_POST['inputDescription2'];
$type=$_POST['inputType'];

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

$newConnection= new dbh;
$conn=$newConnection->connect();
if($type=='Academy'){
    $type='CA';
    $status=1;
$stmt= $conn->prepare("INSERT INTO consultancies(heading,type,status,summary) VALUES (?,?,?,?)");
$stmt->bind_param("ssis",$title,$type,$status,$summary);
$stmt->execute();
$id=$stmt->insert_id;
$stmt2= $conn->prepare("INSERT INTO consultaies_descriptions(description,idconsultancies,description_order) VALUES (?,?,?)");
$order=1;
$stmt2->bind_param("sii",$description1,$id,$order);
$stmt2->execute();
$stmt3= $conn->prepare("INSERT INTO consultaies_descriptions(description,idconsultancies,description_order) VALUES (?,?,?)");
$order=2;
$stmt3->bind_param("sii",$description2,$id,$order);
$stmt3->execute();
$stmt4= $conn->prepare("INSERT INTO consultancies_images(status,url,idConsultancies) VALUES (?,?,?)");
$statusNum=1;
$stmt4->bind_param("isi",$statusNum,$target_file,$id);
$stmt4->execute();
}

$conn->close();

?>