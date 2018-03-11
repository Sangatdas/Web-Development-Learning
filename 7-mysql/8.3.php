<?php

    $link = mysqli_connect("localhost","cl22-admin-tuu","qwertyuiop","cl22-admin-tuu");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

    $query = "SELECT * FROM users";

    if (mysqli_query($link, $query)) {
        
        echo "Database accessed";
        
    }


?>