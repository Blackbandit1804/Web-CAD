<?php
  session_start();
  ob_start();
  include "connect.php";
  
  if(isset($_POST["login-btn"])){
    if($_POST["username"]=="" or $_POST["pwd"]=="") {

    } else {
      $username=strip_tags(trim($_POST["username"]));
      $pwd=strip_tags(trim($_POST["pwd"]));
      $query=$conn->prepare("SELECT * FROM login AND password=?");
      $query->execute(array($pwd));
      $control=$query->fetch(PDO::FETCH_OBJ);
      if($control>0) {
        $_SESSION["username"]=$username;
        header("Location:home.php");
      }
    }
  }
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
            <form action="home.php" method="$_POST" name="MainLogin">
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