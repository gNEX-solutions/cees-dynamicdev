<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        include 'Controller/adminProgramController.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="../assets/images/logo2.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Kalpa Wijesooriya">

  <title>Edit Programs</title>
  <?php include './resources/nav.php'; ?>
  <?php include './resources/footer.php'; ?>
  <!-- including the database connection  -->
  
  <!-- Custom fonts for this template-->
  <!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/acadamyEditPage.js"></script> 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/sectionEdit.css">
 
 
 

  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet"
          type="text/css"
          href="css/jquery-confirm.css"/>
 
</head>

<body id="page-top">
  <div id="wrapper">
    <?php showNavBar(); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
         <h1 class="h3 mb-4 text-gray-800">Edit Programs</h1>
        </nav>

<!-- KDW: 11-09-2019 : -->
        <div class="container" style="margin-bottom:5%;margin-top:5%;margin-right:5%;margin-left:15%" >
          <div class="row justify-content-md-center">
         
          <div class="col col-md-4">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary">
              <input type="radio"  class="btn btn-primary" name="options" id="option1" autocomplete="off" value="Order"> Order
            </label>
            <label class="btn btn-secondary active">
              <input type="radio"  class="btn btn-success" name="options" id="option2" autocomplete="off"  value="Program" checked> Program
            </label>
            
          </div>
          </div>
        
             
          </div>
        </div>

        <form style="margin-left:5%;margin-bottom:2%" class="justify-content-md-center">
            <div class="row justify-content-md-center">
             
                <div class="form-group col-sm-4 justify-content-md-center">
                    <strong> <label for="inputDescription">Page Type</label> </strong>
                    <select class="form-control" name="page_type" id="pageType">
                      <option >Select page type</option>
                      <option value="ID">Lean Certification</option>
                      <option value="BP">Trainings</option>
                      <option value="SL">Solutions </option>
                    </select>
                </div> 
                <div class="form-group col col-sm-4"  id="proTitlediv">
                    <strong><label for="inputDescription">Title</label></strong>
                    <select class="form-control" name="inputDesignType" id="proTitle">
                      <option>Select the Program</option>
                    </select>
                </div>
              
          </div>
        </form>
  
       <hr>
       <form style="margin-left:5%;margin-top:2%;margin-right:5%" id="Program_form" class="justify-content-md-start">
     
       
          <input  type="hidden" class="form-control" name="ID" id="ID" >
          <input  type="hidden" class="form-control" name="programType" id="programType" >
          <input  type="hidden" class="form-control" name="method" id="method" value="save">
        
       <div class="row justify-content-md-start">
        <div class="form-group col col-sm-8" >
          <strong><label for="inputTitle">Page Title</label></strong>
          <input type="text" class="form-control" name="Title" placeholder="Title" id="Title" required>
        </div>
       </div>
      
       <div class="row justify-content-md-start">
        <div class="form-group col col-sm-8">
          <strong><label for="inputTitle">Summary</label></strong>
          <textarea type="text" class="form-control" name="Summary" placeholder="Summary" id="Summary" required></textarea>
        </div>
       </div>
       <div class="row justify-content-md-start" id="discription1">
        <div class="form-group col col-sm-8">
          <strong><label for="Description">Description1</label></strong>
          <textarea type="text" class="form-control" name="Description1" placeholder="Description1" id="Description" required></textarea>
        </div>
       </div>
       <div class="row justify-content-md-start" id="discription2">
        <div class="form-group col col-sm-8">
          <strong><label for="Description">Description2</label></strong>
          <textarea type="text" class="form-control" name="Description2" placeholder="Description2" id="Description2" ></textarea>
        </div>
       </div>
       <div class="row justify-content-md-start" id="discription3">
        <div class="form-group col col-sm-8">
          <strong><label for="Description">Description3</label></strong>
          <textarea type="text" class="form-control" name="Description3" placeholder="Description3" id="Description3" ></textarea>
        </div>
       </div>
       <div class="row justify-content-md-start">
       <div class="form-group col col-sm-8" id="inputLecturer" >
          <strong> <label for="inputLecturer">Lecturer</label></strong>
          <input type="text" class="form-control" id="lecturer" name="inputLecturer" placeholder="Lecturer" >
        </div>
        </div>
      <div class="row justify-content-md-start">
       <div class="form-group col col-sm-8" id="inputCourseDuration">
        <strong> <label for="inputCourseDuration">Course Duration</label></strong>
        <input type="text"  class="form-control" id="duration"name="inputCourseDuration" placeholder="Course Duration" >
       </div>
      </div>
      <div class="row justify-content-md-start">
        <div class="form-group col col-sm-8" id="inputCourseFee">
          <strong> <label for="inputCourseFee">Course Fee</label></strong>
          <input type="number" id="fee" class="form-control" name="inputCourseFee" placeholder="Course Fee" >
        </div>
      </div>
           <div class="form-group" id="currencyDiv">
               <strong> <label for="inputPageType">Currency</label> </strong>
               <select class="form-control" name="currency" id="currency">
                   <?php
                   $currency =new AdminProgramController();
                   $currencyData=  $currency->getCurrency();
                   foreach ($currencyData as $object){
                       echo '<option value="'. $object["id"].'">'. $object["code"].'</option>';
                   }


                   ?>
               </select>
           </div>
       <div class="row justify-content-md-start">
           <div class="form-group col col-sm-8" id="inputCourseSheets">
               <strong> <label for="inputCourseSheets">Course Seats</label></strong>
               <input type="number" id="Seats" class="form-control" name="inputCourseSheets" placeholder="Course Seats" >
           </div>
       </div>
    
       <div class="row justify-content-md-start">
        <div class="form-group col-8">
          <strong> <label for="inputDescription">Show program</label></strong><br>
          <input type="radio" name="status" value="1" id="status-show"> Show &nbsp;
          <input type="radio" name="status" value="0"  id="status-hide"> Don't Show 
        </div>
      </div>
      <div class="row justify-content-md-start">
        <div class="col col-lg-3" style="margin-top:5%">
          <strong><label for="inputTitle">Image 1</label></strong>
          <input type="file" id="file" name="file" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-3">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image">
        </div>
      </div>
      
      <div class="row justify-content-md-start">
        <div class="col col-lg-3" style="margin-top:5%">
          <strong><label for="inputTitle">Image 2</label></strong>
          <input type="file" id="image2" name="image2" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-3">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image2src">
        </div>
      </div>

      <div class="row justify-content-md-start">
        <div class="col col-lg-3" style="margin-top:5%">
          <strong><label for="inputTitle">Image 3</label></strong>
          <input type="file" id="image3" name="image3" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-3">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image3src">
        </div>
      </div>

      <div class="row justify-content-md-start">
        <div class="col col-lg-3" style="margin-top:5%">
          <strong><label for="inputTitle">Image 4</label></strong>
          <input type="file" id="image4" name="image4" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-3">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image4src">
        </div>
      </div>

      <div class="row justify-content-md-start" id="imageDiv5">
        <div class="col col-lg-3" style="margin-top:5%">
          <strong><label for="inputTitle">Image 5</label></strong>
          <input type="file" id="image5" name="image5" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-3">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image5src">
        </div>
      </div>







      <div class="row row justify-content-end" style="margin-top:2%">
          <div class="col-sm-2">
              <button type ="button" class="btn btn-danger" id="delete" style="margin-top:10px;float: right"">Delete</button>
          </div>
        <div class="col-sm-4">

        <button type="submit" class="btn btn-primary submitBtn" id="save" style="margin-top:10px;float: left">Save Changes</button>
          
          <p class="statusMsg"></p> 
        </div>

      </div>
      
      </form>

