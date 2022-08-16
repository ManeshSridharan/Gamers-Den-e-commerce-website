<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Desktops
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
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
                    <a href="desktopDetails.php" >
                        <form action="desktopDetails.php" method="POST">
                            <input type="hidden" name="desktopName" value="Alienware Aurora Ryzen Edition R10">
                            <input type="image" src="Images/desktop1.jpg" alt="Alienware Aurora Ryzen Edition R10">
                            <p>Alienware Aurora Ryzen Edition R10</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="desktopDetails.php">
                        <form action="desktopDetails.php" method="POST">
                            <input type="hidden" name="desktopName" value="MSI Trident 3">
                            <input type="image" src="Images/desktop2.png" alt="MSI Trident 3">
                            <p>MSI Trident 3</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="desktopDetails.php">
                        <form action="desktopDetails.php" method="POST">
                            <input type="hidden" name="desktopName" value="HP OMEN 25L Desktop PC">
                            <input type="image" src="Images/desktop3.png" alt="HP OMEN 25L Desktop PC">
                            <p>HP OMEN 25L Desktop PC</p>
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