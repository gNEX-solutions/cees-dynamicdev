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

  <title>CEES Admin - Update Events</title>

  <?php include 'resources/nav.php'; ?>
  <?php include 'resources/footer.php'; ?>

  <!-- including the database connection  -->
  <?php include '../Model/dbh.inc.php'; ?>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php
    $newConnection= new dbh;
    $conn=$newConnection->connect(); 
  ?>
  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php showNavBar(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- End of Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


        <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Events</h1>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <form action="./updateEvents.php" method="post">
            <div class="form-group">
              <div class="row">
                <div class="col-lg-10 col-md-6" style="padding-bottom: 1px">
                  <select class="custom-select" id="inputGroupSelect04" name="page">
                    <!-- <option selected>Select page...</option> -->
                    <?php 
                      $result = $conn->query("SELECT events.event_id as id , events.name  as name
                      FROM heroku_3dffaa1b8ca65ff.events where events.status = '1';");
                      while($row = $result->fetch_assoc()){
                        // echo($row[1]);
                      
                          echo("<option value='".$row['id']."' >".$row['name']."</option>");


                      }
                    ?>
                  </select>
                </div>
                <div class="col-lg-1 col-md-2">
                  <div class="input-group-append" style="padding-bottom: 1px; width: 100%">
                    <button class="btn btn-outline-primary" type="submit" method="post" name="edit" >Edit</button>
                  </div>
                </div>
                <div class="col-lg-1 col-md-2">
                  <div class="input-group-append" style="padding-bottom: 1px;  width: 100%">
                    <button class="btn btn-outline-danger" type="submit" method="post" name="delete"> Delete </button>
                  </div>
                </div>
              </div>
                    
                    
            </div>
          </form>

        <?php
        $page_id = "";
        $resultCons = null;
        $resultPara = null;
        $paraRows = null;

          if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["delete"])){
            $page_id = $_POST['page']; //  the id of the page 
            // $title=$_POST['inputTitle'];
            $stmt = $conn->prepare("update  heroku_3dffaa1b8ca65ff.events 
              set events.status = 0 where events.event_id = ?;") ;
            $stmt->bind_param("s",$page_id);
            $stmt->execute();
      
            echo(" <div class=\"alert alert-success\" role=\"alert\">
              The page  has been deleted successfully. </div>"
          );
            // echo ("<h1> delete clicked </h1>");
      
          }

          if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["edit"])){

            $page_id = $_POST['page']; //  the id of the page
      
            // creating two connections for paragraphs and images 
            $connPara=$newConnection->connect();
      
            $stmntCons = $conn->prepare("select * from heroku_3dffaa1b8ca65ff.events
                 where events.event_id = ? and events.status = '1';") ;
            $stmntPara = $connPara->prepare("SELECT * FROM heroku_3dffaa1b8ca65ff.events_images 
                where events_images.idEvent = ?;");
      
            $stmntCons->bind_param("s", $page_id);
            $stmntPara->bind_param("s", $page_id);
      
            $stmntCons->execute();
            $stmntPara->execute();
      
      
            $resultCons =  $stmntCons->get_result();
            $resultPara =  $stmntPara->get_result();
      
            // closing the extra connections
            $connPara = null ;
      
            $rowCons = $resultCons->fetch_assoc();
            $paraRows = $resultPara->fetch_assoc();
          }

          
          if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["update_table"])){
          
            $pageId = $_POST['page'];
            $title=$_POST['EventName'];
            $location=$_POST['EventLocation'];
            $date = $_POST['EventDate'];
            $startTime=$_POST['EventStartTime'];
            $endTime=$_POST['EventEndTime'];
            $description=$_POST['inputDescription1'];

            // creating the new db connection
            $newConnection= new dbh;
            $conn=$newConnection->connect();

            $stmt= $conn->prepare("update heroku_3dffaa1b8ca65ff.events set
            events.name = ?, events.date = ?, events.start_time = ?, events.end_time = ?, events.description = ?, events.location = ? 
            where events.event_id = ?;");
            $stmt->bind_param("ssssssi",$title,$date,$startTime,$endTime,$description,$location,$pageId);
            $stmt->execute();

            echo(" <div class=\"alert alert-success\" role=\"alert\">
              Details updated successfully..! Reload the page to see new content... </div>"
          );
           echo "<meta http-equiv='refresh' content='0'>";

          }
        ?>            

      <form method="POST" action="./updateEvents.php" enctype="multipart/form-data">

        <input type="hidden" name="page" value=<?php echo($page_id); ?>>

          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" name="EventName" placeholder="Event Name"  
              required value=<?php 
                if($resultCons != null){
                  echo($rowCons['name']);
                  }?> >
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" name="EventLocation" placeholder="Event Location"
              required value=<?php 
                if($resultCons != null){
                  echo($rowCons['location']);
                  }?> >
            </div>
          </div>

          <div class="form-group row">
             <div class="col-sm-2">
                 <label style="float:left;">Event Date</label>
             </div>
              <div class="col-sm-2">
                 <input type="date" class="form-control form-control-user" name="EventDate" placeholder="Event Date"
                 required value=<?php 
                  if($resultCons != null){
                  echo($rowCons['date']);
                  }?>>
              </div>
             <div class="col-sm-2">
                 <label style="float:left;">Event Start Time</label>
             </div>
             <div class="col-sm-2" style="float:left;" >
               <input type="time" class="form-control form-control-user" name="EventStartTime" placeholder="Email Address"
               required value=<?php 
                if($resultCons != null){
                  echo($rowCons['start_time']);
                  }?>>
             </div>
             <div class="col-sm-2">
                 <label style="float:right;">Event End Time</label>
             </div>
             <div class="col-sm-2">
               <input type="time" class="form-control form-control-user" name="EventEndTime" placeholder="Email Address"
               required value=<?php 
                if($resultCons != null){
                  echo($rowCons['end_time']);
                  }?>>
             </div>
          </div>

          <div class="form-group">
            <label for="inputDescription">Description</label>
            <textarea class="form-control" name="inputDescription1" placeholder="Paragraph" required>
            <?php 
              if($resultCons != null){
                 echo($rowCons['description']);
              }?>
            </textarea>
          </div>

          <div class="col-md-6">
          <p> Images </p>
            <?php 
              if($paraRows != null){
                  echo("
                  <div id=" .$paraRows['idImages'] . " name='img_container'>
                    <input type=\"hidden\" name=\"inputId\" value=" . $paraRows['url']. ">
                    <img src=". substr($paraRows['url'], 3)." alt='..' class='img-thumbnail' style=' max-height: 150px'>
                    <button type=\"button\" onclick=\"removeImg(" .$paraRows['idImages'] .")\" name=\"img_remove\" class=\"btn btn-outline-danger\" > Remove </button>
                  </div>
                  ");}?> 
            </div>
            <div >
          <label for="inputImage" >Add Image</label><br>
          <input type="file"  accept="image/*" id="uploadImage" >
        </div> <br> <br>
            <div>
              <button type="submit" method="post" name="update_table" class="btn btn-success">Save Changes</button>
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

  <script>

    function removeImg(imgId){
    console.log(imgId);

    var imageSection = document.getElementById(imgId);
    $.ajax({
      type:'POST', 
      url: "./AdminModel/editPage.php",
      data: {img_remove: imgId, req:'imgRemove'},
      success: function(){
        alert('image has been deleted succesfully');
        $(imageSection).css("display","none");
      },
      error: function(){
        alert('image deletion failed');
      }
    });

  }
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

