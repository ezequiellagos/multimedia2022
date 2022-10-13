<?php

// Modo de apertura de archivos
//  r  Solo lectura
//  r+ Lectura y escritura
//  w  Solo escritura. Sobrescribe el archivo si existe. Crea el archivo si no existe
//  w+ Escritura y lectura. Sobrescribe el archivo si existe. Crea el archivo si no existe
//  a  Añadido (agregar contenido). Crea el archivo si éste no existe
//  a+ Añadido (agregar contenido) y lectura. Crea el archivo si éste no existe.

// Leer archivo
$archivo = fopen("archivos/archivo.txt", "r");

while(!feof($archivo)){
    echo fgets($archivo) . "<br>";
}

fclose($archivo);

// Escribir archivo
$archivo = fopen("archivos/archivo_2.txt", "a");
fwrite($archivo, "wwwwwwwww" . PHP_EOL);
fwrite($archivo, "aaaaaaaaaaaaa" . PHP_EOL);
fclose($archivo);