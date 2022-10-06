<?php

$zipcode = "";
if (isset($_POST['zipcode'])) {
    $zipcode = $_POST['zipcode'];
}

echo "Hola mundo $zipcode";