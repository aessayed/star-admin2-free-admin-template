<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){


   $product_name = $_POST['name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($con, "SELECT * FROM cart WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($con, "INSERT INTO cart(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="cssfront/style.css" />
    <link rel="stylesheet" href="cssfront/cartstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"></head>
<body>


<div class="contents " >
      <div class="row col-12">
      <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($con, "SELECT * FROM product LIMIT 4");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
         <img class='card-img-top' style='height:16rem'  src='images/<?php echo $fetch_product['image']; ?>' alt='product_image'>
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
</div></div>

  <!--lux products -->

  <div class="small-container-lux">
    <div class="row">
      <div class="col-8 m-0 p-0 inner">
        <img
          src="img/lux1.png"
          alt=""
          style="width: 680px; height: 325px; margin-left: 10px"
        />
      </div>
      <div class="col-4 inner">
        <img
          src="img/lux2.png"
          alt=""
          style="width: 382px; height: 325px; margin-left: -72px"
        />
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-4 m-0 p-0 inner">
        <img
          src="img/lux4.png"
          alt=""
          style="width: 360px; height: 267px; margin-left: 10px"
        />
      </div>
      <div class="col-8 inner">
        <img
          src="img/lux3.png"
          alt=""
          style="width: 659px; height: 267px; margin-left: 2px"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </div>
    </div>
  </div>


  <script src="js/scriptfront.js"></script>

  <!--  buy product -->



<div class="gallery mt-xl-5">



    <div class="content">
      <img class="imgbuy" src="img/F1.png" alt="">
      <h3>watches</h3>
      <p class="imgbuyp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
      <h6>$100.00</h6>
      <form method="POST" action="processrating.php">
  <div class="star-rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5"></label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4"></label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3"></label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2"></label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1"></label>
  </div>
  <input type="submit" value="Rate">
</form>
    </div>

    <div class="content">
      <img class="imgbuy" src="img/F2.png" alt="">
      <h3>watches</h3>
      <p class="imgbuyp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
      <h6>$100.00</h6>
      <ul class="listul">
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star "></i></li>
      </ul>
      <button class="buy-2" >Buy Now</button>
    </div>

    <div  class="content">
      <img class="imgbuy" src="img/F3e.png" alt="">
      <h3>watches</h3>
      <p class="imgbuyp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
      <h6>$100.00</h6>
      <ul class="listul">
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
      </ul>
      <button class="buy-3" >Buy Now</button>
    </div>

    <div class="content">
      <img  class="imgbuy" src="img/F4e.png" alt="">
      <h3>watches</h3>
      <p class="imgbuyp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
      <h6>$100.00</h6>
      <ul class="listul">
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star checked"></i></li>
        <li><i class="fa fa-star "></i></li>
        <li><i class="fa fa-star "></i></li>
      </ul>
      <button class="buy-4" >Buy Now</button>
    </div>




  </div>





  <!--testimonial -->

  <div class="small-container">
    <h4 class="mt-xl-5 text-center color" id="explore">Testimonial</h4>
    <p class="text-center mb-3 fs-6 color">
      Read what others <br />
      said
    </p>
    <div class="row">
      <div class="col-sm-3 testimo">
        <div
          class="card shadow text-center"
          style="width: 14rem; padding: 56px 2px"
        >
          
          <p class="card-text text-black fs-4" style="font-family: Hahmlet">
            <b> it’s great to buy a watch and i prefer the rolex part </b>
          </p>
          <div class="test">
            <div class="d-flex " style="justify-content: center; color: #cd853f;">
              <i class="bi bi-star-fill m-1"></i>
              <i class="bi bi-star-fill m-1"></i>          
              <i class="bi bi-star-fill m-1"></i>
              <i class="bi bi-star-fill m-1"></i>
              <i class="bi bi-star-fill m-1"></i>
          </div>
        </div>
          <p
            class="text-center"
            style="
              font-family: Hahmlet;
              font-weight: 400;
              font-size: 24px;
              line-height: 35px;
            "
          >
            Angilna Jolie
          </p>
          <img
            class="rounded-circle"
            style="width: 78px; height: 78px; margin-left: 4.5rem"
            src="img/testmo1.png"
            alt="Card image cap"
          />
        </div>
      </div>
      <div class="col-sm-3 testimo">
        <div
          class="card shadow text-center"
          style="width: 14rem; padding: 56px 2px"
        >
          <p class="card-text text-black fs-4" style="font-family: Hahmlet">
            <b> it’s great to buy a watch and i prefer the rolex part </b>
          </p>
          <div class="test">
          <div class="d-flex " style="justify-content: center; color: #cd853f;">
            <i class="bi bi-star-fill m-1"></i>
            <i class="bi bi-star-fill m-1"></i>          
            <i class="bi bi-star-fill m-1"></i>
            <i class="bi bi-star-fill m-1"></i>
            <i class="bi bi-star-fill m-1"></i>
        </div>
      </div>
          <p
            class="text-center"
            style="
              font-family: Hahmlet;
              font-weight: 400;
              font-size: 24px;
              line-height: 35px;
            "
          >
            Tom cruise
          </p>
          
          <img
            class="rounded-circle"
            style="width: 78px; height: 78px; margin-left: 4.5rem"
            src="img/testmo2.png"
            alt="Card image cap"
          />
        </div>
      </div>
      <div class="col-sm-3 testimo">
        <div
          class="card shadow text-center"
          style="width: 14rem; padding: 56px 2px"
        >
          <div class="card border-0">
            <p class="card-text text-black fs-4" style="font-family: Hahmlet">
              <b> it’s great to buy a watch and i prefer the rolex part </b>
            </p>
            <p
              class="text-center"
              style="
                font-family: Hahmlet;
                font-weight: 400;
                font-size: 24px;
                line-height: 35px;
              "
            >
            <div class="test">
              <div class="d-flex " style="justify-content: center; color: #cd853f;">
                <i class="bi bi-star-fill m-1"></i>
                <i class="bi bi-star-fill m-1"></i>          
                <i class="bi bi-star-fill m-1"></i>
                <i class="bi bi-star-fill m-1"></i>
                <i class="bi bi-star-fill m-1"></i>
            </div>
          </div>
              Brad Pitt
            </p>
            <img
              class="rounded-circle"
              style="width: 78px; height: 78px; margin-left: 4.5rem"
              src="img/testmo3.png"
              alt="Card image cap"
            />
          </div>
        </div>
      </div>
    </div>


      <!-------brands----->
    <div class="small-container">
      <div class="brands mt-xl-5">
        <div
          class="container-fluid !important"
          style="background-color: #bad7e9"
        >
          <div class="row">
            <div class="col-sm-3 hovercolor">
              <img src="img/logo1.png" />
            </div>
            <div class="col-sm-3 hovercolor">
              <img src="img/logo2.png" />
            </div>
            <div class="col-sm-3 mb-0 hovercolor">
              <img src="img/logo3.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>
</body>
</html>