<div id="error">

</div>
<div class="container" style="margin-bottom:5%" id="oder">
  <div class="row justify-content-md-center">
    <div class="form-group col-lg-10">
      <div class="row" id="th">
        <div class="col col-md-2">
        Current Oder
        </div>
        <div class="col col-md-6">
        Title
        </div>
        <div class="col col-md-4">
          Privious Oder
        </div>
      </div>
     <div class="row">
      <div class="col col-md-2 text-center">
          <ul id="notsortable" style="width:100px">
          
          </ul>
      </div>
      <div class="col col-md-10">
          <ul id="sortable">
          
          </ul>
      </div>
    </div>
     
      
    </div>
  </div>
  <div class="row row justify-content-end">
        <div class="col-sm-4">
          <button type="button" class="btn btn-primary submitBtn" id="save_oder" style="margin-top:10px">Update Oder</button>
          <p class="statusMsg"></p> 
        </div>
      </div>
  </div>




    <?php showFooter(); ?>
  </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="js/jquery-confirm.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/jscolar.js"></script>
<script src="js/editsections.js"></script>
<script>
    $("#inputCourseSheets").hide();
    $("#currencyDiv").hide();
   $('select').on('change', function (e) {
      if(this.value=="ID")
      {
      $("#inputCourseFee").show();
      $("#inputCourseDuration").show();
      $("#inputLecturer").show();
      $("#discription1").show();
      $("#discription2").show();
      $("#imageDiv5").hide();
      $("#discription3").hide();
      $("#inputCourseSheets").show();
          $("#currencyDiv").show();

      }else if(this.value=="BP"){
      $("#inputCourseFee").hide();
      $("#inputCourseDuration").hide();
      $("#inputLecturer").hide();
      $("#discription1").show();
      $("#discription2").show();
      $("#discription3").show();
      $("#imageDiv5").show();
      $("#inputCourseSheets").hide();
          $("#currencyDiv").hide();
      }
    else if(this.value=="SL"){
      $("#inputCourseFee").hide();
      $("#inputCourseDuration").hide();
      $("#inputLecturer").hide();
      $("#discription1").show();
      $("#discription2").show();
      $("#discription3").hide();
      $("#imageDiv5").hide();
      $("#inputCourseSheets").hide();
          $("#currencyDiv").hide();
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