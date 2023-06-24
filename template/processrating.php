<?php
// Establish database connection
include('config.php');
if (!$con) {
    die('Database connection error.');
}

// Get the selected rating
$rating = $_POST['ratings'];

// Insert or update the rating in the table
$sql = "INSERT INTO ratings (rating, totalrating, totalscore) VALUES ($rating, 1, $rating)
        ON DUPLICATE KEY UPDATE totalrating = totalrating + 1, totalscore = totalscore + $rating";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "Thank you for rating: $rating stars";
} else {
    echo "Error storing the rating.";
}

mysqli_close($con);
?>