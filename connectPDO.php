<?php
$servername = "192.168.0.103";
$username = "admin";
$password = "secret";
try {
    $pdo = new PDO('mysql:host=192.168.0.103; dbname=test_arduino', "$username", "$password");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"."<br>";

    $stmt = "SELECT * FROM hello_arduino";
    $query = $pdo->query($stmt);
//    var_dump($query);
//    var_dump($query->fetchAll());
    $result = $query->fetchAll();
    $rowCount = $query->rowCount();
    echo "row count = " . $rowCount . "<br>";
//   echo "<br>".$last_id = $pdo->lastInsertId();
    $selectMaxNum = "SELECT MAX(num) FROM hello_arduino";
    $selectMaxNumQuery = $pdo->query($selectMaxNum);
    $resultMaxNum = $selectMaxNumQuery->fetchAll();

    echo ("max num count = ". $resultMaxNum[0][0] . "<br>") ;


} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
