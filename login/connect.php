<?php

$host = "localhost";
$dbname = "gameshop";
$userName = "root";
$password = "";

try {
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $userName, $password);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
