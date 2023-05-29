<?php
define('server','localhost');
define('db_username','root');
define('db_password','');
define('db','khaotom')
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div id="login-box">
       
        <?php
            
            if(isset($_POST['apply'])) {
                // Get input values from the form
                $username = $_POST['username'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirm_password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                // Validate input values
                if(empty($username) || empty($password) || empty($confirmPassword) || empty($phone) || empty($address)) {
                    echo "Please fill all the fields.";
                } elseif ($password != $confirmPassword) {
                    echo "Passwords do not match.";
                } else {
                    // Connect to the database
                    $connection = mysqli_connect(server ,db_username,db_password ,db);

                    // Check if the username already exists
                    $query = "SELECT * FROM user WHERE db_username='$username'";
                    $result = mysqli_query($connection, $query);
                    if(mysqli_num_rows($result) > 0) {
                        echo "Username already exists.";
                    } else {
                        // Insert member data into the database
                        $query = "INSERT INTO user (db_username, db_password, db_phone, db_address) VALUES ('$username', '$password', '$phone', '$address')";
                        mysqli_query($connection, $query);
                        
                        // Redirect to the menu page
                        header("Location: product.php");
                        exit();
                    }
                    mysqli_close($connection);
                }
            }
        ?>

        <form method="post" action="login" style="display:NONE">
            <div class="left" ">
                <h1 class="h1">Sign up</h1>
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="email" placeholder="E-mail" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="confirm_password" placeholder="Retype password" />
                <input type="text" name="address" placeholder="Address" />
                <input type="text" name="phone" placeholder="Phone" />
                <input type="submit" name="apply" value="Sign me up" />
            </div>
        </form>




        <form method="post" action="">
            <div class="right">
                <h1 class="h1">Login</h1>
                <input type="text" name="uname" placeholder="Username" />
                <input type="password" name="passwd" placeholder="Password" />
                <!-- <input type="password" name="cm-password" placeholder="Retype password" /> -->
                <input type="submit" name="apply" value="Login" />


                <?php

                    $uname = $_POST['uname'];
                    $passwd = $_POST['passwd'];


                $conn = mysqli_connect(server,db_username,db_password,db);

                // Check if the username already exists
                $query = "SELECT * FROM user WHERE db_username='$uname'";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                    echo "Username already exists.";
                } else {
                    // Insert member data into the database
                    $query = "INSERT INTO user (db_username, db_password) VALUES ('$uname', '$passwd')";
                    mysqli_query($conn, $query);
                }

                header("Location: product.php");
                ?>
            </div>
        </form>
</body>
</html>