<?php
$servername = "localhost";
$username = "JulioRam";
$password = "card123";
$dbname = "digital_card";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE PERFILES (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Usuario varchar(30) UNIQUE KEY,
Nombres VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
email VARCHAR(50),
contraseña password(255) not null,
tipo varchar(30) not null
 )";

if ($conn->query($sql) === TRUE) {
  echo "TABLA USUARIOS CREADA CORRECTAMENTE";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>