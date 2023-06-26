<?php 
include('config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password =$_POST['password'];
    $role = $_POST['role'];
    $file_name=$_FILES['image']['name'];
    if($role=='user'){
      $r = 0;
    }
    if($role=='Admin user'){
      $r = 1;
    }
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    
 
    
    
    
    if($file_size>2097152){
        $errors =$errors . " file size sould be exactly 2MB";
    }
    
    
    if(!isset($errors)){
        move_uploaded_file($file_tmp, "images/".$file_name);
    
        $query = "INSERT INTO user(name, email, password, role, image, gender) VALUES ('$name', '$email', '$password',$r,'$file_name','$gender')";
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



