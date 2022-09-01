<?php

// Ciclos

// While
// Ejemplo 1
$i = 1;
while($i <= 10){
    echo $i . " ciclo while <br>";
    $i++;
}

// Ejemplo 2
$i = 10;
while($i >= 1):
    echo $i . " ciclo while ejemplo 2 <br>";
    $i--;
endwhile;


// For
for($i = 1; $i <= 10; $i++){
    echo $i . " ciclo for";
}