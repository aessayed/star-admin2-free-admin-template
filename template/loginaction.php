<?php
include('config.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password match
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Login successful, store user session or redirect to dashboard
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['image'] = $row['image'];

     header('Location: index.php');
        exit();
    } else {
        // Login failed, display error message
        echo "Invalid email or password.";
        header('Location: login.php');
    }
}
?>