<?php
    include "includes/db.php";
    $id = $_REQUEST['id'];
    $con    = connect();
    $query  = "delete from posts where id = ?";
    $stmt   = $con->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    header("Location: posts.php");
