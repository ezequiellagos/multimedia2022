<?php

/*
Casting
Es cuando forzamos a un tipo de dato que se convierta en otro
*/

$numero_string = "7"; // string
var_dump($numero_string);
echo "<br>";

$numero_int = (int) $numero_string; // integer
var_dump($numero_int);
echo "<br>";

$numero_float = (float) $numero_string; // float
var_dump($numero_float);
echo "<br>";

$dias = 5.85;
$dias = (int) $dias; // integer
var_dump($dias);
echo "<br>";

$bandera = "";
$bandera = (bool) $bandera;
var_dump($bandera);
echo "<br>";
// falso cuando es 0 ó vacío
// verdadero cuando es distinto de 0 ó tiene contenido