<?php
$dsn = 'mysql:dbname=test; host=localhost';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $password);
    foreach($dbh->query('SELECT * from login') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>