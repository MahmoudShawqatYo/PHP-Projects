<?php
    include "includes/data.php";
    include "includes/header.php";
?>

<div class="container">
    <div class='post'>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <p>Author: <?php echo $author; ?></p>
        <p>Date: <?php echo $date; ?></p>
    </div>
</div>