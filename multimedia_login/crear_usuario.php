<?php

$mysqli = new mysqli("localhost","root","","multimedia_login");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$email = "bachelet@gmail.com";
$password = "123456";
$name = "Michel";

echo $email;
echo "<br>";
echo $password;
echo "<br>";


$password_md5 = md5($password);
echo "MD5: " . $password_md5;
echo "<br>";

$options = [
    'cost' => 12,
];
$password_hash = password_hash($password, PASSWORD_BCRYPT, $options);
echo "Password Hash: " . $password_hash;
echo "<br>";



// Perform query
$query = "INSERT INTO user ('name', 'email', 'password', 'rol_id') VALUES ('$name', '$email', '$password_hash', 1)";

echo "<br>". $query . "<br>";
if ($result = $mysqli -> query($query)) {
    echo "Returned rows are: " . $result -> num_rows;
    
} else{
    echo "Error en la consulta";
}
  
$mysqli -> close();