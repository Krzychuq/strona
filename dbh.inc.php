<?php
    $servername = "sql213.epizy.com";
    $username = "epiz_32504605";
    $password = "ihxSRJGYpeeCfP4";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=epiz_32504605_strona", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "Połączenie działa";
    } catch(PDOException $e) {
     //echo "Połączenie nie działa: " . $e->getMessage();
    }
?>