<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pepsico";

// Se crea la conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Se verifica conexión
if (!$conn) {
  die("Error en la conexión: " . mysqli_connect_error());
}
?>