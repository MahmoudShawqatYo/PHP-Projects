<?php 

    include "includes/db.php";
    include "includes/header.php";
    $id = $_REQUEST['id'];
    $con    = connect();
    $query  = "select * from posts where id=?";
    $stmt   = $con->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt -> get_result();
    $result = $result -> fetch_assoc();
    $title = $result["title"];
    $content = $result["content"];
    $author = $result["author"];
?>

<div class="container">
    <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
        <input type="text" name="title" value="<?= $title ?>"  placeholder="Post Title" required>
        <textarea name="content"  placeholder="Post Content" required><?= $content ?></textarea>
        <input type="text" name="author" value="<?= $author ?>" placeholder="Author" required>
        <input type="submit" name="submit"  value="Add Post">
    </form>
</div>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $con    = connect();
        $query  = "update posts set title = ? , content = ? , author = ? where id = ?";
        $stmt   = $con->prepare($query);
        $stmt->bind_param("ssss", $title, $content, $author,$id);
        $stmt->execute();
        header("Location: posts.php");
    }
?>