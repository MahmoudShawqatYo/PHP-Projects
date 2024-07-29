<?php 

    include "includes/db.php";
    include "includes/header.php";

?>

<div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="title" placeholder="Post Title" required>
        <textarea name="content" placeholder="Post Content" required></textarea>
        <input type="text" name="author" placeholder="Author" required>
        <input type="submit" name="submit" value="Add Post">
    </form>
</div>

<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $author = $_POST['author'];
            $con    = connect();
            $query  = "insert into posts (title,content,author) values(?,?,?)";
            $stmt   = $con->prepare($query);
            $stmt->bind_param("sss", $title, $content, $author);
            $stmt->execute();
            header("Location: posts.php");
        }