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
  <!-- including the database connection  -->
  <?php include '../../Model/dbh.inc.php'; ?>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<?php
$newConnection= new dbh;
$conn=$newConnection->connect(); ?>

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

  <!-- select the relavant page  -->
  <form action="./AcademyEditPage.php" method="post">
    <div class="form-group">
      <div class="row">
        <div class="col-lg-10 col-md-6" style="padding-bottom: 1px">
          <select class="custom-select" id="inputGroupSelect04" name="page">
            <option selected>Select page...</option>
            <?php 
              $result = $conn->query("SELECT consultancies.idconsultancies as id , consultancies.heading  as heading
              FROM heroku_3dffaa1b8ca65ff.consultancies where consultancies.type = 'CA' and consultancies.status = '1';");
              while($row = $result->fetch_assoc()){
                // echo($row[1]);
                echo("<option value='".$row['id']."' >".$row['heading']."</option>");
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
    // echo("<h1> dinith </h1>");
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["edit"])){
    
      $page_id = $_POST['page'];
      // echo("<p>".$page_id."</p>");

      // creating two connections for paragraphs and images 
      $connPara=$newConnection->connect(); 
      $connImage=$newConnection->connect();

      $stmntCons = $conn->prepare("select * from heroku_3dffaa1b8ca65ff.consultancies
           where consultancies.idconsultancies = ? and consultancies.status = '1';") ;
      $stmntPara = $connPara->prepare("SELECT * FROM heroku_3dffaa1b8ca65ff.consultaies_descriptions 
          where consultaies_descriptions.idconsultancies = ?;");
      $stmntImage = $connImage->prepare("SELECT * FROM heroku_3dffaa1b8ca65ff.consultancies_images 
      where consultancies_images.idConsultancies = ?;");


      $stmntCons->bind_param("s", $page_id);
      $stmntPara->bind_param("s", $page_id);
      $stmntImage->bind_param("s", $page_id);

      $stmntCons->execute();
      $stmntPara->execute();
      $stmntImage->execute();


      $resultCons =  $stmntCons->get_result();
      $resultPara =  $stmntPara->get_result();
      $resultImage =  $stmntImage->get_result();

      // closing the extra connections
      $connImage = null;
      $connPara = null ;

      $rowCons = $resultCons->fetch_assoc();
      $paraRows = array();
      $paraRows = mysqli_fetch_all($resultPara,MYSQLI_ASSOC);
    
      // echo(count($paraRows));


    }

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["delete"])){
      echo ("<h1> delete clicked </h1>");
    }
  ?>


  <!-- edit the page content  -->
  <form method="POST" action="AdminModel/create.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
      
        <input type="hidden" name="inputType" value="Academy">
        <div class="form-group">
          <label for="inputTitle">Title</label>
          <input type="text" class="form-control" name="inputTitle" placeholder="Title" required value=<?php echo($rowCons['heading']); ?>>
        </div>
        <div class="form-group">
          <label for="inputSummary">Summary</label>
          <textarea class="form-control" name="inputSummary" placeholder="Summary" required ><?php echo($rowCons['summary']); ?></textarea>
        </div>

        


        <div class="form-group">
          <label for="inputDescription">Paragraph 1</label>
          <textarea class="form-control" name="inputDescription1" placeholder="Paragraph" required>
             <?php
              if(count($paraRows)>0){
                $row = $paraRows[0];
                echo($row['description']);
              } 
              ?>
           </textarea>
        </div>

        <div class="form-group">
          <label for="inputDescription">Paragraph 2</label>
          <textarea class="form-control" name="inputDescription2" placeholder="Paragraph" required>
          <?php 
             
             if(count($paraRows)>1){
              $row = $paraRows[1];
              echo($row['description']); 
             }
             ?>
            
          </textarea>
        </div>

        
      </div>
      <div class="col-md-6">
        <!-- <div >
          <label for="inputImage" >Image</label><br>
          <input type="file"  accept="image/*" name="inputImage" required>
        </div> -->
        <p> Images </p>
        <!-- <div class=""> -->
        <?php 
            while($row = $resultImage->fetch_assoc() ){
              echo("
              <img src=". $row['url']." alt='..' class='img-thumbnail' style=' max-height: 150px'>
              
              ");
            }
        ?>
        
      
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
