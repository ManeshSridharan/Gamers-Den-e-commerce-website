<?php
    session_start();
    
    $username = $_SESSION['username'];
    if(!isset($_SESSION["loggedin"])){
        //JS to open the sign in page if no account is signed in
        echo '<script>location.href="signInForm.php"</script>';
    }

    //Logs the user out by destroying the session
    if(isset($_POST['logout']) && $_POST['logout'] == true){
        session_destroy();
        //Returns user to the home page after logging them out
        echo '<script>alert("Successfully signed out!");
                    location.href="signInForm.php";
                </script>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="../Images/logo.png" type="image/icon type">
        <title>
            Gamers' Den - Account Page
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body class="backimg">
        <navbar>
            <?php
                include('accountNavbar.html');
            ?>
        </navbar>
        
        <div class="acctForm">
            <div class="acctCard">
                <?php
                    echo '<p class="pageTitle">Welcome ' . $username . '</p>';
                ?>

                <button class="registerbtn" onclick="openCart()">Go to cart</button>
                <form action="accountPage.php" method="POST">
                    <button type="submit" name="logout" value="true" class="logoutbtn">Log out</button>
                </form>
            </div>
        </div>
    </body>

    <footer>
        <?php
            include('footer.html');
        ?>
    </footer>

    <script>
        function openCart(){
            location.href="../checkout.php";
        }
    </script>
</html>