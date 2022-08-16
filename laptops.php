<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Laptops
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
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="MSI Pulse GL76 11UEK">
                            <input type="image" src="Images/laptop1.png" alt="MSI Pulse GL76 laptop">
                            <p>MSI Pulse GL76 11UEK</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="ASUS ROG Zephyrus G14">
                            <input type="image" src="Images/laptop2.png" alt="ASUS ROG Zephyrus G14">
                            <p>ASUS ROG Zephyrus G14</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="ASUS ROG Strix G15">
                            <input type="image" src="Images/laptop3.png" alt="ASUS ROG Strix G15">
                            <p>ASUS ROG Strix G15</p>
                        </form>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="products">
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="Razer Blade 14">
                            <input type="image" src="Images/laptop4.png" alt="Razer Blade 14">
                            <p>Razer Blade 14</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="Acer Nitro 5">
                            <input type="image" src="Images/laptop5.png" alt="Acer Nitro 5">
                            <p>Acer Nitro 5</p>
                        </form>
                    </a>
                </div>
                
                <div class="products">
                    <a href="laptopDetails.php">
                        <form action="laptopDetails.php" method="POST">
                            <input type="hidden" name="laptopName" value="Acer Predator Helios 300">
                            <input type="image" src="Images/laptop6.png" alt="Acer Predator Helios 300">
                            <p>Acer Predator Helios 300</p>
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