<?php

// Declarar función
function nombreFuncion(){
    echo "Hola desde una función";
}

// Llamar a la función
nombreFuncion();

// Fucnión con parámetros
function funcionParametros($parametro1, $parametro2){
    echo $parametro1;
    echo "<br>";
    echo $parametro2;
}

funcionParametros("Juan", "Perez");

// Función con retorno
function funcionRetorno($parametro1, $parametro2){
    $resultado = $parametro1 + $parametro2;
    return $resultado;
}

echo "<br>";
$suma = funcionRetorno(5, 10);
echo "El resultado de la suma es $suma";

// Funcion parametros por defecto
function funcionParametrosDefault($param1 = 10, $param2 = 5){
    return $param1 - $param2;
}

$resta = funcionParametrosDefault(20,2);
echo "<br>";
echo "La resta es $resta";