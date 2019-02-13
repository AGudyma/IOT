<?php
// Create connection
$servername = "192.168.0.103";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo "!" . "<br>";
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";