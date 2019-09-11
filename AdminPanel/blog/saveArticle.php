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
include '../../Model/dbh.inc.php';
$newConnection= new dbh;
$conn=$newConnection->connect();

if($_POST['status']=='new'){

    $title=$_POST['title'];
    $content=$_POST['article'];
    $status=1;
        $stmt= $conn->prepare("INSERT INTO blog_posts(title,htmlString,status) VALUES (?,?,?)");
        $stmt->bind_param("ssi",$title,$content,$status);
        $stmt->execute();


} else if($_POST['status']=='update'){
  $id=$_POST['articleID'];
  $title=$_POST['title'];
  $content=$_POST['article'];
      $stmt1= $conn->prepare("UPDATE blog_posts SET htmlString=?, title=? WHERE idblog_posts=?");
      $stmt1->bind_param("ssi",$content,$title,$id);
      $stmt1->execute();
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

