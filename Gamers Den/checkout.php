<!--PHP script connects to the database and inserts the data into the table-->
<?php
    session_start();
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $databaseName = "Gamers_Den";
    $handler = mysqli_connect($servername, $username, $password, $databaseName);

    //Changed to sessionUser from username only on this page; username conflicts with username used to connect to database
    $sessionUser = $_SESSION["username"];
    //Only sets POST superglobal variables to local variables IF they are set
    if (isset($_POST["product"], $_POST["quantity"], $_POST["price"])){
        $productName = $_POST["product"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $stat = "pending";
    }
    
    //Set up the query to be executed in the database
    $query = "INSERT INTO shopping_cart (account, productName, quantity, price, stat) VALUES (?, ?, ?, ?, ?)";
    //Initiates the connection to the database with the handler
    $stmt = mysqli_stmt_init($handler);

    //Prepares the to-be executed statement by appending the query to the stmt variable
    mysqli_stmt_prepare($stmt, $query);
    //Binds the data to the parameters stated in the query in $query
    mysqli_stmt_bind_param($stmt, "ssids", $sessionUser, $productName, $quantity, $price, $stat);
    //Executes the query via $stmt to insert the data
    mysqli_stmt_execute($stmt);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Checkout
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body> 
        <navbar>
            <?php
                include('navbar.html');
            ?>
        </navbar>

        <main>
            <p class="pageTitle">Checkout</p>
            <table id="checkoutTable">
                <tr>
                    <th class="tableHead">Product Name</th>
                    <th class="tableHead">Quantity</th>
                    <th class="tableHead">Price Per Unit</th>
                    <th class="tableHead">Delete</th>
                </tr>
               
                <?php
                    $id = 1;
                    //mysqli_stmt_prepare and bind to check which account the pending products are linked to
                    $getData = "SELECT * FROM shopping_cart WHERE stat='pending' AND account=?";
                    $stmt = mysqli_stmt_init($handler);
                    mysqli_stmt_prepare($stmt, $getData);
                    mysqli_stmt_bind_param($stmt, 's', $sessionUser);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_array($result)){
                        
                        echo "<tr id='row".$id."'>";
                        ?>
                            <td class='cell'><?php echo $row['productName']?> </td>
                            <td class='cell'><?php echo $row['quantity']?> </td>
                            <td class='cell'>RM <?php echo $row['price']?> </td>
                            <td class='cell'>
                            <!--Form submits the quantity and product name of the item to be deleted-->
                            <form action="deleteItem.php" method="POST">
                                <input type="hidden" name="quantity" value="<?php echo $row['quantity']?>">
                                <input type="hidden" name="product" value="<?php echo $row['productName']?>">
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        <?php
                        echo "</tr>";
                        $id++;
                    }
                ?>
                
                <tr>
                    <td class='lastRow'></td>
                    <td class='lastRow'>Total Price:</td>
                    <?php
                        $totalPrice = 0;
                        //Need to use mysqli_stmt_prepare and bind to check which account the product is linked to
                        $getData = "SELECT * FROM shopping_cart WHERE stat='pending' AND account=?";
                        $stmt = mysqli_stmt_init($handler);
                        mysqli_stmt_prepare($stmt, $getData);
                        mysqli_stmt_bind_param($stmt, 's', $sessionUser);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_array($result)){
                            $totalPrice = ($row['quantity'] * $row['price']) + $totalPrice;
                     }
                        echo "<td class='lastRow'> RM " . number_format($totalPrice,2) . "</td>";
                    ?>
                </tr>
            </table>
            
            
            <form action="updateItem.php" method="POST">
                <div class="container">
                    <button type="submit" class="purchasebtn">Confirm purchase</button>
                </div>
            </form>
        </main>
    </body>

    <footer>
        <?php
            include('footer.html');
        ?>
    </footer>
</html>