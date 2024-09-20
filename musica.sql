-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-09-2024 a las 13:32:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos musica`
--

CREATE TABLE `generos musica` (
  `pop` int(11) NOT NULL,
  `rock` int(11) NOT NULL,
  `salsa` int(11) NOT NULL,
  `bachata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //aqui van los nombres de usuario
    $username = "ANDREA MENDOZA";
    $username = "BRENDA BALANZAR";
    $username = "ZABDI BERENICE";
    $username = "SOFIA BARTOLO";
    $username = "AXEL LÓPEZ";
    //aqui van todas las contraseñas de usuarios
    $password = "andy4419";
    $password = "brenda4520";
    $password = "zabdi4621";
    $password = "sofia4722";
    $password = "axel4823";
    
    if($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION['loggedin'] = true;
        header("location: welcome.php");
        exit;
    } else{
        $error = "Usuario o contraseña incorrectos.";
    }
}
//aqui comensamos con el emaquetado
?>
<DOCTYPE html>
    <html lang="es">
        <head>
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
