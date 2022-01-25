<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:index.php");
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <!-- Links -->
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
        <header>

        </header>
        <div class="nav-manager">
            <div class="nav-box">
                <div class="nav-menu">
                    <a class="nav-btn" href="">Dashboard</a>    <br>
                    <a class="nav-btn" href="">Akten</a>        <br>
                    <a class="nav-btn" href="">Fahrzeuge</a>    <br>
                    <a class="nav-btn" href="">Gesucht</a>      <br>
                    <a class="nav-btn" href="">Settings</a>     <br>
                    <a class="nav-btn" href="logout.php">Logout</a>       <br>
                </div>
            </div> 
        </div>

        <div class="main-manager">
            <div class="main-box">

            </div>
        </div>

        <footer>

        </footer>
    </body>

</html>