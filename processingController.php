<?php
include_once "connectPDO.php";
try {

    echo "Connected successfully"."<br>";
    $rowCount = 45;
    $lastFive = 35;
    $array = array('SELECT value FROM hello_sensor where num BETWEEN ', $lastFive, ' and ',$rowCount);
    $stmtImplode = implode($array);

    $stmt = $stmtImplode;

    $query = $pdo->query($stmt);

    $selectBetween = $query->fetchAll();

    $lastValues = array_column($selectBetween, 'value');
    print_r($lastValues);
    print_r(array_sum($lastValues));
    echo PHP_EOL;
    echo $lastValuesMean = array_sum($lastValues) / ($rowCount - $lastFive);

} catch (PDOException $e) {
    echo $e->getMessage();
}