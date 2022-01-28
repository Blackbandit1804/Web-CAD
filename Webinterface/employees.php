<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:index.php");
    }

    include connect.php

    
?>

<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <button>add user</button>

        <div class="user-list">

        </div>

        <div class="add-user-menu">
            <div class="form-holder">
                <form method="POST" name="register-user">
                    <input type="text" name="username" placeholder="Username">
                    <br>
                    <input type="text" name="number" placeholder="Service number">
                    <br>
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="confirm-pwd" placeholder="Confirm Password">
                    <button type="submit" name="add-user-btn">Add User</button>
                </form>
            </div>
        </div>
    </body>
</html>