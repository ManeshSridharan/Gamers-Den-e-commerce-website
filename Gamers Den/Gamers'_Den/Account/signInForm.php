<?php
    session_start();
    //Sets the currently logged in username to null IF there is no logged in account; account set when user signs into account
    //Prevents bug from letting users access the Add to Cart feature in event they log out and try to access the feature without logging in
    if(!isset($_SESSION["username"])){
        $_SESSION["username"] = null;
    }   
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Sign In
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">             
    </head>

    <body class="backimg">
        <navbar>
            <?php
                include('accountNavbar.html');
            ?>
        </navbar>

        <div>
            <!--Creates the grid to display the Create account card form-->
            <div class="acctForm">
                <form action="signIn.php" method="POST" class="acctCard">
                    <p class="pageTitle">Sign In</p>
                    <div>
                        <label for="email" style="color: rgb(30, 30, 30);"><b>Email: </b></label><br>
                        <input id="email" type="email" placeholder="Enter your email" name="email" required>
                    </div>   
                    <div style="margin-top: 20px;">
                        <label for="psw" style="color: rgb(30, 30, 30);"><b>Password: </b></label><br>
                        <input id="password" type="password" 
                        placeholder="Enter your password" name="psw" required>
                    </div>
                    <div>
                        <button type="submit" class="registerbtn" onclick="return checkPassword()">Sign In</button>
                    </div>
                    <div class="signin">
                        <p>No Account? <a href="createAccForm.php" class="signin">Click here to create an account.</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>

    <footer>
        <?php
            include('footer.html');
        ?>
    </footer>
</html>