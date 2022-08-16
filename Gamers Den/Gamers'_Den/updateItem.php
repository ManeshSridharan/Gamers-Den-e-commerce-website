<?php
    session_start();

    //Creates connection to the database
    $server = "127.0.0.1";
    $username = "username";
    $password = null;
    $database = "Gamers_Den";
    $handler = mysqli_connect($server, $username, $password, $database);

    $sessionUser = $_SESSION["username"];

    //mysqli_stmt_prepare and bind to update products from 'pending' to 'purchased'
    $query = "UPDATE shopping_cart SET stat='purchased' WHERE stat='pending' AND account = ?";
    $stmt = mysqli_stmt_init($handler);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 's', $sessionUser);
    mysqli_stmt_execute($stmt);
    //Terminates the connection to the database after the query is completed
    mysqli_stmt_close($stmt);

    include('ThankYou.php');
?>