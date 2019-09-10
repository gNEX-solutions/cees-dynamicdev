<?php 
include '../../Model/dbh.inc.php';

$eventName=$_POST['EventName'];
$location=$_POST['EventLocation'];
$date=$_POST['EventDate'];
$startTime=$_POST['EventStartTime'];
$endTime=$_POST['EventEndTime'];
$description=$_POST['inputDescription1'];
$caption="test";
$status = 1;


$insertDate = date("Y-m-d", strtotime($date));
$insertStartTime = date("H:i:s", strtotime($startTime));
$insertEndTime = date("H:i:s", strtotime($endTime));

$target_dir = "../../assets/images/";
$target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file);

//establishing Connection
$newConnection= new dbh;
$conn=$newConnection->connect();

$stmt= $conn->prepare("INSERT INTO events(name,date,start_time,end_time,description,location,status) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssi",$eventName,$insertDate,$insertStartTime,$insertEndTime,$description,$location,$status);
$stmt->execute();
$id=$stmt->insert_id;

$stmt2= $conn->prepare("INSERT INTO events_images(status,caption,url,idEvent) VALUES (?,?,?,?)");
$stmt2->bind_param("issi",$status,$caption,$target_file,$id);
$stmt2->execute();

$conn->close();

?>

<script type="text/javascript">alert("Event Created Successfully");history.go(-1);</script>