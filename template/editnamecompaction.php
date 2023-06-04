<?php

include('config.php');

$companyId = $_POST['id'];
$newname = $_POST['companyname'];
echo $companyId;
echo $newname;

$sql = "UPDATE company SET name = '$newname' where  id ='$companyId'";
$result = mysqli_query($con, $sql);



if ($result) {
    header('Location: index.php'); 
    exit();
} else {
    echo "Error updating the company name"; 
}
?>