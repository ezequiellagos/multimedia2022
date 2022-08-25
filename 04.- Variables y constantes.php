<?php

// Variables
/*
 Iniciar con un signo de dolar $
 Luego viene el nombre de la variable
 - El nombre de la variable no puede empezar con un numero
 - El nombre de la variable no puede contener espacios
 - El nombre de la variable no puede contener caracteres especiales
 - El nombre de la variable puede contener guiones bajos _
 - El nombre de la variable no puede contener acentos
 - El nombre de la variable debe ser lo más descriptivo posible
 - Una buena práctica, es que el nombre de la variable este en minúsculas
 */

$numero_1 = 10;
$numero_2 = 20;

echo $numero_1 + $numero_2;
echo "<br>";

// Constantes
// Su valor no puede cambiar
// PI = 3.1416

define("PI", 3.1416);
echo PI;

define("PI", 2);

