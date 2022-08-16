<?php
    session_start();
    //Sets the currently logged in username to null IF there is no logged in account; account set when user signs into account
    //First page user lands on when they access the website; setting the session username to null ensures users cannot access 
    //the add to cart feature without first logging in first
    if(!isset($_SESSION["username"])){
        $_SESSION["username"] = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Home
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
            <div style="display: flex; justify-content: center;">
            <img src="Images/gamers (2).jpg"  height="auto" >
            </div>
                <div class="row">
                    <div class="products">
                        <a href="laptops.php" >
                            <img src="Images/laptops.png">
                        </a>
                    </div>
                    <div class="products" style="border: 1px solid black">
                        <a href="desktops.php" >
                            <img src="Images/Desktop.png">
                        </a>
                    </div>
                    <div class="products">
                        <a href="mice.php" >
                            <img src="Images/mouse.png">
                        </a>
                    </div>
                </div>
            
                <div class="row">
                    <div class="products" style="border: 1px solid black">
                        <a href="keyboards.php">
                            <img src="Images/keyboards.png">
                        </a>
                    </div>
                    <div class="products">
                        <a href="monitors.php">
                            <img src="Images/monitors.png" height="auto" width="1200px">
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