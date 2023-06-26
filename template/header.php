<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="cssfront/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>Looks Watches</title>
    <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<?php
  include'./config.php';
  session_start();
  
  if(isset($_SESSION['id'])){
  $uid =$_SESSION['id'];
  $qry = "SELECT * FROM user WHERE id = '$uid'";
  $result = mysqli_query($con,$qry);
  $row = mysqli_fetch_assoc($result);
  $acception = $row['acception'];
  $super_admin = $row['role'];
  }
?>
  </head>

<body>
  <div class="header">
    <div class="navbar">
      <div class="logo">
       <a href="indexfront.php"> <img id="logo" src="img/logo.png" width="175px" /></a>
      </div>
      <div class="nav2">
        <nav>
          <ul>
            
            <li><a href="new.php" id="links" style="font-size:2.8rem">Product</a></li>
            <li><a href="rolex.php" id="links">Rolex</a></li>
            <li><a href="about.php" id="links"> About</a></li>
            <li><a href="contactus.php" id="links">Contact Us</a></li>
            <li><a href="cart.php" id="links">Cart</a></li>
            <li><a href="login.php" id="links"><i class="fa-solid fa-user"></a></i></li>
            <?php
            if(isset($_SESSION['id'])){
              if($acception == 1){
              if( $super_admin == 2){
                echo "<li>
                <div id='mySidenav' class='sidenav'>
                    <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                    <a href='./pages/forms/basic_elements.php'>Add Products</a>
                    <a href='./pages/forms/view_prod_admin.php'>View Products</a>
                    <a href='./pages/forms/view_users.php'>View Users</a>
                    <a href='./pages/forms/accept_users.php'>Accept Users</a>
                </div>
                <span style='font-size:30px;cursor:pointer' onclick='openNav()'>&#9776;</span>               
            </li>";
        ;
              }else{
            
                echo "<li>
                <div id='mySidenav' class='sidenav'>
                    <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                    <a href='./pages/forms/basic_elements.php'>Add Products</a>
                    <a href='./pages/forms/view_prod_admin.php'>View Products</a>
                </div>
                <span style='font-size:30px;cursor:pointer' onclick='openNav()'>&#9776;</span>           
                </li>";
        
            }}}?>
            <?php
            if(isset($_SESSION['id'])){
            echo"<li>
            <li><a href='./logoutdashboard.php' id='links'><i class='fa-solid fa-right-from-bracket'></i></a></i></li>
            </li>";
            }?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>