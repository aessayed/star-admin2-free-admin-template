<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="contactus.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="cssfront/style.css" />
    <link rel="stylesheet" href="cssfront/about.css" />
    <title>about us</title>
  </head>
  <body>
  <?php include 'header.php'; ?>

    <hr
      class="h-50"
      style="color: #eb455f; opacity: 1.5 !important; margin: 0 !important"
    />
    <div class="container-fluid">
      <div class="row">
        <div
          class="col-sm-4 text-center"
          style="height: 104vh; background-color: #ffc8d0 ; margin-bottom: 10rem;"
        >
          <h1 style="margin-top: 3rem; font-family: Inika; color: #2b3467">
            <b>Get in touch</b>
          </h1>
          <div
            class="d-flex justify-content-center"
            style="font-size: 28px; margin-top: 3rem;  color: #2b3467 !important;"
          >
           <a href="https://www.instagram.com/"> <div class="icon"><i class="bi bi-instagram"></i></div>
            <div class="comp"><p>lookswatches</p></div></a>
        </div>
        <div
        class="d-flex justify-content-center"
        style="font-size: 28px; margin-top: 1.5rem ; color: #2b3467 !important;"
      >
      <a href="https://www.google.com/maps/place/Hamra,+Bayrut/@33.8962831,35.4808387,17z/data=!3m1!4b1!4m6!3m5!1s0x151f172a49fba87f:0xcc765813738ce242!8m2!3d33.8962787!4d35.4830274!16s%2Fm%2F02pjyff"> <div class="icon"> <i class="bi bi-geo-alt"></i></div>
        <div class="comp"><p>Beirut-Hamra</p></div></a>
      </div>
      <div
      class="d-flex justify-content-center"
      style="font-size: 28px; margin-top: 1.5rem ;  color: #2b3467 !important;"
    >
      <div class="icon"><i class="bi bi-telephone"></i></div>
      <div class="comp"><p>(961) 0555595</p></div>
    </div>
        </div>
        <div class="col-sm-8 bg-white text-center"style="height: 130vh; background-color: #ffc8d0" >
          <h1 style="margin-top: 3rem; font-family: Inika; color: #2b3467">
            <b>Contact Us</b></h1>
            <p id="lp">Please fill out the form below to discuss your project and we'll get back to you <br> in 24 hours.
            </p>
            <div style="display: flex;justify-content: space-evenly">
              <div>
            <form action="">
              <label for="fname"></label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
            <div>
              <label for="lname"></label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
            </div>

            <div style="display: flex;justify-content: space-evenly">
              <div>
            <form action="">
              <label for="fname"></label>
              <input type="text" id="fname" name="firstname" placeholder="Your Address..">
            </div>
            <div>
              <label for="lname"></label>
              <input type="email" id="lname" name="lastname" placeholder="Your Email..">
            </div>
            </div>
            
          
              <label for="subject"></label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    
              <div class="form-group row mt-1">
                <div class="col text-center">
                    <button type="submit" class="btn btn-danger" onclick="alert('Thank you for your massage we will text you as soon as possible')">Submit</button>
                </div>
            </div>

             
            </form>
          

        </div>
      </div>
    </div>
  </body>
</html>
