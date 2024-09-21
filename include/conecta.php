<?php
$SERVER = "localhost";
$usuario = "root";
$pass = "";
$bd = "usuarios";

$conn = mysqli_connect($SERVER, $usuario, $pas, $bd);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);