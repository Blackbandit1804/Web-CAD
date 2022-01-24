<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("pgsql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<html>
    <head>
        <title>Test Site</title>

        <!-- Links -->
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body>

      <div class="login-box">
            <div class="login-form">
              <form action="login.php" method="$_POST" name="MainLogin">
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username" autocomplete="on">
                  <br>
                  <label for="pwd">Password: </label>
                  <input type="password" id="pwd" name="pwd" autocomplete="off">
                  <br>
                  <br>
                  <input type="submit" id="login-btn" name="login-btn">
              </form>
            </div>
          </div>

    </body>

</html>