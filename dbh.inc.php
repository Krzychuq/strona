<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=strona", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "Połączenie działa";
    } catch(PDOException $e) {
     //echo "Połączenie nie działa: " . $e->getMessage();
    }
?>