<?php
    session_start();

    if(isset($_SESSION['User']))
    {

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="../assets/images/logo2.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CEES Admin - Blog Articles</title>

  <?php include '../resources/nav.php'; ?>
  <?php include '../resources/footer.php'; ?>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  
  

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="../../assets/customjs/sweetalert2.all.min.js"></script>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php showNavBarToModel(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <h1 class="h3 mb-4 text-gray-800">Saving Article</h1>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <?php
if($_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE){
$target_dir = "../../assets/coverImages/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$target_file_relative_path = "assets/coverImages/" . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists

  if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}


// Check file size
if ($_FILES["image"]["size"] > 5000000) {
    echo "Sorry, your cover image is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your cover image was not uploaded.Please Try Again By editing the article<br>";
   
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
       //echo "The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.".$title;
    } else {
     
        echo "Sorry, there was an error uploading your file. Please try again<br>";
    }
}
}

include '../../Model/dbh.inc.php';
$newConnection= new dbh;
$conn=$newConnection->connect();

if($_POST['status']=='new'){

    $title=$_POST['title'];
    $content=$_POST['article'];
    if($uploadOk==1 ){
      $image=$target_file_relative_path;
    }else{
      $image='';
    }
    
    $summary=$_POST['summary'];
    $status=1;
        $stmt= $conn->prepare("INSERT INTO blog_posts(title,htmlString,status,imageUrl,summary) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssiss",$title,$content,$status,$image,$summary);
        if($stmt->execute()){
          echo "<script>Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })</script>";
        }


} else if($_POST['status']=='update'){
  $id=$_POST['articleID'];
  $title=$_POST['title'];
  $content=$_POST['article'];
  
  $summary=$_POST['summary'];
  if($_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE){
    $sql="SELECT imageUrl FROM blog_posts WHERE idblog_posts='$id'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $path=$row['imageUrl'];
    if($uploadOk==1 ){
      $image=$target_file_relative_path;
      if($path!=''){
        if(file_exists('../../'.$path)){
          unlink('../../'.$path);
          
        }
      }
    }else{
      $image=$path;
    }
   
    
   
   
    $stmt1= $conn->prepare("UPDATE blog_posts SET htmlString=?, title=?, summary=?, imageUrl=? WHERE idblog_posts=?");
    $stmt1->bind_param("ssssi",$content,$title,$summary,$image,$id);
    if($stmt1->execute()){
      echo "<script>Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })</script>";
    }
  }else{
    $stmt2= $conn->prepare("UPDATE blog_posts SET htmlString=?, title=?, summary=? WHERE idblog_posts=?");
    $stmt2->bind_param("sssi",$content,$title,$summary,$id);
    if($stmt2->execute()){
      echo "<script>Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
      })</script>";
    }
  }
     
}


$conn->close();
unset($newConnection);

?>
 <p>You will be redirected in <span id="counter">3</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'viewArticles.php';
    }
if (parseInt(i.innerHTML)!=0) {
    i.innerHTML = parseInt(i.innerHTML)-1;
}
}
setInterval(function(){ countdown(); },1000);
</script>
        
        <!-- /.container-fluid -->
      

        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php showFooter(); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 

</html>
<?php   
}
    else
    {
        header("location:../login.php");
    }
?>

