<?php
session_start();

// Get the item ID from the URL parameter
$itemId = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($itemId) && array_key_exists($itemId, $_SESSION['todos'])) {
    if (isset($_POST['editedTodo'])) {
        $_SESSION['todos'][$itemId] = $_POST['editedTodo'];
        header("Location: todolist.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit To-Do Item</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit To-Do Item</h2>
    <form method="post" class="form-group">
        <label for="editedTodo">Edit To-Do:</label>
        <input type="text" name="editedTodo" id="editedTodo" value="<?php echo $_SESSION['todos'][$itemId]; ?>" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
<?php
} else {
    // Display error message if item ID is invalid
    echo "<div class='alert alert-danger'>Invalid item ID!</div>";
}
?>
</body>
</html>
