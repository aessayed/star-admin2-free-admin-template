<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){


   $product_name = $_POST['name'];
   $product_price = $_POST['price'];
   $product_image = $_POST['image'];
   $product_quantity = 1;
   $prodid = $_POST['id'];
   $select_cart = mysqli_query($con, "SELECT * FROM cart WHERE name = '$product_name'");
   
   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($con, "INSERT INTO cart(name, prod_id, price, image, quantity) VALUES('$product_name', $prodid, '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<?php
$itemsPerPage = 6;
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

$startFrom = ($currentpage - 1) * $itemsPerPage;

$sql = "SELECT * FROM product LIMIT $startFrom, $itemsPerPage";
$result = $con->query($sql);

$items = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
}

$sqlCount = "SELECT COUNT(*) AS total FROM product";
$countResult = $con->query($sqlCount);
$countRow = $countResult->fetch_assoc();
$totalItems = $countRow['total'];
$totalPages = ceil($totalItems / $itemsPerPage);
?>


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
    <link rel="stylesheet" href="cssfront/cartstyle.css">    
    <title>new</title>
</head>
<body>
   
<?php include 'header.php'; ?>




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
      
      $select_products = mysqli_query($con, "SELECT * FROM product WHERE is_published = 1 LIMIT $startFrom, $itemsPerPage ");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
         
      ?>

      <form action="" method="post">
         <div class="box">
         <img class='card-img-top' style='height:16rem'  src='images/<?php echo $fetch_product['image']; ?>' alt='product_image'>
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?></div>
            <input type="hidden" name="id" value="<?php echo $fetch_product['id']; ?>">

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



<div class="pagination">
  <?php for ($i = 1; $i <= $totalPages; $i++): ?>
    <a href="?page=<?php echo $i; ?>" <?php if ($currentpage == $i) echo 'class="active"'; ?>><?php echo $i; ?></a>
  <?php endfor; ?>
</div>





</div>
</div></div>


</body>
</html>