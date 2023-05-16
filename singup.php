


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="sigup.css">
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
                    $conn = mysqli_connect(server, username, password, );

                    // Check if the username already exists
                    $query = "SELECT * FROM members WHERE username='$username'";
                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0) {
                        echo "Username already exists.";
                    } else {
                        // Insert member data into the database
                        $query = "INSERT INTO members (username, password, phone, address) VALUES ('$username', '$password', '$phone', '$address')";
                        mysqli_query($conn, $query);
                        
                        // Redirect to the menu page
                        header("Location: product.php");
                        exit();
                    }
                    mysqli_close($conn);
                }
            }
        ?>

        <form method="post" action="">
            <div class="left" ">
                <h1 class="h1">Sign up</h1>
                <input type="text" name="username" placeholder="username" />
                <input type="text" name="email" placeholder="e-mail" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="confirm_password" placeholder="Retype password" />
                <input type="text" name="address" placeholder="Address" />
                <input type="text" name="phone" placeholder="Phone" />
                <input type="submit" name="apply" value="Sign me up" />
            </div>
            
            <div class="right">
            <h1 class="h1">Login</h1>
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="submit" name="login_submit" value="Login" />
            
            </div>
        </form>
      </div>
</body>
</html>