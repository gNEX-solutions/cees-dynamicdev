<?php
require_once('../Model/dbh.inc.php');
$dbh = new dbh();
if(isset($_GET['userId']))
{
    $userId = $_GET['userId'];
    $userName = $_GET['username'];
    $email = $_GET['email'];
}
if(isset($_POST["reset-password"])) {
  $sql2 = "UPDATE user SET `password` = '" . $_POST["member_password"]. "', `username` = '" . $_POST["member_username"]. "', `email` = '" . $_POST["member_email"]. "' WHERE `userId` = '" . $_GET["userId"] . "'";
  $result=$dbh->connect()->query($sql2);
  $success_message = "Password is reset successfully. Redirecting to Login page...";
  header( "refresh:5;url=login.php" );
}


?>
<script>
function validate_password_reset() {
	if((document.getElementById("member_password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("member_password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	return true;
}
</script>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
              <div class="col-lg-6 d-none d-lg-block"><img src="img/cees.png" alt="cees" style="width:50%; margin: 20%;"></div>
              <div class="col-lg-6">
                <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Account!</h1>
              </div>
              <form class="user" name="frmReset" id="frmReset" method="post" onSubmit="return validate_password_reset();">
                <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message; ?></div>
                <?php } ?>

                <div id="validation-message">
                  <?php if(!empty($error_message)) { ?>
                <?php echo $error_message; ?>
                <?php } ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="member_username" id="member_username" value="<?php echo $userName; ?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="member_email" id="member_email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="member_password" id="member_password" placeholder="New Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="confirm_password" id="confirm_password" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" name="reset-password" id="reset-password" value="Update Account!" class="btn btn-primary btn-user btn-block">

                <hr>
              </form>
              <hr>
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

</body>

</html>
