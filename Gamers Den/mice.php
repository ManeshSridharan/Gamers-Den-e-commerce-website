<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Mice
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
            <div class="row">
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Razer Deathadder V2">
                            <input type="image" src="Images/mouse1.png" alt="Razer Deathadder V2">
                            <p>Razer Deathadder V2</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Logitech G203 Lightsync">
                            <input type="image" src="Images/mouse2.jpg" alt="Logitech G203 Lightsync">
                            <p>Logitech G203 Lightsync</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Razer Naga Pro">
                            <input type="image" src="Images/mouse3.png" alt="Razer Naga Pro">
                            <p>Razer Naga Pro</p>
                        </form>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Corsair Ironclaw RGB">
                            <input type="image" src="Images/mouse4.png" alt="Corsair Ironclaw RGB">
                            <p>Corsair Ironclaw RGB</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="SteelSeries Rival 310">
                            <input type="image" src="Images/mouse5.png" alt="SteelSeries Rival 310">
                            <p>SteelSeries Rival 310</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Razer Viper Ultimate">
                            <input type="image" src="Images/mouse6.png" alt="Razer Viper Ultimate">
                            <p>Razer Viper Ultimate</p>
                        </form>
                    </a>
                </div>
            </div>  

            <div class="row">
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Logitech G Pro Wireless">
                            <input type="image" src="Images/mouse7.png" alt="Logitech G Pro Wireless">
                            <p>Logitech G Pro Wireless</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Razer Basilisk V2">
                            <input type="image" src="Images/mouse8.jpg" alt="Razer Basilisk V2">
                            <p>Razer Basilisk V2</p>
                        </form>
                    </a>
                </div>
                    
                <div class="products">
                    <a href="mouseDetails.php">
                        <form action="mouseDetails.php" method="POST">
                            <input type="hidden" name="mouseName" value="Glorious Model O Wireless">
                            <input type="image" src="Images/mouse9.png" alt="Glorious Model O Wireless">
                            <p>Glorious Model O Wireless</p>
                        </form>
                    </a>
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