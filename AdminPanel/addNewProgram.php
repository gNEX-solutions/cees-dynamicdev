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

  <title>Create New Program</title>
  <?php include 'resources/nav.php'; ?> 
  <?php include 'resources/footer.php'; ?>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <link href="css/style.css" rel="stylesheet"> -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php showNavBar(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
      <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Create New Program</h1>
          </nav>
      
          <!-- Begin Page Content -->
          <div class="container-fluid">
          <!-- Page Heading -->

          <form method="POST" action="AdminModel/create.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col col-sm-12">
              <div class="form-group">
                <strong> <label for="inputPageType">Page Type</label> </strong>
                  <select class="form-control" name="inputPageType">
                    <option>Select page type</option>
                    <option value="ID">ICEES Academy</option>
                    <option value="BP">Consultancy Services</option>
                    <option value="SL">Solutions Lab</option>
                  </select>
              </div> 
              <!-- <div class="form-group">
                  <strong> <label for="inputDesignType">Program design type</label></strong>
                  <select class="form-control" name="inputDesignType" id="proType">
                    <option>Select the design type</option>
                    <option value="NCIL">No Courses Image Left</option>
                    <option value="NCIR">No Courses Image Right</option>
                    <option value="NCICV">No Courses Image Card View</option>
                    <option value="WCGV">With Courses Grid View</option>
                    <option value="WCCV">With Courses Column View</option>
                    <option value="WCBV">With Courses Block View</option>
                    
                  </select>
              </div> -->
              <div class="form-group">
                <strong> <label for="inputTitle">Title</label></strong>
                <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
              </div>
  
              <div class="form-group">
                <strong> <label for="inputSummary">Summary</label></strong>
                <textarea class="form-control" name="inputSummary" placeholder="Summary" required></textarea>
              </div>              
              <div class="form-group" id="discription1">
                <strong> <label for="description1">Description 1</label></strong>
                <textarea class="form-control" name="description1" placeholder="Description 1" required></textarea>
              </div>
              <div class="form-group" id="discription2">
                <strong> <label for="description2">Description 2</label></strong>
                <textarea class="form-control" name="description2" placeholder="Description 2" required></textarea>
              </div>
              <div class="form-group" id="discription3">
                <strong> <label for="description3">Description 3</label></strong>
                <textarea class="form-control" name="description3" placeholder="Description 3"></textarea>
              </div>
              <div class="form-group" id="inputLecturer" >
                <strong> <label for="inputLecturer">Lecturer</label></strong>
                <input type="text" class="form-control" name="inputLecturer" placeholder="Lecturer" >
              </div>
              <div class="form-group" id="inputCourseDuration">
                <strong> <label for="inputCourseDuration">Course Duration</label></strong>
                <input type="text"  class="form-control" name="inputCourseDuration" placeholder="Course Duration" >
              </div>
              <div class="form-group" id="inputCourseFee">
                <strong> <label for="inputCourseFee">Course Fee</label></strong>
                <input type="number"  class="form-control" name="inputCourseFee" placeholder="Course Fee" >
              </div>
                <div class="form-group" id="inputCoursSheets">
                    <strong> <label for="inputCourseSheets">Course Seats</label></strong>
                    <input type="number"  class="form-control" name="inputCourseSheets" placeholder="Seats" >
                </div>
              <div class="row">
                <div class="form-group col col-lg-6"  id="Image_main">
                  <strong><label for="inputImage" class="btn-2" >Image 1</label></strong><br>
                  <small>The image file should be a jpg, jpeg or a png file less than 5MB.</small><br>
                  <input type="file" id="file"  accept=".png,.jpeg,.jpg" name="file">
                </div>
                <div class="form-group col col-lg-6" id="Image2div">
                  <strong><label for="image2" class="btn-2" >Image 2</label></strong><br>
                  <small>The image file should be a jpg, jpeg or a png file less than 5MB.</small><br>
                  <input type="file" id="image2"  accept=".png,.jpeg,.jpg" name="image2">
                </div>
                <div class="form-group col col-lg-6" id="Image3div">
                  <strong><label for="image3" class="btn-2" >Image 3</label></strong><br>
                  <small>The image file should be a jpg, jpeg or a png file less than 5MB.</small><br>
                  <input type="file" id="image3"  accept=".png,.jpeg,.jpg" name="image3">
                </div>
                <div class="form-group col col-lg-6" id="Image4div">
                  <strong><label for="image4" class="btn-2" >Image 4</label></strong><br>
                  <small>The image file should be a jpg, jpeg or a png file less than 5MB.</small><br>
                  <input type="file" id="image4"  accept=".png,.jpeg,.jpg" name="image4">
                </div>
                <div class="form-group col col-lg-6" id="Image5div">
                  <strong><label for="image5" class="btn-2" >Image 5</label></strong><br>
                  <small>The image file should be a jpg, jpeg or a png file less than 5MB.</small><br>
                  <input type="file" id="image5"  accept=".png,.jpeg,.jpg" name="image5">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
          </div>
        </form>
      </div>
        <!-- /.container-fluid -->
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
</div>
  <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->

  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $('#proType').on('change', function() {
      $("#sample").attr("src","img/"+this.value +".PNG");
    });
    // $( document ).ready(function() {
    //  alert("reday!")
    // });
    $(window).ready(function() {
      $("#inputCourseFee").hide();
      $("#inputCourseDuration").hide();
      $("#inputLecturer").hide();
      $("#discription1").hide();
      $("#discription2").hide();
      $("#discription3").hide();
      $("#Image5div").hide();
        $("#inputCoursSheets").hide();

      
    });
    $('select').on('change', function (e) {
      if(this.value=="ID")
      {
          $("#inputCoursSheets").show();
      $("#inputCourseFee").show();
      $("#inputCourseDuration").show();
      $("#inputLecturer").show();
      $("#discription1").show();
      $("#discription2").show();
      $("#discription3").hide();
      $("#Image5div").hide();
      }else if(this.value=="BP"){
          $("#inputCoursSheets").hide();
      $("#inputCourseFee").hide();
      $("#inputCourseDuration").hide();
      $("#inputLecturer").hide();
      $("#discription1").show();
      $("#discription2").show();
      $("#discription3").show();
      $("#Image5div").show();
      }
    else if(this.value=="SL"){
          $("#inputCoursSheets").hide();
      $("#inputCourseFee").hide();
      $("#inputCourseDuration").hide();
      $("#inputLecturer").hide();
      $("#discription1").show();
      $("#discription2").show();
      $("#discription3").hide();
      $("#Image5div").hide();
      }
    });

  </script>
</body>

</html>
<?php   
}
    else
    {
        header("location:login.php");
    }
?>

