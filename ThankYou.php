<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Gamers' Den
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
            <div class="container">
                <div class="item">
                    <p class="orderSuccess">Order success!</p> <br>
                    <img src="Images/logo.png" alt="Gamers' Den" width="100%" height="100%">
                    <br><br>Thank you for shopping with Gamers' Den. <br><br>
                    <button type="submit" class="registerbtn" onclick="window.location.href='home.php'">Return to Home</button>
                </div>
            </div>
        </main>

        <footer class="footer">      
            <table align="center">
                <tr>
                    <td width="150px" >Contact details:</td>
                    <td><img src="Images/phone.png" alt="telephone logo" width="20px" ></td>
                    <td style="padding-left: 10px">+694202629</td>
                    <td><img src="Images/mail.png" alt="email logo" width="20px" style="padding-left: 30px"></td>
                    <td style="padding-left: 10px">bwindiimpenetrable@gmail.com</td>
                </tr>
            </table>
        </footer>

    </body> 
</html>