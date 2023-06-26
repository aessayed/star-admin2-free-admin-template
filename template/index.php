<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <?php
  include "config.php";
  session_start();
  
  if(isset($_SESSION['id'])){
  $uid =$_SESSION['id'];
  $qry = "SELECT * FROM user WHERE id = '$uid'";
  $result = mysqli_query($con,$qry);
  $row = mysqli_fetch_assoc($result);
  $userid = $row['id'];
  $super_admin= $row['role'];
  $uname = $row['name'];
  }
?>

</head>
<body>
  
    
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">

        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="./images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="./images/logo-mini.svg" alt="logo" />
          </a>
        </div> 
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top" style="justify-content:space-between;"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold"><?php echo"$uname";?></span></h1>
            <?php
            if($super_admin == 1){
            echo"<h3 class='welcome-sub-text'>You are a admin-User</h3>";
          }
          if($super_admin == 2){
            echo"<h3 class='welcome-sub-text'>You are a Super-Admin</h3>";
          }
            ?>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="  ./images/<?php $image=$_SESSION["image"]; echo $image;?>" alt="Profile image"> </a>
          </li>
        </ul>
       
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      
      <!-- partial -->
      <div class="main-panel" style="width: 100%;">
        <div class="content-wrapper" style="background-color:lightgray;width: 100%;">
          <div class="row">
            <div class="col-sm-12">
            <?php include 'dashboard.php'; ?>
            </div>
            <a href='./pages/forms/basic_elements.php' class='btn mt-3 btn-primary' style="width: 10rem;margin-left: 30.2rem;">Add products</a>
    
   <?php 
    if($super_admin==2){
      echo"
      <a href='./pages/forms/view_users.php' style='width:10rem;margin-left:35%;margin-top:0.2rem' class='btn btn-primary'>View all users</a>
      <a href='./pages/forms/accept_users.php' style='width:10rem;margin-left:0.1rem;margin-top:0.2rem' class='btn btn-primary'>Accept users</a>
      ";
    }
   ?>
   <div style="padding-bottom: 2rem;">
          <a href='./indexfront.php' style='width:10rem;margin-left:41%;margin-top:0.2rem;background-color: #eb455f;' class='btn'>Return to home</a>
        </div>
        </div></div></div>
       
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

