<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $msg = "Работает";
    try {
        $conn = new PDO("mysql:host = $servername; dbname=landing", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
    catch (PDOException $e) {
        echo "Не работает: " .$e->getMessage();
    }

?>