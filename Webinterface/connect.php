<?php
    $servername = "localhost";
    $username = "TEST";
    $password = "L*Uen[/_M0lZBnMN";
    $db = "test";

    try {
        $conn=new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }


