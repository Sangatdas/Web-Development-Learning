<?php

    $link = mysqli_connect("localhost","cl22-admin-tuu","qwertyuiop","cl22-admin-tuu");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

     $query = "INSERT INTO `users` (`username`, `password`) VALUES('sangatdas5@gmail.com', 'ilovemydad')";

    //$query = "UPDATE `users` SET password = 'uedjUFH7^%' WHERE email = 'robpercival80@gmail.com' LIMIT 1";

    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        
        echo "Your email is ".$row[0]." and your password is ".$row[1];
        
    }


?>