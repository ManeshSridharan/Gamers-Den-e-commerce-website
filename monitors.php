<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Monitors
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
                    <a href="monitorDetails.php">
                        <form action="monitorDetails.php" method="POST">
                            <input type="hidden" name="monitorName" value="ASUS TUF Gaming Monitor VG249Q">
                            <input type="image" src="Images/monitor1.png" alt="ASUS TUF Gaming Monitor VG249Q">
                            <p>ASUS TUF Gaming Monitor VG249Q</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="monitorDetails.php">
                        <form action="monitorDetails.php" method="POST">
                            <input type="hidden" name="monitorName" value="AOC 24G2">
                            <input type="image" src="Images/monitor2.png" alt="AOC 24G2">
                            <p>AOC 24G2</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="monitorDetails.php">
                        <form action="monitorDetails.php" method="POST">
                            <input type="hidden" name="monitorName" value="LG 27GN950-B Ultra Gear">
                            <input type="image" src="Images/monitor3.png" alt="LG 27GN950-B Ultra Gear">
                            <p>LG 27GN950-B Ultra Gear</p>
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