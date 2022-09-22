<?php

// Inlcude
// Cuando no encuentra archivo arroja un Warning
include("19.2 Archivo a incluir.php");

echo "<br>";

// Require
// Cuando no encuentra el archivo arroja un Fatal Error
require("19.2 Archivo a incluir.php");

echo "<br> Soy el final del archivo";

// Include once
include_once("19.2 Archivo a incluir.php");

// Require once
require_once("19.2 Archivo a incluir.php");