<?php

include 'config.php';
$delete_query = mysqli_query($con, "DELETE * FROM cart");

if ($delete_query) {
    // Deletion successful
    echo "All items have been removed from the cart.";
} else {
    // Deletion failed
    echo "Failed to remove items from the cart.";
}

?>