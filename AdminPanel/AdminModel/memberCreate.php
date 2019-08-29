<?php 
include '../../Model/dbh.inc.php';

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$designation=$_POST['designation'];
$contact=$_POST['contact_number'];
$fburl=$_POST['fburl'];
$linkedin_url=$_POST['linkedin_url'];
$twitter_url=$_POST['twitter_url'];
$status = 1;


// $target_dir = "../../assets/images/";
// $target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file);

//establishing Connection
$newConnection= new dbh;
$conn=$newConnection->connect();

$stmt= $conn->prepare("INSERT INTO team_members(first_name,last_name,role,contact_number,status,facebook_url,linkedin_url,twitter_url,quote) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssissss",$firstName,$lastName,$designation,$contact,$status,$fburl,$linkedin_url,$twitter_url,$quote);
$stmt->execute();
//if(execute()){echo "Success";}
// $id=$stmt->insert_id;

// $stmt2= $conn->prepare("INSERT INTO events_images(status,caption,url,idEvent) VALUES (?,?,?,?)");
// $stmt2->bind_param("issi",$status,$caption,$target_file,$id);
// $stmt2->execute();

$conn->close();

echo $firstName;

?>

<!-- <script type="text/javascript">alert("Member Added Successfully");history.go(-1);</script> -->