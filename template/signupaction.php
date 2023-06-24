<?php 
include('config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password =$_POST['password'];

    $file_name=$_FILES['image']['name'];


    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    
 
    
    
    
    if($file_size>2097152){
        $errors =$errors . " file size sould be exactly 2MB";
    }
    
    
    if(!isset($errors)){
        move_uploaded_file($file_tmp, "images/".$file_name);
    
        $query = "INSERT INTO user(name, email, password, role ,image, gender, is_premium) VALUES ('$name', '$email', '$password',2, '$file_name','$gender', 0)";
        $result=  mysqli_query($con, $query) or die(mysqli_error($con)); 
   
        if ($result) {
            echo "Data submitted with image successfully!";
            
          } else {
            echo "Error storing the data in the database.";
          }
        }else {
          echo "Error uploading the image.";}
          header('location: login.php');
        
?>



