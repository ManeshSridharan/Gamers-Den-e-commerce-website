<?php
    // Initialize the session
    session_start();
  
    $handler = mysqli_connect("127.0.0.1", "username", "", "Gamers_Den");

    //Check connection
    if (!$handler) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $pass=$_POST['psw'];
        
        //Fetch the correct email and password from the database
        $sql=mysqli_query($handler, "SELECT * FROM account_details where email ='$email' AND pass='$pass'");
        $row = mysqli_fetch_array($sql);
        
        if (is_array($row)){
            session_start();
                            
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $email;    

            echo "<script>
                    alert('Successfully signed in!');
                    window.location.href='../home.php';
                    </script>";
        }
        else{
            echo "<script>
                    alert('Sign in failed! An incorrect email or password was entered or account does not exist!');
                    window.location.href='signInForm.php';
                    </script>";
        }
    }

    include('checkout.php');
?>


