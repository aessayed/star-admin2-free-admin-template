<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $companyname = $_POST['companyname'];
    $sql = "insert into company (name) values ('$companyname')";
    mysqli_query($con, $sql);
    echo "Hello, $companyname!";
    header('location: index.php');
}
?>