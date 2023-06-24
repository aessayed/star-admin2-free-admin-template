<?php
include '../../config.php';
$id = $_GET['id'];
$query = "DELETE FROM product WHERE id = $id";
mysqli_query($con,$query);
header('location: view_product.php')
?>