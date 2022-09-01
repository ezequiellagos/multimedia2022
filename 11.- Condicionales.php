<?php

// Condicionales

$numero_1 = 7;
$numero_2 = 4;

if ($numero_1 < $numero_2) {
    echo "$numero_1 es menor que $numero_2";
} elseif ($numero_1 == $numero_2) {
    echo "$numero_1 y $numero_2 son iguales";
} else {
    echo "No se cumplen las condiciones";
}

// opcion 1
if (condition) {
    # code...
}

// opcion 2
if (condition) {
    # code...
} else {
    # code...
}

// opcion 3
if (condition) {
    # code...
} elseif (condition) {
    # code...
}

// opcion 4
if (condition) {
    # code...
} elseif (condition) {
    # code...
} elseif (condition) {
    # code...
}

if (true and (true or false)) {
    # code...
}