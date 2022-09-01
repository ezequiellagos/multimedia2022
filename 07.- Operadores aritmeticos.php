<?php

// Operadores aritmeticos

$numero_1 = 5;
$numero_2 = 2;

// Suma
echo "Suma:";
echo $numero_1 + $numero_2;
echo "<br>";

// Resta
echo "Resta:";
echo $numero_1 - $numero_2;
echo "<br>";

// Multiplicación
echo "Multiplicación:";
echo $numero_1 * $numero_2;
echo "<br>";

// División parte entera
echo "División parte entera:";
echo $numero_1 / $numero_2;
echo "<br>";

// División módulo
echo "División módulo:";
echo $numero_1 % $numero_2;
echo "<br>";

// Potencia
echo "Potencia:";
echo $numero_1 ** $numero_2;
echo "<br>";

// Ejercicio: Calcular la raíz cuadrática
//formula: -b +/- raiz(b al cudrado - 4ac) /2a
// a=1 | b=-2 | c=1
$a = 1;
$b = -2;
$c = 1;

$x1 = ($b * -1) + (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);
$x2 = ($b * -1) - (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);

echo "X1 es: $x1 y X2 es: $x2";


