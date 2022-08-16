<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Keyboards
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
                    <a href="keyboardDetails.php">
                        <form action="keyboardDetails.php" method="POST">
                            <input type="hidden" name="keyboardName" value="Corsair K100">
                            <input type="image" src="Images/keyboard1.png" alt="Corsair K100 keyboard">
                            <p>Corsair K100</p>
                        </form>
                    </a>
                </div>
            
                <div class="products">
                    <a href="keyboardDetails.php">
                        <form action="keyboardDetails.php" method="POST">
                            <input type="hidden" name="keyboardName" value="Everest Max">
                            <input type="image" src="Images/keyboard2.png" alt="Everest Max keyboard">
                            <p>Everest Max</p>
                        </form>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="products">
                    <a href="keyboardDetails.php">
                        <form action="keyboardDetails.php" method="POST">
                            <input type="hidden" name="keyboardName" value="Razer Cynosa Chroma">
                            <input type="image" src="Images/keyboard3.png" alt="Razer Cynosa Chroma keyboard">
                            <p>Razer Cynosa Chroma</p>
                        </form>
                    </a>
                </div>

                <div class="products">
                    <a href="keyboardDetails.php">
                        <form action="keyboardDetails.php" method="POST">
                            <input type="hidden" name="keyboardName" value="G.SKILL KM360">
                            <input type="image" src="Images/keyboard4.png" alt="G.SKILL KM360 keyboard">
                            <p>G.SKILL KM360</p>
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