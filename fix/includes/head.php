<?php 
include_once '../libraries/session.php'; 
$admin = session_get('user_admin');
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CW</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Centre World </b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="index.html#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">		  
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/admin.png" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="images/admin.png" class="rounded float-left" alt="User Image">
				
                <p>
                 Big Boss
                  <small>Member since April . 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col text-center">
                    <a href="index.php?page=users">Tài khoản</a>
                  </div>
                  <div class="col text-center">
                    <a href="index.php?page=kt">Kiot</a>
                  </div>
                  <div class="col text-center">
                    <a href="index.php?page=rq">Tuyển dụng</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?page=users" class="btn btn-block btn-primary">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?page=logout" class="btn btn-block btn-danger">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>