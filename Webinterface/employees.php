<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:index.php");
    }

    include "connect.php";

    if(isset($_POST["add-user-btn"]))
    {
        if($_POST["username"]== "" or $_POST["number"]== "" or $_POST["userrole"] or $_POST["pwd"]== "" or $_POST["confirm-pwd"]== "")
        {

        } else if ($_POST["pwd"] != $_POST["confirm-pwd"])
        {

        } else 
        {
            $username=strip_tags(trim($_POST["username"]));
			$userrole=strip_tags(trim($_POST["userrole"]));
            $number=strip_tags(trim($_POST["number"]));
            $pwd=strip_tags(trim($_POST["pwd"]));
			
            $query=$conn->prepare("INSERT INTO `login` (`id`, `username`, `pwd`, `role`) VALUES ('?', '?', '?', '?');");
            $query->exec(array( $number, $username, $pwd, $userrole));
            $control=$query->fetch(PDO::FETCH_OBJ);
            if($control>0) {
                echo ("Register Succesfull");
              }
        }
    }
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
					<input type="text" name="userrole" placeholder="Role">
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