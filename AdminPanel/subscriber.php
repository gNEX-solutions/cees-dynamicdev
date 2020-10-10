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

  <title>ICEES Admin - Subscribers</title>

  <?php include 'resources/nav.php'; ?>
  <?php include 'resources/footer.php'; ?>

  <!-- including the database connection  -->
  <?php include '../Model/dbh.inc.php'; ?>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="../assets/customjs/sweetalert2.all.min.js"></script>
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
          <h1 class="h3 mb-4 text-gray-800">Subscribers List</h1>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <?php
                $sql="SELECT email FROM subscribers";
                $result=$conn->query($sql);
                $numRows=$result->num_rows;
                $target_dir = "../";
                if($numRows>0){
                echo("<table class=\"table\" >");
                while($row=$result->fetch_assoc()){
                  echo("
                  <tr>
                    <td> ". $row['email']." </td>
                  </tr>
                  <br>
                  ");
                  }
                echo("<table>");
                }
                ?>
        
        </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>
  
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

