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

  <title>Academy Edit Page</title>
  <?php include './resources/nav.php'; ?>
  <?php include './resources/footer.php'; ?>
  <!-- including the database connection  -->
  <?php include '../Model/dbh.inc.php'; ?>
  
  <!-- Custom fonts for this template-->
  <!-- <script type="text/javascript" src="./lib/jquery-3.3.1.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/acadamyEditPage.js"></script> 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/sectionEdit.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
 
 

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
         <h1 class="h3 mb-4 text-gray-800">Edit CEES Academy Pages</h1>
        </nav>

<!-- KDW: 11-09-2010 : -->
        <div class="container" style="margin-bottom:5%">
          <div class="row justify-content-md-center">
          <div class="col col-lg-2">
          Edit Program Order
          </div>
          <div class="col col-lg-2">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary">
              <input type="radio"  class="btn btn-primary" name="options" id="option1" autocomplete="off" value="Order"> Order
            </label>
            <label class="btn btn-secondary active">
              <input type="radio"  class="btn btn-success" name="options" id="option2" autocomplete="off"  value="Program" checked> Program
            </label>
            
          </div>
          </div>
          <div class="col col-lg-2">
            Edit Program
          </div>
             
          </div>
        </div>
        <div class="content form-group" style="margin-left:5%">
          <div class="row form-group">
            <div class="form-group col-sm-4">
                <strong> <label for="inputDescription">Page Type</label> </strong>
                <select class="form-control" name="page_type" id="pageType">
                  <option>Select page type</option>
                  <option value="CA">CEES Academy</option>
                  <option value="CS">Consultancy Services</option>
                  <option value="SL">Solutions Lab</option>
                </select>
            </div> 
            <div class="form-group col col-sm-4"  id="proTitlediv">
                <strong><label for="inputDescription">Title</label></strong>
                <select class="form-control" name="inputDesignType" id="proTitle">
                  <option>Select the design type</option>
                </select>
            </div>
            <div class="col col-sm-4" style="margin-top:2.5%">
              <div class="form-group">
                <button type="button" class="btn btn-primary" id="searcTitle"><i class="fa fa-search"></i></button>
                <button type="button" class="btn btn-primary" id="searchOder"><i class="fa fa-search"></i></button>
              </div> 
            </div>
        </div>
       </div>
       <form style="margin-left:5%;margin-bottom:5%" id="Program_form">
     
       
          <input  type="hidden" class="form-control" name="ID" id="ID" >
          <input  type="hidden" class="form-control" name="method" id="method" value="save">
        
       <div class="row">
        <div class="form-group col col-sm-6" >
          <strong><label for="inputTitle">Page Title</label></strong>
          <input type="text" class="form-control" name="Title" placeholder="Title" id="Title" required>
        </div>
       </div>
       <div class="row">
        <div class="form-group col col-sm-6">
          <strong><label for="inputTitle">Summary</label></strong>
          <textarea type="text" class="form-control" name="Summary" placeholder="Summary" id="Summary" required></textarea>
        </div>
       </div>
       <div class="form-group col-6">
        <strong> <label for="inputDescription">Show program</label></strong><br>
        <input type="radio" name="status" value="1" id="status-show">Show &nbsp;
        <input type="radio" name="status" value="0"  id="status-hide">Don't Show 
      </div>
      <div class="row">
        <div class="col col-lg-2">
        <strong><label for="inputTitle">Image</label></strong>
        <input type="file" id="file" name="file" />
        </div>
        <div class="col col-lg-1">
        </div>
        <div class="col col-lg-4">
          <img src="img/American_University_Seal.svg.png" class="rounded float-left" alt="..." style="width:200px;height200px" id="Image">
        </div>
       </div>
      <div class="row row justify-content-end">
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary submitBtn" id="save" style="margin-top:10px">Save Changes</button>
          <p class="statusMsg"></p> 
        </div>
      </div>
      
      </form>
<div id="error">

</div>
<div class="container" style="margin-bottom:5%" id="oder">
  <div class="row justify-content-md-center">
    <div class="form-group col-lg-10">
      <ul id="sortable">
        <li class="oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
        <li class="ui-state-default oder"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
      </ul>
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
</body>

</html>
<?php   
}
    else
    {
        header("location:login.php");
    }
?>