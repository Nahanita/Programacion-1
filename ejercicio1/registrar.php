<?php
require_once './conexion.php';

$nombre = $_POST['nombre'] ?? 'Vacío';
$edad = $_POST['edad'] ?? 'Vacío';



$sql = "INSERT INTO personas (nombre, edad) VALUES (?, ?)";

try {
    if ($edad >= 18) {
        # code...
        $stmt = $conexion->prepare ($sql);
        
        $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
        $stmt->bindParam(2, $edad, PDO::PARAM_INT); 
        
        $stmt->execute();
        
        echo "Usuario registrado correctamente<br><a href='/ejercicio1'>Volver al inicio</a>";
    } else {
        echo "El usuario no se puede registrar correctamente porque es menor de edad";
    }

} catch (\Throwable $th) {
    echo "Hubo un error: " . $th->getMessage();



}

