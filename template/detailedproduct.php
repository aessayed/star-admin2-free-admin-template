
<?php

@include 'config.php';

if (isset($_GET['id'])) {
    $randomProductID = $_GET['id'];
  // Use the $productID as needed
} else {
  echo "No ID specified";
}

$query = "SELECT * FROM product WHERE id = $randomProductID";
$result = $con->query($query);

if ($result->num_rows > 0) {
  $product = $result->fetch_assoc();
} else {
  echo "No product found";
}





?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="cssfront/detailedproduct.css">
    </head>
    <body>
        


   <div class="product">
  <div class="product-image">
    <img class="card-img-top" style="height:16rem" src="images/<?php echo $product['image']; ?>" alt="product_image">
  </div>
  <div class="product-details">
    <h3><?php echo $product['name']; ?></h3>
    <p><?php echo $product['description']; ?></p>
    <p>Price: $<?php echo $product['price']; ?></p>
    <form action="cart.php" method="POST">
      <input type="hidden" value="images/<?php echo $product['image']; ?>" name="image">
      <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
      <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
      <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
      <input type="number" name="quantity" value="1" min="1">
      <button type="submit" name="addfromdetailed">Add to Cart</button>
    </form>
  </div>
</div>


    </body>
</html>
