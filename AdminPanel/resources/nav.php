<?php

    function showNavBar(){
        //<!-- Sidebar -->
       echo '<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
              
            </div>
            <div class="sidebar-brand-text mx-3">Admin Panel</div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
    
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
            <i class="fa fa-home" style="font-size:24px"></i>
              <span>Home</span></a>
          </li>
    
          <!-- Divider Create Content -->
          <hr class="sidebar-divider">
          <div class="sidebar-heading">
            Pages   
          </div>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewPages" aria-expanded="true" aria-controls="collapseNewPages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Create Content</span>
            </a>
            <div id="collapseNewPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">         
                <a class="collapse-item" href="addNewProgram.php">Add new program</a>
                <a class="collapse-item" href="addNewCourse.php">Add new course</a>
                <div class="collapse-divider"></div>
              </div>
            </div>
          </li>
          <!-- End of Create Content -->    
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCurrentPages" aria-expanded="true" aria-controls="collapseCurrentPages">
              <i class="fas fa-fw fa-folder"></i>         
              <span>Edit Content</span>
            </a>
            <div id="collapseCurrentPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="EditProgram.php">Edit Program</a>
                <a class="collapse-item" href="EditCourses.php">Edit Course</a>
                <div class="collapse-divider"></div>
              </div>
            </div>
          </li>
    
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Events
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
          <a class="nav-link" href="addEvents.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Events</span></a>
          </li>
    
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
          <a class="nav-link" href="updateEvents.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Update Events</span></a>
        </li>

        <!-- Divider -->
          <hr class="sidebar-divider">
          <div class="sidebar-heading">
            Team Member   
          </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="AboutUs.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add New Member</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <div class="sidebar-heading">
            Articles   
          </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="blog/blog.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add New Article</span></a>
          </li>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="blog/viewArticles.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Articles</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <div class="sidebar-heading">
            Partners   
          </div>
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link" href="clients.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add / Update Partners</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
          
          <!-- Nav Item - Logout -->
          <li class="nav-item">
            <a class="nav-link" href="resources/logout.php?logout"">
              <i class="fas fa-fw fa-table"></i>
              <span>Logout</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
    
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
    
        </ul>';
       // <!-- End of Sidebar -->
    }


?>


    
          <!-- Divider
           <hr class="sidebar-divider">
    
          <div class="sidebar-heading">
            Addons
          </div>
    
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.php">Login</a>
                <a class="collapse-item" href="register.php">Register</a>
                <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.php">404 Page</a>
                <a class="collapse-item" href="blank.php">Blank Page</a>
              </div>
            </div>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="charts.php">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="tables.php">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
          </li>

    
    <hr class="sidebar-divider d-none d-md-block">
    
    <li class="nav-item">
      <a class="nav-link" href="resources/logout.php?logout"">
        <i class="fas fa-fw fa-table"></i>
        <span>Logout</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>';
 // End of Sidebar -->
<?php

    function showNavBarToModel(){
      //<!-- Sidebar -->
      echo '<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon rotate-n-15">    
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
        <i class="fa fa-home" style="font-size:24px"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider Create Content -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Pages   
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewPages" aria-expanded="true" aria-controls="collapseNewPages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Create Content</span>
        </a>
        <div id="collapseNewPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">         
            <a class="collapse-item" href="../addNewProgram.php">Add new program</a>
            <a class="collapse-item" href="../addNewCourse.php">Add new course</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- End of Create Content -->    
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCurrentPages" aria-expanded="true" aria-controls="collapseCurrentPages">
          <i class="fas fa-fw fa-folder"></i>         
          <span>Edit Content</span>
        </a>
        <div id="collapseCurrentPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../EditProgram.php">Edit Program</a>
            <a class="collapse-item" href="../EditCourses.php">Edit Course</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Events
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="../addEvents.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Add Events</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="../updateEvents.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Update Events</span></a>
    </li>

    <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Team Member   
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="../AboutUs.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Add New Member</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Articles   
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="blog.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Add New Article</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="viewArticles.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>View Articles</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Partners   
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="../clients.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Add / Update Partners</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="../resources/logout.php?logout"">
          <i class="fas fa-fw fa-table"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>';
   // <!-- End of Sidebar -->
  }

?>