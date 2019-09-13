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

  <!-- Custom styles for this template-->
  <link href="./css/sb-admin-2.min.css" rel="stylesheet">

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
            <div class="form-group col col-sm-4" >
                <strong><label for="inputDescription">Title</label></strong>
                <select class="form-control" name="inputDesignType" id="proTitle">
                  <option>Select the design type</option>
                </select>
            </div>
            <div class="col col-sm-4" style="margin-top:2.5%">
              <div class="form-group">
                <button type="button" class="btn btn-primary" id="searcTitle"><i class="fa fa-search"></i></button>
              </div> 
            </div>
        </div>
       </div>
       <form style="margin-left:5%">
       <div class="form-group col col-sm-6" >
        <strong><label for="inputTitle">Page Title</label></strong>
        <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
       </div>
       <div class="form-group col col-sm-6">
        <strong> <label for="inputDescription">Program design type</label></strong>
            <select class="form-control" name="inputDesignType" id="proType">
              <option>Select the design type</option>
              <option value="NCIL">No Courses Image Left</option>
              <option value="NCIR">No Courses Image Right</option>
              <option value="WCGV">With Courses Grid View</option>
              <option value="WCCV">With Courses Column View</option>
              <option value="WCBV">With Courses Block View</option>
            </select>
       </div>
       <div class="form-group">
        <strong><label for="inputTitle">Title</label></strong>
        <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
       </div>
       <div class="form-group">
        <strong><label for="inputTitle">Title</label></strong>
        <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
       </div>
       <div class="form-group">
        <strong><label for="inputTitle">Title</label></strong>
        <input type="text" class="form-control" name="inputTitle" placeholder="Title" required>
       </div>
      </form>
<div id="error">

</div>







    <?php showFooter(); ?>
  </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
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