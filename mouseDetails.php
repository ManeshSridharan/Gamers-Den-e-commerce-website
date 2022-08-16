<?php
    session_start();

    //Creates the handler and connects to the Product_Details database
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $databaseName = "Gamers_Den";
    $handler = mysqli_connect($servername, $username, $password, $databaseName);

    //Checks if the POST array has a value
    if (isset($_POST['mouseName'])){
        //Assigns array value to the laptop_name variable
        $product_name = $_POST['mouseName'];
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
                        if ($product_name=='Razer Deathadder V2'){
                            echo '<img src="Images/mouse1.png" alt="Razer Deathadder V2 image" width=80%>';
                        }
                        elseif ($product_name=='Logitech G203 Lightsync'){
                            echo '<img src="Images/mouse2.jpg" alt="Logitech G203 Lightsync image" width=80%>';
                        }
                        elseif ($product_name=='Razer Naga Pro'){
                            echo '<img src="Images/mouse3.png" alt="Razer Naga Pro image" width=80%>';
                        }
                        elseif ($product_name=='Corsair Ironclaw RGB'){
                            echo '<img src="Images/mouse4.png" alt="Corsair Ironclaw RGB image" width=80%>';
                        }
                        elseif ($product_name=='SteelSeries Rival 310'){
                            echo '<img src="Images/mouse5.png" alt="SteelSeries Rival 310 image" width=80%>';
                        }
                        elseif ($product_name=='Razer Viper Ultimate'){
                            echo '<img src="Images/mouse6.png" alt="Razer Viper Ultimate image" width=80%>';
                        }
                        elseif ($product_name=='Logitech G Pro Wireless'){
                            echo '<img src="Images/mouse7.png" alt="Logitech G Pro Wireless image" width=80%>';
                        }
                        elseif ($product_name=='Razer Basilisk V2'){
                            echo '<img src="Images/mouse8.jpg" alt="Razer Basilisk V2 image" width=80%>';
                        }
                        elseif ($product_name=='Glorious Model O Wireless'){
                            echo '<img src="Images/mouse9.png" alt="Glorious Model O Wireless image" width=80% >';
                        }
                    ?>
                </div>

                <div class="details">
                    <!--PHP script displays the selected model's specifications by pulling data from the database-->
                    <?php
                        if ($product_name=='Razer Deathadder V2'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Razer Deathadder V2'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Logitech G203 Lightsync'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Logitech G203 Lightsync'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Razer Naga Pro'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Razer Naga Pro'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Corsair Ironclaw RGB'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Corsair Ironclaw RGB'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='SteelSeries Rival 310'){
                            $query="SELECT * FROM mice_details WHERE miceName ='SteelSeries Rival 310'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Razer Viper Ultimate'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Razer Viper Ultimate'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Logitech G Pro Wireless'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Logitech G Pro Wireless'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Razer Basilisk V2'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Razer Basilisk V2'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                        elseif ($product_name=='Glorious Model O Wireless'){
                            $query="SELECT * FROM mice_details WHERE miceName ='Glorious Model O Wireless'";
                            $result=mysqli_query($handler, $query);
                            $details=mysqli_fetch_assoc($result);
                        }
                    ?>
                    <!--Displaying of selected product's name and details-->
                    <h1><?php echo $details['miceName']; ?></h1>
                    <p class="fontsize">Product Details</p>
                    <ul>
                        <li><b>Sensor Type:</b> <?php echo $details['sensorType']; ?></li>
                        <li><b>Sensor Model:</b> <?php echo $details['sensorModel']; ?></li>
                        <li><b>Connection:</b> <?php echo $details['connectionType']; ?></li>
                        <li><b>Lighting:</b> <?php echo $details['lighting']; ?></li>
                        <li><b>Sensitivity:</b> <?php echo $details['sensitivity']; ?></li>
                        <li><b>Polling Rate:</b> <?php echo $details['pollingRate']; ?></li>
                        <li><b>No. of Programmable Buttons:</b> <?php echo $details['buttons']; ?></li>
                        <li><b>Measurements:</b> <?php echo $details['measurements']; ?></li>
                        <li><b>Color:</b> <?php echo $details['color']; ?></li>
                        <li><b>Price:</b> RM <?php echo $details['price']; ?></li>
                    </ul>

                    <!--Form to select quantity and choose to add quantity to cart or buy product immediately-->
                    <br><form name="cartItems" action="checkout.php" method="POST" style="font-size: 1.3em; display: block; margin-top: 10px;">
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
    </footer>
</html>