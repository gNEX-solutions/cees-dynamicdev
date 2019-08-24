<?php
//include 'php/dbh.inc.php';
//include 'php/services.inc.php';
//include 'php/viewservices.inc.php';
?>
	<link rel="stylesheet" href="https://technext.github.io/callie/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/navbar/navcss.css" />
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
                <img src="assets/images/wef2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:10%;">
             </div>

			<div id="nav-bottom">
                <div class = "row" >
                    <div class="col-md-2" style="margin:auto" id="logo-desktop">
                        <img src="assets/images/wef2.png" alt="cees-logo" style="width:auto;height:50px;margin-left:30%;">
                    </div>
                
                    <div class="col-md-10"  style="padding-top:7px;padding-bottom:7px;padding-right:5%;" >
                    <!-- nav -->
                       <ul class="nav-menu" >
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="has-dropdown megamenu" >
                                    <a href="Programs.php">CEES Academy</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="Programs.php">CEES Academy(Active)</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li> Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat iLorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i
                                                        </li>
                                                    </ul>
                                                    <h4 class="dropdown-heading"><a href="#">Main 5</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i
                                                        Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i
                                                        <br>
                                                        <img src="assets/images/development-icon-3335977-1920-736x559.jpg" width="200px" heigth="auto" style="margin:20px;">
                                                    </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 1</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 2</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 3</a></h4>
                                                    <ul class="dropdown-list">

                                                       <?php
                                                        //$services=new ViewServices();
                                                        // $services->ShowAllServices();
                                                        ?> 
                                                        <li><a href="#">Technology</a></li>
                                                        <li><a href="#">Fashion</a></li>
                                                        <li><a href="#">Health</a></li>
                                                        <li><a href="#">Travel</a></li>

                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a href="services-talent.php">Consulting Services</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="services-talent.php">Consulting Services(Active)</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li> Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat iLorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 1</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                    <h4 class="dropdown-heading"><a href="#">Main 4</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 2</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 3</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown megamenu">
                                    <a href="services2.php">Solutions Lab</a>
                                    <div class="dropdown">
                                        <div class="dropdown-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Areas</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li><a href="#">Sub 1</a></li>
                                                        <li><a href="#">Sub 1</a></li>
                                                        <li><a href="services2.php">Solutions Lab(Active)</a></li>
                                                        <li><a href="#">Sub 2</a></li>
                                                        <li><a href="#">Sub 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 3</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 3</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="dropdown-heading"><a href="#">Main 3</a></h4>
                                                    <ul class="dropdown-list">
                                                        <li>Lorem ipsum dolor sit amet consectetur adipiscing.
                                                        Adipiscing tristique risus nec feugiat i</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="about.php">About CEES</a></li>
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
					<li class="has-dropdown"><a class="side_a">Technology Solutions</a>
						<ul class="dropdown">
							<li><a href="services-talent.php">Technology (Active)</a></li>
                            <li><a href="#">Main 1</a></li>
                            <li><a href="#">Main 2</a></li>
                            <li><a href="#">Main 3</a></li>
                            <li><a href="#">Main 5</a></li>
						</ul>
					</li>
                    <li class="has-dropdown"><a class="side_a">CEES Academy</a>
						<ul class="dropdown">
							<li><a href="Programs.php">CEES Academy Pragrams (Active)</a></li>
                            <li><a href="#">Main 1</a></li>
                            <li><a href="#">Main 2</a></li>
                            <li><a href="#">Main 3</a></li>
                            <li><a href="#">Main 5</a></li>
						</ul>
					</li>
                    <li class="has-dropdown"><a class="side_a">Consultancy</a>
						<ul class="dropdown">
							<li><a href="services2.php">Technology (Active)</a></li>
                            <li><a href="#">Main 1</a></li>
                            <li><a href="#">Main 2</a></li>
                            <li><a href="#">Main 3</a></li>
                            <li><a href="#">Main 5</a></li>
                        </ul>
					</li>
                    <li><a href="about.php">About CEES</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				<!-- <button class="nav-close nav-aside-close"><span></span></button> -->
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
	<!-- jQuery Plugins -->
	<script src="assets/navbar/jquery.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="assets/navbar/jquery.stellar.min.js"></script>
    <script src="assets/navbar/main.js"></script>

    