<?php

// Arreglos

//Ejemplo 1
$arreglo = array("Pedro", "Juan", "Diego");
echo "<pre>";
print_r($arreglo);
echo "</pre>";

// Ejemplo 2
$arreglo_2 = array(
    "Juan" => "Perez",
    "Edad" => 20,
    "Estatura" => 12.5
);

echo "<pre>";
print_r($arreglo_2);
echo "</pre>";

// Iterar un arreglo
$arreglo_3 = [
    "nombre" => "Juan Perez",
    "edad" => 21,
    "ocupacion" => "Desarrollador Web"
];

foreach($arreglo_3 as $key => $value){
    echo $key . ": " .  $value ."<br>";
}

// Arreglo de arreglos
$arreglo_4 = [
    [
        "nombre" => "Juan Perez",
        "edad" => 21,
        "ocupacion" => "Desarrollador Web"
    ],
    [
       "nombre" => "Pedro",
        "edad" => 36,
        "ocupacion" => "Vendedor" 
    ],
    [
       "nombre" => "Diego",
        "edad" => 25,
        "ocupacion" => "Estudiante" 
    ]
];

foreach($arreglo_4 as $key => $value){
    foreach($value as $key_2 => $value_2){
        echo $key_2 . ": " . $value_2 . "<br>";
    }
    echo "<hr>";
}

