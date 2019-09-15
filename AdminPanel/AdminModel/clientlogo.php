<?php 
include '../../Model/dbh.inc.php';

$target_dir = "../../assets/images/";
$input_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
$input_file = $input_dir . basename($_FILES["inputImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file);
$status = 1;

$newConnection= new dbh;
$conn=$newConnection->connect();

$stmt= $conn->prepare("INSERT INTO clients(imageUrl,status) VALUES (?,?)");
$stmt->bind_param("si",$input_file,$status);
$stmt->execute();
$conn->close();
?>

<script type="text/javascript">alert("Client added Successfully");history.go(-1);</script>