<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "testing";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {

    echo "Connection Failed" .$e->getMessage();

}

?>