<?php
include_once '../Model/dbh.inc.php';
include '../Model/getMembers.php';

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

  <title>CEES Admin - Edit/Delete Member</title>

  <?php include 'resources/nav.php'; ?>
  <?php include 'resources/footer.php'; ?>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- croppie -->
  <link rel="stylesheet" href="css/croppie.css" />

</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php showNavBar(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>


          <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit/Delete Team Memebr</h1>
            <!-- Topbar Search -->
         <!--    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form> -->

          <!-- Topbar Navbar -->
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">
         

          <form class="user" id="member" name="member" method="post" action="" enctype="multipart/form-data">
            <div style="align-content: center;">
               <h4>Select the Member</h4>
               <select name='members' id="members" onchange="getval(this);">
                                <option value=''></option>
                   <?php
                        $getMembers = new getMembers();
                        $data = $getMembers->getAllMembers();
                        
                        foreach ($data as $key=>$member) {
                          echo '
                            <option value="'.$member['idTeam_members'].'">'.$member['first_name']." ".$member['last_name'].'</option>' ;
                       }
                       
                    ?>
             </select>
                
                <hr>
            </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">First Name</label>
                    <input type="text" class="form-control form-control-user" id="firstName" name="firstName" placeholder="First Name" required="">
                  <!-- </div>
                  
                </div>
                  <div class="col-sm-4 mb-3 mb-sm-0"> -->
                    <label style="float:left;">Last Name</label>
                    <input type="text" class="form-control form-control-user" name="lastName" id="lastName" placeholder="Last Name" required="">
                  <!-- </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0"> -->
                    <label style="float:left;">Designation</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="designation" name="designation" placeholder="Designation" required="">
                  <!-- </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0"> -->
                    <label style="float:left;">Contact Number</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="contact_number" name="contact_number" placeholder="07xxxxxxxxxxx">
                  </div>

                   
                    <div class="panel-heading">Select Profile Image</div>
                    <div class="col-sm-4 mb-3 mb-sm-0" style="float: right;">
                      <div id="uploaded_image" name="uploaded_image" >
                        <input type="hidden" id="imgpath" name="imgpath" />
                      </div>
                      <!-- <img width="70%" src="../assets/images/mbr-510x513.jpg"> -->
                    </div>
                    <div class="panel-body" align="center">
                      <input type="file" name="upload_image" id="upload_image" />
                      <!-- <div id="uploaded_image"></div> -->
                    </div>
                 

                </div>

                <hr><h4>Social Media Links</h4>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Facebook Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="fburl" name="fburl" placeholder="Facebook Profile Url">
                  </div>

                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">LinkedIn Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="linkedin_url" name="linkedin_url" placeholder="LinkedIn Profile Url">
                  </div>
                
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Twitter Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="twitter_url" name="twitter_url" placeholder="Twitter Profile Url">
                  </div>
                </div>
<!-- 
                <div class="form-group">
                  <label for="inputDescription">Quote</label>
                  <textarea class="form-control" name="quote" id="quote" placeholder="Quote"></textarea>
                </div> -->

               <!--  <div class="form-group">
                <label for="inputImage">Upload Event Flyer</label><br/>
                <input type="file"  accept="image/*" name="inputImage"/>
                </div> -->
            
                <button type="submit" name="submit" id="submit_btn" class="btn btn-primary">Add Member</button>
              </form>

             <div class="message_box" id="message_box"></div>
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

<!-- Modal -->
<div id="uploadimageModal" class="modal" role="dialog">
  <div class="modal-dialog" >

    <!-- Modal content-->
    <div class="modal-content" style="width: 700px;">
      <div class="modal-header">
        <h4 class="modal-title">Crop Image</h4>
        <button type="button" class="btn btn-default" onclick="closeModal();" data-dismiss="modal">Close</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8 text-center">
              <div id="image_demo" style="width:600px; margin-top:30px"></div>
            </div>
            <div class="col-md-4" style="padding-top:30px;">
             
      </div>
      <div>
     </div>
      <div class="modal-footer">
        <button class="btn btn-success crop_image">Crop Image</button>
      </div>
    </div>

  </div>
</div>
 


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      
      $(function () {
        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'AdminModel/memberCreate.php',
            data: $('form').serialize(),
            success: function () {
              alert('New Member Added');
              $("#member")[0].reset();
              $("#image_uploaded")[0].reset();
            }
          });

        });

      });
    </script>

    

<script type="text/javascript">
$(document).ready(function(){

  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:370,
      height:370,
      type:'square' //circle
    },
    boundary:{
      width:500,
      height:500
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"AdminModel/upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
          $('#imgpath').html(data);
        }
      });
    })
  });

});  
</script>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

  <!-- croppie -->
    <!-- <script src="js/jquery.min.js"></script>   -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/croppie.js"></script>
</body>

</html>

<?php   
}
    else
    {
        header("location:login.php");
    }
?>
