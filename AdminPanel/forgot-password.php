<?php
require_once('../Model/dbh.inc.php');
session_start();
$dbh = new dbh();
	if(!empty($_POST["forgot-password"])){
		if(!empty($_POST["user-email"])) {
            $sql = "Select * from user WHERE email ='" . $_POST["user-email"] . "'";
            $result = $dbh->connect()->query($sql);
            $user = mysqli_fetch_array($result);
            if(!empty($user)){
              require_once("AdminModel/forgot-password-recovery-mail.php");
            } else {
              $error_message = 'No User Found';
            }
  }
}
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

  <title>CEES Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img src="img/cees.png" alt="cees" style="width:50%; margin: 20%;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                  <form class="user" name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
                    <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message; ?></div>
                    <?php } ?>

                    <div id="validation-message">
                      <?php if(!empty($error_message)) { ?>
                    <?php echo $error_message; ?>
                    <?php } ?>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="user-email" id="user-email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>

                    <div class="field-group">
                      <div><input type="submit" name="forgot-password" id="forgot-password" value="Reset Password" class="btn btn-primary btn-user btn-block"></div>
                    </div>	
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.html">Already have an account? Login!</a>
                  </div> -->
                </div>
              </div>
            </div>
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
  function validate_forgot() {
    if(document.getElementById("user-email").value == "") {
      document.getElementById("validation-message").innerHTML = "Email is required!";
      return false;
    }
    return true;
  }
</script>
</body>

</html>