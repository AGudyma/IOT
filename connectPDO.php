<?php
$servername = "192.168.0.103";
$username = "admin";
$password = "secret";
try {
    $pdo = new PDO('mysql:host=192.168.0.103; dbname=test_arduino', "$username", "$password");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $stmt = "SELECT * FROM hello_arduino";
    $query = $pdo->query($stmt);
//    var_dump($query);
//    var_dump($query->fetchAll());
    $result = $query->fetchAll();



} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
