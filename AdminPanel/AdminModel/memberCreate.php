<?php 
include '../../Model/dbh.inc.php';

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$designation=$_POST['designation'];
$contact=$_POST['contact_number'];
$fburl=$_POST['fburl'];
$linkedin_url=$_POST['linkedin_url'];
$twitter_url=$_POST['twitter_url'];
$photoUrl = $_POST['path'];
$status = 1;


// $target_dir = "../../assets/images/";
// $target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file);

//establishing Connection
$newConnection= new dbh;
$conn=$newConnection->connect();

$stmt= $conn->prepare("INSERT INTO team_members(first_name,last_name,role,contact_number,status,facebook_url,linkedin_url,twitter_url,quote,profilepic_url) VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssisssss",$firstName,$lastName,$designation,$contact,$status,$fburl,$linkedin_url,$twitter_url,$quote,$photoUrl);
$stmt->execute();

$conn->close();


?>
