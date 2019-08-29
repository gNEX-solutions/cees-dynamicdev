<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reserch and Insights Modify Page</title>
  <?php include './resources/nav.php'; ?>
  <?php include './resources/footer.php'; ?>
  <!-- including the database connection  -->
  <?php include '../Model/dbh.inc.php'; ?>
  <?php include 'AdminModel/editPage.php'; ?>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.min.css" rel="stylesheet">

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
  <h1 class="h3 mb-4 text-gray-800">Modify CEES Reserch and Insights Pages</h1>

  <!-- select the relavant page  -->
  <form action="./ReserchAndInsights.php" method="post">
    <div class="form-group">
      <div class="row">
        <div class="col-lg-9 col-md-6" style="padding-bottom: 1px">
          <select class="custom-select" id="inputGroupSelect04" name="page">
            <!-- <option selected>Select page...</option> -->
            <?php 
              $result = $conn->query("SELECT `researches`.`idresearches` as id ,`researches`.`heading` as heading 
              FROM `heroku_3dffaa1b8ca65ff`.`researches` where researches.`status` = 1 ;");
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
        <div class="col-lg-1 col-md-2">
          <div class="input-group-append" style="padding-bottom: 1px;  width: 100%">
            <button class="btn btn-outline-success" type="submit" method="post" name="add_new"> Add New</button>
          </div>
        </div>
      </div>
      
      
    </div>
  </form>
  

  <?php 
    // echo("<h1> dinith </h1>");
    $page_id = "";
    $resultCons = null;
    $resultPara = null;
    $resultImage = null;
    $paraRows = null;
    const IMAGE_POSITIONS_CODES = array('RU','RD','CU','CD','LU','LD');
    const IMAGE_POSITIONS = array('Right Up', 'Right Down', 'Center Up', 'Center Down', 'Left Up', 'Left Down');
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["edit"])){
    
      
      $page_id = $_POST['page']; //  the id of the page 
      // echo("<p>".$page_id."</p>");
      // $_SESSION['page'] = $page_id;

      // creating two connections for paragraphs and images 
      $connPara=$newConnection->connect(); 
      $connImage=$newConnection->connect();

      $stmntCons = $conn->prepare("SELECT * FROM `researches` 
      where researches.idresearches = ?  and researches.`status` = 1 ;") ;
      $stmntPara = $connPara->prepare("SELECT * FROM researches_descriptions 
      where researches_descriptions.idresearches = ?;");
      $stmntImage = $connImage->prepare("SELECT * FROM researches_images 
      where researches_images.idresearches = ? and researches_images.status = 1;");


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
      $page_id = $_POST['page']; //  the id of the page 
      // $title=$_POST['inputTitle'];
      $stmt = $conn->prepare("UPDATE `researches`
      SET `status` = 0 WHERE `idresearches` = ?;") ;
      $stmt->bind_param("s",$page_id);
      $stmt->execute();

      echo(" <div class=\"alert alert-success\" role=\"alert\">
        The page  has been deleted successfully. </div>"
    );
      // echo ("<h1> delete clicked </h1>");


    }
 //  to be fired when the user clicks remove image icon 
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST["img_remove"])){
      // echo("image remove");
      // echo($_POST['img_remove']);
      $stmt = $conn->prepare("UPDATE `heroku_3dffaa1b8ca65ff`.`researches_images` SET `status` = 0 WHERE 
      `idresearches_images` = ?;") ;
      $stmt->bind_param("s",$_POST['img_remove']);
      if($stmt->execute()){
        echo(" <div class=\"alert alert-success\" role=\"alert\">
        The image  has been deleted successfully. </div>"
        );
      }
      else{
        echo(" <div class=\"alert alert-danger\" role=\"alert\">
        There was prolem in deletion of the image  </div>"
        );
      }
      

    }
  ?>


  <!-- edit the page content  -->
  <form method="POST" action="./ReserchAndInsights.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">
      
        <input type="hidden" name="inputType" value="Academy">
        <input type="hidden" name="page" value=<?php echo($page_id); ?>>
        <div class="form-group">
          <label for="inputTitle">Title</label>
          <input type="text" class="form-control" name="inputTitle" placeholder="Title" 
              required value=<?php 
                if($resultCons != null){
                  echo($rowCons['heading']); 
                }
                
                ?> >
        </div>
        <div class="form-group">
          <label for="inputSummary">Summary</label>
          <textarea class="form-control" name="inputSummary" placeholder="Summary" required >
          <?php 
              if($resultCons != null){
                 echo($rowCons['summary']);
              }
              
          ?>
          
          </textarea>
        </div>

        <div class="form-group">
          <label for="publishedDate">Published Date</label>
          <input type="date" class="form-control" name="published_date" placeholder="published_date" required value=
          <?php 
              if($resultCons != null){
                 echo($rowCons['published_date']);
              }
              
          ?>
          >
          <!-- </textarea> -->
        </div>

        


        <div class="form-group">
          <label for="inputDescription">Paragraph 1</label>
          <input type="hidden" name="desId1" value=
          <?php 
            if($resultPara != null && count($paraRows)>0){
              $row = $paraRows[0];
              echo($row['idresearches_descriptions']);
            } 
            else {
              echo('-1');
            }
          
          ?>>
          <textarea class="form-control" name="inputDescription1" placeholder="Paragraph" >
             <?php
              if($resultPara != null && count($paraRows)>0){
                $row = $paraRows[0];
                echo($row['description']);
              } 
              ?>
           </textarea>
        </div>

        <div class="form-group">
          <label for="inputDescription">Paragraph 2</label>
          <input type="hidden" name="desId2" value=
          <?php 
            if($resultPara != null && count($paraRows)>1){
              $row = $paraRows[1];
              echo($row['idresearches_descriptions']);
            } 
            else {
              echo('-1');
            }
          
          ?>>
          <textarea class="form-control" name="inputDescription2" placeholder="Paragraph">
          <?php 
             
             if($resultPara != null && count($paraRows)>1){
              $row = $paraRows[1];
              echo($row['description']); 
             }
             ?>
            
          </textarea>
        </div>
        <div class="form-group">
          <label for="inputDescription">Paragraph 3</label>
          <input type="hidden" name="desId3" value=
          <?php 
            if($resultPara != null && count($paraRows)>2){
              $row = $paraRows[2];
              echo($row['idresearches_descriptions']);
            } 
            else {
              echo('-1');
            }
          
          ?>>
          <textarea class="form-control" name="inputDescription3" placeholder="Paragraph" >
          <?php 
             
             if($resultPara != null && count($paraRows)>2){
              $row = $paraRows[2];
              echo($row['description']); 
             }
             ?>
            
          </textarea>
        </div>

        <div class="form-group">
          <label for="inputDescription">Paragraph 4</label>
          <input type="hidden" name="desId4" value=
          <?php 
            if($resultPara != null && count($paraRows)>3){
              $row = $paraRows[3];
              echo($row['idresearches_descriptions']);
            } 
            else {
              echo('-1');
            }
          
          ?>>
          <textarea class="form-control" name="inputDescription4" placeholder="Paragraph" >
          <?php 
             
             if($resultPara != null && count($paraRows)>3){
              $row = $paraRows[3];
              echo($row['description']); 
             }
             ?>
            
          </textarea>
        </div>

        <div class="form-group">
          <label for="inputDescription">Paragraph 5</label>
          <input type="hidden" name="desId5" value=
          <?php 
            if($resultPara != null && count($paraRows)>4){
              $row = $paraRows[4];
              echo($row['idresearches_descriptions']);
            } 
            else {
              echo('-1');
            }
          
          ?>>
          <textarea class="form-control" name="inputDescription5" placeholder="Paragraph" >
          <?php 
             
             if($resultPara != null && count($paraRows)>4){
              $row = $paraRows[4];
              echo($row['description']); 
             }
             ?>
            
          </textarea>
        </div>

        
      </div>
      <div class="col-md-6">
       
        <p> Images </p>
        <!-- <div class=""> -->
        <?php 
          if($resultImage != null){
            $imgCount = 0;
            while($row = $resultImage->fetch_assoc() ){
              $imgCount++ ;
              echo("
              <input type=\"hidden\" name=\"imgid" .$imgCount . "\" value=" . $row['idresearches_images']. ">
                <img src=
                ../". $row['url']." alt='..' class='img-thumbnail' style=' max-height: 150px'>
                <button type=\"submit\" name=\"img_remove\" class=\"btn btn-outline-danger\" value=".$row['idresearches_images']." > Remove </button>
                            
              ");

              echo("
              <p> Image position </p>
              <select class=\"custom-select\" id=\"inputGroupSelect01\" name = \"positon_select" . $imgCount . "\">
              
              
              ");

              for($i =0 ; $i < count(IMAGE_POSITIONS_CODES); $i++){
                // echo(_IMAGE_POSITIONS_CODES[$i]);
                if($row['position'] == IMAGE_POSITIONS_CODES[$i] ){
                  echo(" <option value="  . IMAGE_POSITIONS_CODES[$i] ." selected>". IMAGE_POSITIONS[$i] . "</option>" );
                }
                else {
                  echo(" <option value="  . IMAGE_POSITIONS_CODES[$i] .">". IMAGE_POSITIONS[$i] . "</option>" );
                }
              }

              echo("</select>");

            }
          }
           
        ?> 
        <!-- <p> Add Images </p>  -->
      <div >
          <label for="inputImage" >Add Image</label><br>
          <input type="file"  accept="image/*" name="inputImage" >
        </div> 
      </div> 
        
    </div>
    <div>
        <button type="submit" method="post" name="update_table_reserch" class="btn btn-success">Save Changes</button>
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
