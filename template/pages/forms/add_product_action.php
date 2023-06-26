

<?php

include "../../config.php";
session_start();
    $lid = $_SESSION['id'];

  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $isPublished = isset($_POST['is_published']) ? 1 : 0;
  $compid = $_POST['dropdown'];
  $user_id = $lid;
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
    $query = "INSERT INTO product (name, image, description, price, quantity, is_published, user_id, comp_id) VALUES ('$name', '$file_name', '$desc', $price, $quantity, $isPublished, $user_id,  $compid)";
  $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    

    if ($result) {
      echo "Data submitted with image successfully!";
      
    } else {
      echo "Error storing the data in the database.";
    }
  } else {
    echo "Error uploading the image.";
  }


  header("Location: view_prod_admin.php");
?>
