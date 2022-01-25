<?php
    $servername = "localhost";
    $username = "phptest";
    $password = "TEST";
    $db = "admin";

    try {
        $conn=new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }


