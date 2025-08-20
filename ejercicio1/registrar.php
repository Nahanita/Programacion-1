<?php
require_once './conexion.php';

$nombre = $_POST['Nombre'] ?? 'se envío vacío';
$edad = $_POST['Edad'] ?? 'Se envío vacío';

if($edad >= 18) {
    echo "Bienvenido(a) $nombre eres mayor de edad. ";

}else{
    echo "Lo siento $nombre, eres menor de edad.";
}

