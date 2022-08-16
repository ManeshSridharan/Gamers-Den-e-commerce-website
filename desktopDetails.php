<?php
    session_start();

    //Creates the handler and connects to the Product_Details database
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $databaseName = "Gamers_Den";
    $handler = mysqli_connect($servername, $username, $password, $databaseName);

    //Checks if the POST array has a value
    if (isset($_POST['desktopName'])){
        //Assigns array value to the laptop_name variable
        $product_name = $_POST['desktopName'];
    }
?>

<script>
    //Checks if there is an account logged in; prevents user from accessing cart and adding items if there is no account logged in
    function checkAcct(){
        var currentAcct = "<?php echo $_SESSION['username']?>";
        if (currentAcct == ""){
            alert("Please login or create an account to access your shopping cart!");
            changeLink();
        }
    }

    //Changes the form link if no account is logged in
    function changeLink(){
        //Accesses the DOM to change the form's URL
        document.cartItems.action = "Account/accountPage.php";
    }
</script>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <?php
            echo '<title> Gamers\' Den - '.$product_name.'</title>';
        ?>
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
            <div class="prodrow">
                <div class="prod_details">
                    <!--If statments decides the correct product image to display depending on what model user selected-->
                    <?php
                        if ($product_name=='Alienware Aurora Ryzen Edition R10'){
                            echo '<img src="Images/desktop1.jpg" alt="Alienware Aurora Ryzen Edition R10 image" width=80%>';
                        } elseif ($product_name=='MSI Trident 3'){
                            echo '<img src="Images/desktop2.png" alt="MSI Trident 3 image" width=80%>';
                        } elseif ($product_name=='HP OMEN 25L Desktop PC'){
                            echo '<img src="Images/desktop3.png" alt="HP OMEN 25L Desktop PC image" width=80%>';
                        }
                    ?>
                </div>

                <div class="details">
                    <!--PHP script displays the selected model's specifications by retrieving data from the database-->
                    <?php
                        if ($product_name=='Alienware Aurora Ryzen Edition R10'){
                            $query="SELECT * FROM desktop_details WHERE desktopName ='Alienware Aurora Ryzen Edition R10'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='MSI Trident 3'){
                            $query="SELECT * FROM desktop_details WHERE desktopName ='MSI Trident 3'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='HP OMEN 25L Desktop PC'){
                            $query="SELECT * FROM desktop_details WHERE desktopName ='HP OMEN 25L Desktop PC'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                    ?>

                    <!--Displaying of selected product's name and details-->
                    <h1><?php echo $details['desktopName']; ?></h1>
                    <p class="fontsize">Product Details</p>
                    <ul>
                        <li><b>CPU:</b> <?php echo $details['cpu']; ?></li>
                        <li><b>GPU:</b> <?php echo $details['gpu']; ?></li>
                        <li><b>RAM:</b> <?php echo $details['ram']; ?></li>
                        <li><b>Storage:</b> <?php echo $details['storage']; ?></li>
                        <li><b>OS:</b> <?php echo $details['os']; ?></li>
                        <li><b>Color:</b> <?php echo $details['color']; ?></li>
                        <li><b>Price:</b> RM<?php echo $details['price']; ?></li>
                    <ul>

                    
                    <!--Form to select quantity and choose to add quantity to cart or buy product immediately-->
                    <br><form name = "cartItems" action="checkout.php" method="POST" style="font-size: 1.3em; display: block; margin-top: 10px;">
                        <label for="quantity">Quantity: <input type="number" value="1" min="1" name="quantity" required></label><br>
                        <input type="hidden" name="product" value="<?php echo $product_name?>">
                        <input type="hidden" name="price" value=<?php echo $details['price']?>>
                        <button type="submit" class="detailsbtn" onclick="checkAcct()">Add to Cart</button>
                    </form>
                </div>
            </div>
        </main>
    </body>

    <footer>
        <?php
            include('footer.html');
        ?>
    <footer>
</html>
