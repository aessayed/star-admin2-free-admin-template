<!DOCTYPE html>
<html lang="en">
<head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfront/style.css">
    <link rel="stylesheet" href="cssfront/about.css">
    <title>about us</title>
</head>
<body>
   
<?php include 'header.php'; ?>




        
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active c-item" data-bs-interval="10000">
                <img src="img/about.png " class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block "  style="color: #eb455f; margin-bottom: 7rem; ">
                    <div class="container p-5 my-5 bg-dark text-white rounded-5 opacity-5">
                  <h2 style="font-size:50px; font-family: Inika;"><b>We Offer The Watch</b></h2>
                </div>
                </div>
              </div>
              <div class="carousel-item c-item" data-bs-interval="2000">
                <img src="img/about1.png" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block "  style="color: #cd853f; margin-bottom: 7rem; ">
                    <div class="container p-5 my-5 bg-dark text-white rounded-5">
                  <h2 style="font-size:50px; font-family: Inika;"> <b> Worldwide</b></h2>
                  </div>
                </div>
              </div>
              <div class="carousel-item c-item">
                <img src="img/about2.png" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block  " style="color: #2b3467; margin-bottom: 7rem; ">
                    <div class="container p-5 my-5 bg-dark text-white rounded-5">
                  <h1 style="font-size:50px; font-family: Inika;"> <b>With Best Quality</b></h1>
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" style="color: white !important;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon " style="color: white;" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>     
          
          <!--footer-->

      <footer
      class="text-white text-center text-md-start "
      style="background-color: #2b3467; "
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Useful links
          </h5>

            <a href="#logo"><img src="img/logo.png" alt=""></a>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Social media</h5>

            <ul class="list-unstyled mb-0" >
              <li>
                <a href="https://www.Facebook.com/" class="text-white ">Facebook</a>
              </li>
              <li>
                <a href="https://www.instagram.com/" class="text-white">Instagram</a>
              </li>
              <li>
                <a href="https://www.linkedin.com/" class="text-white">Linkend</a>
              </li>
            </ul>
          </div>
         
          

      <div
        class="text-center p-3 "
        style="background-color: rgba(0, 0, 0, 0.2)"
      >
        © 2023 Copyright:
        <a
          class="text-white"
          href="https://www.linkedin.com/in/ahmad-el-sayed-ahmad-bb5a6922a/"
        >
          Lookswatches</a
        >
      </div>
    </footer> 
</body>
</html>