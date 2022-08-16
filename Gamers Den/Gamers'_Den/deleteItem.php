<?php
    session_start();

    //Creates connection to the database
    $server = "127.0.0.1";
    $username = "username";
    $password = null;
    $database = "Gamers_Den";
    $handler = mysqli_connect($server, $username, $password, $database);

    //Local variables to identify which product to delete 
    $quantity = $_POST["quantity"];
    $product = $_POST["product"];
    $sessionUser = $_SESSION["username"];

    //mysqli_stmt_prepare and bind to delete the selected product from the database
	$query = "DELETE FROM shopping_cart WHERE productName = ? AND account= ? AND quantity= ? AND stat='pending'"; 
	$stmt = mysqli_stmt_init($handler); 
	mysqli_stmt_prepare($stmt, $query); 
	mysqli_stmt_bind_param($stmt, 'ssi', $product, $sessionUser, $quantity); 
	mysqli_stmt_execute($stmt); 
    //Terminates the connection to the database after the query has been completed
    mysqli_stmt_close($stmt);

    //Informs the user that the item has been deleted from the database and returns the user to the checkoutpage
    echo '<script>alert("The item has been deleted from your cart");
                        location.href="checkout.php";  
                </script>';
?>