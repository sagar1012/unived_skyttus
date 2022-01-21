  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo $domain; ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $domain; ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
       -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <?php
              $activeClass = ''; 
              if(basename($_SERVER['PHP_SELF']) == 'dashboard.php') {
                $activeClass = "active";
              }
            ?>
            <a href="dashboard.php" class="nav-link <?php echo $activeClass; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <?php
              $activeClass = ''; 
              if(basename($_SERVER['PHP_SELF']) == 'admin-user-list.php' || basename($_SERVER['PHP_SELF']) == 'edit-admin-user.php' || basename($_SERVER['PHP_SELF']) == 'add-admin-user.php' ) {
                $activeClass = "active";
              }
            ?>
            <a href="admin-user-list.php" class="nav-link <?php echo $activeClass; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Admin Users
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          <li class="nav-item">
            <?php
              $activeClass = ''; 
              if(basename($_SERVER['PHP_SELF']) == 'user-list.php' || basename($_SERVER['PHP_SELF']) == 'edit-user.php' || basename($_SERVER['PHP_SELF']) == 'add-user.php'  ) {
                $activeClass = "active";
              }
            ?>
            <a href="user-list.php" class="nav-link <?php echo $activeClass; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
 

          <li class="nav-item">
            <?php
              $activeClass = ''; 
              if(basename($_SERVER['PHP_SELF']) == 'product-category-list.php' || basename($_SERVER['PHP_SELF']) == 'add-product-category.php' || basename($_SERVER['PHP_SELF']) == 'edit-product-category.php' ) {
                $activeClass = "active";
              }
            ?>
            <a href="product-category-list.php" class="nav-link <?php echo $activeClass; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Product categories
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
 

          <li class="nav-item">
            <?php
              $activeClass = ''; 
              if(basename($_SERVER['PHP_SELF']) == 'product-list.php' || basename($_SERVER['PHP_SELF']) == 'add-product.php' || basename($_SERVER['PHP_SELF']) == 'edit-product.php' ) {
                $activeClass = "active";
              }
            ?>
            <a href="product-list.php" class="nav-link <?php echo $activeClass; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Products
               <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
 





               <?php
                  $activeMainClass = ''; 
                  if(basename($_SERVER['PHP_SELF']) == 'change-password.php' || basename($_SERVER['PHP_SELF']) == 'update-profile.php') {
                    $activeMainClass = "active";
                  }
                ?> 

                <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link <?php echo $activeMainClass; ?> ">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Setting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">
                                
                          <?php
                                $activeClass = ''; 
                                if(basename($_SERVER['PHP_SELF']) == 'change-password.php') {
                                  $activeClass = "active";
                                }
                            ?>                                

                               <li class="nav-item">
                                
                                  <a href="change-password.php" class="nav-link <?php echo $activeClass; ?>">
                                    <!-- <i class="nav-icon fa-sign-out"></i> -->
                                     <i class="far fa-circle nav-icon"></i>
                                    <p>
                                      Change Password
                                    </p>
                                  </a>
                                </li>


                          <?php
                                $activeClass = ''; 
                                if(basename($_SERVER['PHP_SELF']) == 'update-profile.php') {
                                  $activeClass = "active";
                                }
                            ?>  

                              <li class="nav-item">
                                
                                  <a href="update-profile.php" class="nav-link <?php echo $activeClass; ?>">
                                    <!-- <i class="nav-icon fa-sign-out"></i> -->
                                     <i class="far fa-circle nav-icon"></i>
                                    <p>
                                      Update Profile
                                    </p>
                                  </a>
                                </li>                                                            
                                
                                
                            </ul>
                        </li> 

 




         <li class="nav-item">

            <a href="logout.php" class="nav-link">
              <!-- <i class="nav-icon fa-sign-out"></i> -->
               <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                Logout
              </p>
            </a>
          </li>   
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>