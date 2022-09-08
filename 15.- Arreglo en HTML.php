<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arreglo_4 = [
        ["nombre" => "Juan Perez", "edad" => 21,"ocupacion" => "Desarrollador Web"],
        ["nombre" => "Pedro", "edad" => 36, "ocupacion" => "Vendedor"],
        ["nombre" => "Diego", "edad" => 25, "ocupacion" => "Estudiante"]
    ];

    foreach ($arreglo_4 as $key => $value) {
        echo "<ul>";
        foreach ($value as $key_2 => $value_2) {
            echo "<li>$key_2 : $value_2</li>";
        }
        echo "</ul>";
    }

    ?>
</body>
</html>