<?php

// https://github.com/ezequiellagos/AyudantiaMultimedia/blob/master/Clases/2018/2018-12-06/upload_file.php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$foto = $_FILES['foto'];

$nombre_archivo = "imagen";

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($foto["tmp_name"]);

if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
} else {
    echo "File is not an image.";
}

move_uploaded_file($foto["tmp_name"], $target_file);
echo "Imagen " . $foto['name'];

//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia2022";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO perfil (nombre, apellido, url_foto) 
            VALUES('$nombre', '$apellido', '$target_file')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}


