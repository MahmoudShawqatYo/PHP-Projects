<?php

    session_start();

    // Get the item ID from the URL parameter
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;

    if (isset($itemId) && array_key_exists($itemId, $_SESSION['todos'])) {
        // Remove the item from the session data
        unset($_SESSION['todos'][$itemId]);
        
        // Redirect back to the main to-do list page (todolist.php) after successful deletion
        header("Location: todolist.php");
        exit();
    } 
    else {
        // Display error message if item ID is invalid
        echo "Invalid item ID!";
    }

?>
