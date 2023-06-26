<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <?php
  include "../../config.php";
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
            <img src="../../images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../images/logo-mini.svg" alt="logo" />
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
              <img class="img-xs rounded-circle" src="../../images/<?php $image=$_SESSION["image"]; echo $image;?>" alt="Profile image"> </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
     
      <div class="contents " style="margin-top:6rem">
      <div class="row col-12">
    <?php
        include "../../config.php";
        $query = "SELECT * from user";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
          
           echo" <table class='table'>
           <thead>
             <tr>
               <th scope='col'>Image</th>
               <th scope='col'>Name</th>
               <th scope='col'>Email</th>
               <th scope='col'>Role</th>
               <th scope='col'>Gender</th>
               <th scope='col'>Delete</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td><img class=''  src='../../images/$row[image]' alt='product_image'></td>
               <td><h5 class='' style='white-space: nowrap;width: 7rem;padding-top:1rem; overflow: auto;text-overflow: inherit;height:4rem'>$row[name]</h5></td>
               <td><p class=''>$row[email]</p></td>
               <td><p class=''>$row[role]</p></td>
               <td><p class=''>$row[gender]</p></td>
               <td><a href='unaccept.php? id=$row[id]'name ='is_accepted'><i class='icon-md fa-solid fa-minus'></i></a></td>";
               
             echo"</tr>
             
           </tbody>
         </table>";
        }
    ?>
    <a href='view_prod_admin.php' class='btn btn-primary'>View Products</a>
    <a href='basic_elements.php' style="width:10rem;margin-left:42.25%;margin-top:0.2rem" class='btn btn-primary'>Add products</a>
   <?php 
    if($super_admin==2){
      echo"
      <a href='accept_users.php' style='width:10rem;margin-left:0.1rem;margin-top:0.2rem' class='btn btn-primary'>Accept users</a>
      ";
    }
   ?>
        </div>
        <div style="padding-bottom: 2rem;">
          <a href='../../indexfront.php' style='width:10rem;margin-left:41%;margin-top:0.2rem;background-color: #eb455f;' class='btn'>Return to home</a>
        </div>
</div></div>

</body>