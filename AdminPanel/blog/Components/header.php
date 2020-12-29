<?php
include_once '../../Model/dbh.inc.php';
include '../../Model/services.inc.php';
include '../../Model/viewservices.inc.php';
?>
	<link rel="stylesheet" href="https://technext.github.io/callie/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../../assets/navbar/navcss.css" />
	<!-- HEADER -->
	<header id="header" style="background-color:white">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- search & aside toggle --> 
                    <div  class="nav-btns" >
                        <div class="aside-btn" id="nav-icon1" >
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

            <!-- Main Nav -->
            <div id="logo" style="display:none;">
                <a href="./index.php"> <img src="../../assets/images/wef2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:10%;"></a>
             </div>

			<div id="nav-bottom">
                <div class = "row" >
                    <div class="col-md-2" style="margin:auto;" id="logo-desktop">
                        <a href="./index.php"> <img src="../../assets/images/wef3.png" alt="cees-logo" style="width:auto;height:50px;margin-left:30%;"></a>
                    </div>
                    <div class="col-lg-1" style="margin:auto" id="badge-desktop">
                        <a href="./index.php"> <img src="../../assets/images/logo1.png" alt="cees-logo" style="width:100%;margin-left:130px;margin-bottom:-12%"></a>
                    </div>
                    <div class="col-lg-1" style="margin:auto" id="badge-desktop">
                        <a href="./index.php"> <img src="../../assets/images/logo3.png" alt="cees-logo" style="width:100%;margin-left:110px;margin-bottom:-12%"></a>
                    </div>
                    <div class="col-md-8" style="padding-top:7px;padding-bottom:7px;padding-right:5%;">
                    <!-- nav -->
                       <ul class="nav-menu" >
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="has-dropdown megamenu" >
                                    <a>Lean Certification</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                            <?php
                                             $services=new ViewServices();
                                             $services->ShowID_MENU();
                                            ?> 
                                               
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a>Trainings</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                            <?php
                                             $services=new ViewServices();
                                             $services->ShowBP_MENU();
                                            ?> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a>Solutions</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                            <?php
                                             $services=new ViewServices();
                                             $services->ShowSL_MENU();
                                            ?> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="about.php">About ICEES</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                            <!-- /nav -->
            
                        
                    </div>
                </div>
			<!-- /Main Nav -->
            </div>
			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="index.php">Home</a></li>
		
                    <li class="has-dropdown"><a class="side_a" href="#" class="side_a"><a href="#">Lean Certification</a></a>
						<ul class="dropdown">
                        <?php
                            $services=new ViewServices();
                            $services->ShowCAMOB_MENU();
                            ?> 
                           
						</ul>
					</li>

                    <li class="has-dropdown"><a class="side_a" href="#" class="side_a"><a href="#">Trainings</a></a>

						<ul class="dropdown">
                            <?php
                            $services=new ViewServices();
                            $services->ShowBPMOB_MENU();
                            ?>  
                        </ul>
                    </li>
                    <li class="has-dropdown"><a class="side_a"  href="#" class="side_a"><a href="#">Solutions</a></a>
						<ul class="dropdown">
                        <?php
                            $services=new ViewServices();
                            $services->ShowSLMOB_MENU();
                            ?> 
                           
						</ul>
					</li>
                    <li><a href="about.php">About ICEES</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				<!-- <button class="nav-close nav-aside-close"><span></span></button> -->
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
	<!-- jQuery Plugins -->

	<script src="../../assets/navbar/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="../../assets/navbar/jquery.stellar.min.js"></script>
    <script src="../../assets/navbar/main.js"></script>


    

    