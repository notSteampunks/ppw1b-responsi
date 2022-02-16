<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "pipgameshop";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //connection 
    if ($conn -> connect_error){
        die("Database tidak terkoneksi".conn -> connect_error);
    } 
    
    ?>