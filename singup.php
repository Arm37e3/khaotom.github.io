<?
define('server','localhost');
define('name','root');
define('password','');
define('db','khaotom');
?>



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
          $conn = mysqli_connect (server,name,password,db)

        
          ?>
              
        <form method="post" action="">
            <div class="left" ">
            <h1 class="h1">Sign up</h1>
            <input type="text" name="username" placeholder="username" />
            <input type="text" name="email" placeholder="e-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password2" placeholder="Retype password" />
            <input type="text" name="address" placeholder="Address" />
            <input type="text" name="phone" placeholder="Phone" />
            <input type="submit" name="signup_submit" value="Sign me up" />
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