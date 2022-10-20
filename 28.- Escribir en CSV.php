<?php

// Escribir a un archivo CSV

$lista = [
    ['aaa', 'bbb', 'ccc'],
    ['123', '456', '789'],
    ['zzz', 'yyy']
];

$archivo = fopen('archivos/fichero.csv', 'w');

foreach($lista as $campos){
    fputcsv($archivo, $campos);
}

fclose($archivo);