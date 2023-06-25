<?php
include '../../config.php';
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id = $id";
mysqli_query($con,$query);
header('location: view_users.php')
?>