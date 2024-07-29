<?php

    $title          = "Welcome to My Blog";
    $description    = "This is a simple blog built with PHP Native.";
    $author         = "Mahmoud_Shawqat";
    $date           = date('Y-m-d');

    function getData($query,$single = false){
        $con    = connect();
        $stmt   = $con -> prepare($query);
        $stmt   -> execute();
        $result = $stmt->get_result();
        if ($single){
            return $result->fetch_assoc();
        }
        
        else{
            return $result->fetch_all();
        }
    }


?>
