<?php

// <, >, <=, >=, ==, !=, ===

$a = 5;
$b = 5;
$b_2 = "5";
$c = 9;

// == igual, no compara tipos de datos
var_dump($a == $b);
echo "<br>";
var_dump($a == $b_2);
echo "<br>";

// === identico, compara tipos de datos
var_dump($a === $b);
echo "<br>";
var_dump($a === $b_2);
echo "<br>";

// != distinto, no compara tipos de datos
var_dump($a != $b);
echo "<br>";
var_dump($a != $b_2);
echo "<br>";

// != distinto, compara tipos de datos
var_dump($a !== $b);
echo "<br>";
var_dump($a !== $b_2);
echo "<br>";

// < menor que
var_dump($a < $b);
echo "<br>";
var_dump($a < $c);
echo "<br>";

// <= menor que
var_dump($a <= $b);
echo "<br>";
var_dump($a <= $c);
echo "<br>";

// > mayor que
var_dump($a > $b);
echo "<br>";
var_dump($a > $c);
echo "<br>";

// >= menor que
var_dump($a >= $b);
echo "<br>";
var_dump($a >= $c);
echo "<br>";