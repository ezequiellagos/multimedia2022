<?php

/*
1) Crear un formulario que envíe un nombre, apellido y foto a un archivo de PHP que verifique que se esta mandando una imagen y no otro tipo de archivo. Y guardar esos datos en la base de datos, en una tabla que tenga el id, nombre, apellido y la ruta del archivo que se envió.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="18.2- Tarea.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <label for="foto">Foto: </label>
        <input type="file" id="foto" name="foto">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>