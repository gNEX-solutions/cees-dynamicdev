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
  
  <script src="https://cdn.tiny.cloud/1/u2kioan9rc6y5xb04zvvx19t9mlat41vnzfintbgg50tl7fa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'#blogArticle',
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace autoresize wordcount visualblocks visualchars code fullscreen insertdatetime  nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
    images_upload_url: 'postAcceptor.php'
 });
</script>

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
          <h1 class="h3 mb-4 text-gray-800">Articles</h1>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">


        <form method="POST" action="saveArticle.php" id="editForm" enctype="multipart/form-data">
          <input type="hidden" name="articleID" value="<?php echo $_GET['id'] ?>">
          <input type="hidden" name="status" value="update">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="articleTitle" name="title" placeholder="Title of the Article" required>
        </div>
        <div class="form-group">
          <label for="title">Summary</label>
          <input type="text" class="form-control" id="artsummary" name="summary" placeholder="Summary of the Article" required>
        </div>
        <div class="form-group">
          <label for="title">Change Cover Image</label><br>
          <input type="file"  name="image"  accept="image/*" >
        </div>
        <div class="form-group">
          <label for="title">Cover Image</label><br>
          <img id="coverimg"  class="img-thumbnail">
        </div>
        <div class="form-group">
        <textarea name="article" id="blogArticle" required></textarea>
        </div>
        <div class="form-group">
        <button type="button" onclick="confirmEdit()">Edit Article</button> 
        <input type="submit" id="subButtonEdit" hidden>
        </div>
        </form>
        <script>
        function confirmEdit() {
            Swal.fire({
  title: 'You are about to save your work',
  text: "",
  type: 'info',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, save it!'
}).then((result)=>{
 
  if(result.value){
   
    $('#subButtonEdit').trigger('click');
  }else{
    
  }
});
        
      }
</script>
        <?php
 
  include '../../Model/dbh.inc.php';
  $newConnection= new dbh;
  $conn=$newConnection->connect();
  
  if(isset($_GET['id'])){
  

      $id = $_GET['id'];
          $sql="SELECT * FROM blog_posts WHERE idblog_posts='$id' AND status=1";
          $result=$conn->query($sql);
          $row=$result->fetch_assoc();
    $title=$row['title'];
    $content=$row['htmlString'];
    $image=$row['imageUrl'];
    $summary=$row['summary'];

  }
  $conn->close();
  unset($newConnection);
  
  ?>


 
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
  <script src="js/sb-admin-2.min.js"></script>

  <script src="blackedit.js"></script>
  <script>
    var content=`<?php echo $content; ?>`;
    var cvrimg='<?php echo $image; ?>';
    var summary='<?php echo $summary; ?>';
    $('#blogArticle').html(content);
    var name="<?php echo $title ?>";
    document.getElementById('articleTitle').value=name;
    document.getElementById('coverimg').src='../../'.concat(cvrimg);
    document.getElementById('artsummary').value=summary;
     

  </script>


</html>
<?php   
}
    else
    {
        header("location:../login.php");
    }
?>

