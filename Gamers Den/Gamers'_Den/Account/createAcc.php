<?php
    $servername = "127.0.0.1";
    $username = "username";
    $password = "";
    $databaseName = "Gamers_Den";
    $handler = mysqli_connect($servername, $username, $password, $databaseName);

    //Creates the handler
    if (!$handler) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "Connection success";
    }
    //Checks if the entered password matched the re-entered password
    if ($_POST['psw'] == $_POST['psw-repeat']){
        $add_acc = "INSERT INTO account_details VALUES ('$_POST[email]', '$_POST[psw]')";
    }
    
    //Check if both if else statement success
    if (mysqli_query($handler, $add_acc)){
        echo "<script>
                alert('Account successfully created!');
                window.location.href='signInForm.php';
                </script>";
    } else {
        echo "Error creating Account: " . mysqli_error($handler);
    }
?>

