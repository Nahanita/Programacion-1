<?php
$host= '127.0.0.1';
$db_name = 'ejercicio1';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

$pdo = "mysql:host=$host;dbname=$db_name;charset=$charset";

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => FALSE,
];

try{
    $conexion = new PDO($pdo, $username, $password, $option);
    //echo "conexión exitosa <br>";
  
} catch(PDOException $e) {

    throw new PDOException($e->getMessage());
}
