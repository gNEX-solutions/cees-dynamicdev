<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CEES</title>
  <?php include '../resources/nav.php'; ?>
  <?php include '../resources/footer.php'; ?>
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php showNavBar(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
      
            <?php 
            include '../../Model/dbh.inc.php';

            $title=$_POST['inputTitle'];
            $summary=$_POST['inputSummary'];
            //DS: 11.09.2019: Peogram inputs
            $pageType=$_POST['inputPageType'];
            $designType=$_POST['inputDesignType'];
            $status=$_POST['status'];
            //$type=$_POST['inputType'];

            $target_dir = "../../assets/images/";
            $target_file = $target_dir . basename($_FILES["inputImage"]["name"]);
            $target_file_relative_path = "assets/images/" . basename($_FILES["inputImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
           if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["inputImage"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.<br>";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            /*if (file_exists($target_file)) {
                echo "Sorry, file already exists.<br>";
                $uploadOk = 0;
            }*/
            // Check file size
            if ($_FILES["inputImage"]["size"] > 5000000) {
                echo "Sorry, your file is too large.<br>";
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
                echo "Sorry, your file was not uploaded.Please Try Again<br>";
            
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["inputImage"]["tmp_name"], $target_file)) {
            //echo "The file ". basename( $_FILES["inputImage"]["name"]). " has been uploaded.".$title;
            } else { 
                echo "Sorry, there was an error uploading your file. Please try again<br>";
            }
            //if($uploadOk == 0){
                    
            $newConnection= new dbh;
            $success=1;
            $conn=$newConnection->connect();
            //echo "<script>alert('.$title.')</script>";
            //if($pageType=="CA"){
            echo "<script>alert(".$pageType.")</script>";
            //$type='CA'; 
            //$status=1;s
            //$x=40;
            $conn->autocommit(false);
            $stmt= $conn->prepare("INSERT INTO program(program_title, summary, page_type, status, image_url, Menu_type) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param('sssiss',$title, $summary, $pageType, $status, $target_dir, $designType);
            //$stmt= $conn->prepare("INSERT INTO program(program_title) VALUES(?)");
            //$stmt->bind_param('s',$title);
            //$stmt->execute();
    
            if(!$stmt->execute()){
                $success=0;
                echo "<script>alert('.$title.')</script>";
            }
            if($success==1){
                $conn->commit();
                echo 'New Page was created successfully';
            }
            $conn->autocommit(true);
            $conn->close();
}
?>
            <script type="text/javascript">
               location.href = '../AcademyNewPage.php';
            </script>
            </div>
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

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>



