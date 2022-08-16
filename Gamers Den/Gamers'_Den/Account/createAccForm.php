<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../Images/logo.png" type="image/icon">
        <title>
            Gamers' Den - Create Account
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
                <form action="createAcc.php" method="POST" class="acctCard">
                    <p class="pageTitle">Create account</p>
                    <div>
                        <label for="email" style="color: rgb(30, 30, 30);"><b>Email: </b></label><br>
                        <input id="email" type="email" placeholder="Enter your email" name="email" required>
                        <p style="color:gray; font-size: 11px; margin-bottom: 20px;">Note: Your email will be your username</p>
                    </div>   
                    <div>
                        <label for="psw" style="color: rgb(30, 30, 30);"><b>Password: </b></label><br>
                        <input id="password" type="password" 
                        placeholder="Enter your password" name="psw" required>
                        <p style="color:gray; font-size: 11px; margin-bottom: 20px;">Format: must contain at least 1 uppercase letter, 1 lowercase letter, 1 number and be at least 8 characters long</p>
                    </div>
    
                    <div>
                        <label for="psw-repeat" style="color: rgb(30, 30, 30);"><b>Repeat Password: </b></label><br>
                        <input id="repeatPassword" type="password" placeholder="Re-enter your password" name="psw-repeat" required>
                    </div>
                    <div>
                        <button type="submit" class="registerbtn" onclick="return checkPassword()">Submit</button>
                    </div>
                    <div class="signin">
                        <p>Already have an account? <a href="signInForm.php" class="signin">Click here to sign in</a>.</p>
                    </div>
                </form>
            </div>
        </div>
        
        <script>
            //Checks if the entered password passes the format specified
            function checkPassword() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("repeatPassword").value;
                var checkLowercase = /[a-z]/;
                var checkUppercase = /[A-Z]/;
                var checkNum = /[0-9]/;

                //Checks if the entered password matched the re-entered password
                if (password != confirmPassword){
                    alert("The entered passwords do not match! Please retype your password!");
                    return false;
                }
                //Checks if the password's length is less than 8 digits or not
                else if (password.length < 8 || confirmPassword.length < 8){
                    alert("The password does not meet the minimum required length of 8 characters!");
                    return false;
                }
                //Checks if the password contains a lowercase letter or not
                else if (!(password.match(checkLowercase)) || !(confirmPassword.match(checkLowercase))){
                    alert("The passwords do not contain a lowercase letter!");
                    return false;
                }
                //Checks if the password contains an uppercase letter or not
                else if (!(password.match(checkUppercase)) || !(confirmPassword.match(checkUppercase))){
                    alert("The passwords do not contain an uppercase letter!");
                    return false;
                }
                //Checks if the password contains a digit letter or not
                else if (!(password.match(checkNum)) || !(confirmPassword.match(checkNum))){
                    alert("The passwords do not contain a number!");
                    return false;
                }
                //Returns true if the password passes the validation and allows for the submission of the account details
                else{
                    return true;
                }
            }
        </script>
    </body>

    <footer>
        <?php
            include('footer.html');
        ?>
    </footer>
</html>