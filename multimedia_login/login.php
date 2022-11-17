<?php

$mysqli = new mysqli("localhost","root","","multimedia_login");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$email = $_POST["email"];
$password = $_POST["password"];



// echo $email;
// echo $password;


// Perform query
if ($result = $mysqli -> query("SELECT email, password FROM user WHERE '$email' = email")) {
    echo "Returned rows are: " . $result -> num_rows;
    if($result -> num_rows == 1){

        $obj = $result->fetch_object();

        echo $obj->password;
        echo "<br>";

        $password_safe = password_verify($password, $obj->password);

        if ($password_safe) {
            echo "Contraseña Valida";
            setcookie("EMAIL", $email, time()+3600);
        }


    }
    
} else{
    echo "Error en la consulta";
}
  
$mysqli -> close();