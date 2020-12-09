<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICEES</title>
    <?php include '../resources/nav.php'; ?>
    <?php include '../resources/footer.php'; ?>
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom JS alerts-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <?php showNavBar(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <?php
                include '../../Model/dbh.inc.php';
                $newConnection= new dbh;
                $success=1;
                $conn=$newConnection->connect();

                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"]))
                {

                    $title=$_POST['inputTitle'];
                    $summary=$_POST['inputSummary'];
                    $pageType=$_POST['inputPageType'];
                    $lecturer=$_POST['inputLecturer'];
                    $CourseDuration=$_POST['inputCourseDuration'];
                    $CourseFee=$_POST['inputCourseFee'];
                    $inputCourseSheets=$_POST['inputCourseSheets'];


                    $description1 =$_POST['description1'];
                    $description2 =$_POST["description2"];
                    $description3 =$_POST["description3"];
                    $currency =(int)$_POST["currency"];
                    $created_at= date("Y-m-d h:i:sa");
                    $status=1;

                    // $filename = $_FILES['file']['name'];
                    $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                    $imageProperties = getimageSize($_FILES['file']['tmp_name']);



                    $sql = "INSERT INTO program(program_title, summary, status, main_image, page_type,created_at,isDeleted) VALUES ('{$title}', '{$summary}', $status, '{$imgData}','$pageType','{$created_at}',0)";
                    $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
                    if (isset($current_id)) {

                        $last_id =$conn->insert_id;
                        $stmt1="";

                        if( $pageType=="SL")
                        {
                            $imgData1 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                            $imgData2 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
                            $imgData3 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
                            $imageProperties2 = getimageSize($_FILES['image2']['tmp_name']);
                            $imageProperties3 = getimageSize($_FILES['image3']['tmp_name']);
                            $imageProperties4 = getimageSize($_FILES['image4']['tmp_name']);
                            $stmt1= "INSERT INTO `solution_lab` (`description1`,`description2`,`idprogram`,`image1`,`image2`,`image3`) VALUES ('{$description1}','{$description2}',$last_id,'{$imgData1}','{$imgData2}','{$imgData3}')";

                        }
                        if( $pageType=="ID")
                        {
                            $imgData1 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                            $imgData2 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
                            $imgData3 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));

                            $imageProperties2 = getimageSize($_FILES['image2']['tmp_name']);
                            $imageProperties3 = getimageSize($_FILES['image3']['tmp_name']);
                            $imageProperties4 = getimageSize($_FILES['image4']['tmp_name']);
                            $stmt1= "INSERT INTO `courses` (`description1`,`description2`,`idprogram`,`course_fee`,`course_duration`,`lecturer`,`image1`,`image2`,`image3`,`sheets`,`currency_id`) VALUES ('{$description1}','{$description2}',$last_id,$CourseFee,'{$CourseDuration}','{$lecturer}','{$imgData1}','{$imgData2}','{$imgData3}','{$inputCourseSheets}',{$currency})";

                        }

                        if( $pageType=="BP")
                        {
                            $imgData1 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                            $imgData2 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
                            $imgData3 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
                            $imgData4 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));
                            $imageProperties2 = getimageSize($_FILES['image2']['tmp_name']);
                            $imageProperties3 = getimageSize($_FILES['image3']['tmp_name']);
                            $imageProperties4 = getimageSize($_FILES['image4']['tmp_name']);
                            $imageProperties5 = getimageSize($_FILES['image5']['tmp_name']);
                            $stmt1= "INSERT INTO business_partnering (idprogram,description1,description2,description3,image1,image2,image3,image4) VALUES ( $last_id, '{$description1}', '{$description2}', '{$description3}', '{$imgData1}', '{$imgData2}', '{$imgData3}','{$imgData4}')";

                        }

                        $current_id= mysqli_query($conn, $stmt1) or die("<b>Error:</b> Problem on Data Insert<br/>" . mysqli_error($conn));
                        if (isset($current_id)) {
                            //header("Location: ../addNewProgram.php");
                        }
                    }


                }


                $conn->autocommit(true);
                $conn->close();

                ?>

                <p>You will be redirected in <span id="counter">6</span> second(s).</p>
                <script type="text/javascript">
                    function countdown() {
                        var i = document.getElementById('counter');
                        if (parseInt(i.innerHTML)<=0) {
                            location.href = '../index.php';
                        }
                        if (parseInt(i.innerHTML)!=0) {
                            i.innerHTML = parseInt(i.innerHTML)-1;
                        }
                    }
                    setInterval(function(){ countdown(); },1000);

                </script>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>