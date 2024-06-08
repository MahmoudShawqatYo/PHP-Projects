<?php
session_start();

// Check if the todos array exists in the session data
if (isset($_SESSION['todos'])) {
    $todos = $_SESSION['todos'];
} else {
    // If not, initialize an empty array
    $todos = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Welcome to Todo App <Br> Add an item</h2>
    <form method="post" class="form-group">
        <input type="text" name="newTodo" id="newTodo" class="form-control mb-2">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
<?php
// Check if the form was submitted
if (isset($_POST['newTodo'])) {
    // Get the new to-do item from the form data
    $newTodo = $_POST['newTodo'];

    // Add the new to-do item to the $todos array
    $todos[] = $newTodo;

    // Update the session data with the modified todos array
    $_SESSION['todos'] = $todos;
}
?>
    <h2>Your To-Do List</h2>
    <ul class="list-group">
        <?php foreach ($todos as $key => $todo) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $todo; ?>
                <span>
                    <a href="edit.php?id=<?php echo $key; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?php echo $key; ?>" class="btn btn-danger btn-sm">Delete</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
