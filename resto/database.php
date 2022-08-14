<?php

$server = 'localhost';
$username = 'JulioRam';
$password = 'card123';
$database = 'digital_card';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>