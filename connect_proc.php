<?php

$servername = "192.168.0.103";
$username = "admin";
$password = "secret";

$mysql_proc = mysqli_connect('192.168.0.103', 'admin', 'secret', 'test_arduino');
var_dump($mysql_proc);

//try {
//    $mysql_oop = new mysqli('localhost', 'root', '', 'labCatalogue');
//} catch (PDOException $e) {
//    $e->getMessage();
//}
//var_dump($mysql_oop);