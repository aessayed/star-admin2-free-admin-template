<?php
session_start();
include "../../config.php";
  $id = $_GET['id'];

if(!isset($errors)){
    $query = "UPDATE product SET is_published=0   WHERE id=$id";
    $result=  mysqli_query($con, $query) or die(mysqli_error($con));
    

    if ($result) {
      echo "Data updated successfully!";
      
    } else {
      echo "Error updating the data in the database.";
    }
  } 


  header("Location: view_prod_admin.php");
?>
