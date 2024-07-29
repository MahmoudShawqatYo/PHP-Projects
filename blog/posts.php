<?php 
    include "includes/db.php";
    include "includes/data.php";

    $posts  = getData("SELECT * FROM posts");
    function displayPost($post) {
        echo "
                    <div class='post'>
                        <h2>{$post[1]}</h2>
                        <p>{$post[2]}</p>
                        <p>Author: {$post[3]}</p>
                        <p>Date: {$post[4]}</p>
                        <div class='choices'>
                            <ul>
                                <li><a href='delete.php?id=$post[0]'>Delete</a></li>
                                <li><a href='edit.php?id=$post[0]'>Edit</a></li>
                            </ul>
                        </div>
                    </div>
            "; 
    }
    include "includes/header.php";
?>
<div class="container">
    <a href="create.php">Add Post</a>
    <div id="posts">
        <?php foreach ($posts as $post) : ?>
            <?php displayPost($post); ?>
        <?php endforeach; ?>
    </div>
</div>