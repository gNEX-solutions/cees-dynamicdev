<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Academy Edit Page</title>
  <?php include '../resources/nav.php'; ?>
  <?php include '../resources/footer.php'; ?>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit CEES Academy Pages</h1>


<form method="POST" action="AdminModel/create.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
    
      <input type="hidden" name="inputType" value="Academy">
      <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
      </div>
      <div class="form-group">
        <label for="inputSummary">Summary</label>
        <textarea class="form-control" name="inputSummary" placeholder="Summary" required></textarea>
      </div>
      <div class="form-group">
        <label for="inputDescription">Paragraph 1</label>
        <textarea class="form-control" name="inputDescription1" placeholder="Paragraph" required></textarea>
      </div>

      <div class="form-group">
        <label for="inputDescription">Paragraph 2</label>
        <textarea class="form-control" name="inputDescription2" placeholder="Paragraph" required></textarea>
      </div>

       
    </div>
    <div class="col">
      <!-- <div >
        <label for="inputImage" >Image</label><br>
        <input type="file"  accept="image/*" name="inputImage" required>
      </div> -->
      <p> sample text </p>
      <!-- <div class=""> -->
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTED9f0P_NtgexxbQW0czCYt4QvWy8XhlgEEkYEUoZujHlQhMCs" alt="..." class="img-thumbnail" style=" max-height: 150px">
     
    </div>  

    
   
  </div>
  <div>
      <button type="submit" class="btn btn-primary">Save Changes</button>
     </div>
  
</form>
  
  
  
  
  

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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
