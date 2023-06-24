<?php
session_start();
include "../../config.php";
  $id = $_POST['postId'];
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $isPublished = isset($_POST['is_published']) ? 1 : 0;
  $isPremium = isset($_POST['is_premium']) ? 1 : 0; 
  $compid = $_POST['dropdown'];
  $file_name= $_FILES['image']['name'];
  $file_size= $_FILES['image']['size'];
  $file_tmp= $_FILES['image']['tmp_name'];

$extensions=array("jpg","jpeg","png","pdf");

$ext=explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($ext));



if(in_array($file_ext,$extensions)=== false){
    $errors= "Extensions not allowed, please choose a JPEG or PNG file.<br>";
}



if($file_size>2097152){
    $errors =$errors . " file size sould be exactly 2MB";
}


if(!isset($errors)){
    
    move_uploaded_file($file_tmp, "../../images/".$file_name); 
    $query = "UPDATE product SET name='$name', image='$file_name', description='$desc', price=$price, quantity=$quantity, is_published=$isPublished, is_premium=$isPremium, comp_id=$compid WHERE id=$id";
    $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    

    if ($result) {
      echo "Data updated with image successfully!";
      
    } else {
      echo "Error updating the data in the database.";
    }
  } else {
    echo "Error updating the image.";
  }


  header("Location: view_product.php");
?>
