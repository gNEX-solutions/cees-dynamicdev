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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <script src="../../assets/customjs/sweetalert2.all.min.js"></script>
 
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">

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
          <script>
          
          function delArticle(fileName) {
            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    $.ajax({
          url: 'deleteArticle.php',
          data: {'id' : fileName },
          success: function (response) {
          
          },
          error: function () {
          
          }
        });
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then( function(){
      window.location.reload();
    });
   
    
  }

})
        
      }
          </script>
<?php



include '../../Model/dbh.inc.php';
  $newConnection= new dbh;
  $conn=$newConnection->connect();
  
  
  
     
          $sql="SELECT idblog_posts,title FROM blog_posts WHERE status=1";
          $result=$conn->query($sql);
          $numRows=$result->num_rows;
        
          if($numRows>0){
              while($row=$result->fetch_assoc()){
             
          echo '<div class="row">
           <div class="col-md-3 col-md-10 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                 <a href="researchView.php?artID='.$row['idblog_posts'].'"> <div class="text-s font-weight-bold text-primary text-uppercase mb-1" >'.$row['title'].'</div></a>
                 
                </div>
                <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.location.href=\'editArticle.php?id='.$row['idblog_posts'].'\'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="delArticle('.$row['idblog_posts'].')">Delete</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>';
            }
        }
      

  
  $conn->close();
  unset($newConnection);
?>

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

 



</body>

</html>
<?php   
}
    else
    {
        header("location:../login.php");
    }
?>