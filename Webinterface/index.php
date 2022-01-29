<?php
  session_start();
  include "connect.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test Site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links -->
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body style="background-image: url('img/background01.jpg'); background-size:cover;">
      <div class="login-center">
        <div class="login-box">
          <h3 class="login-header">Login</h3>
          <div class="login-form">
            <form method="POST" name="MainLogin">
                <input type="text" id="username" name="username" autocomplete="on" placeholder="Username">
                <br>
                <input type="password" id="pwd" name="pwd" autocomplete="off" placeholder="Password">
                <br>
                <br>
                <button type="submit" id="login-btn" name="login-btn">Login</button>
            </form>
          </div>
        </div>
      </div>


    </body>

</html>