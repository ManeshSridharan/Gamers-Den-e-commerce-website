<?php
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $handler = mysqli_connect($servername, $username, $password);

    //Creates the handler
    if (!$handler) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connection success";
    }

    //Creates and checks if database has been successfully created or not
    if (mysqli_query($handler, 'CREATE DATABASE IF NOT EXISTS Gamers_Den')){
        echo "Database created sucessfully";
    }
    else{
        echo "Error creating database: " . mysqli_error($handler);
    }
?>