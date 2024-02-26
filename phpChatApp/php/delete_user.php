<?php
include("config.php");

if(isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    
    // Perform deletion or any other necessary actions using $userId
    
    // Example deletion query:
    $deleteQuery = "DELETE FROM users WHERE user_id = '$userId'";
    if(mysqli_query($conn, $deleteQuery)) {
        echo "User deleted successfully.";
        header("users.php");
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "User ID not provided.";
}
?>
