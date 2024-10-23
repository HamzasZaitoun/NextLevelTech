<?php
require 'connect.php';  

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM db WHERE user_id = ?";
    $stmt = mysqli_stmt_init($connect);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $user_id);  
        if (mysqli_stmt_execute($stmt)) {
            header("Location: detalis.php");  
            exit();
        } else {
            echo "An error occurred while trying to delete the user.";
        }
    } else {
        echo "Failed to prepare the delete query.";
    }
} else {
    echo "The user ID was not sent.";
}
?>
