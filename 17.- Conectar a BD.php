<?php

// Conexción a BD

//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia2022";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "SELECT * FROM usuarios";

//3.- Ejecutar consulta
$resultado = mysqli_query($conexion, $consulta);

//4.- Mostrar resultados
//4.1.- Forma 1
// while($fila = mysqli_fetch_assoc($resultado)){
//     echo $fila["nombre"] . " " . $fila["apellido"] . "<br>";
// }

//4.2.- Forma 2
while($fila = mysqli_fetch_assoc($resultado)){
    foreach ($fila as $llave => $valor) {
        echo $valor. " ";
    }
    echo "<br>";
}