<?php
include 'conexion.php'; // Asegúrate de que este archivo incluya la conexión correctamente

if (isset($_POST['btnRegistrar'])) {
    // Recibir los datos del formulario de registro
    $userNick = $_POST['userNick'];
    $passUser = $_POST['passUser'];
    
    // Encriptar la contraseña
    $passUser = password_hash($passUser, PASSWORD_DEFAULT);

    // Consulta de inserción para registrar al usuario
    $query = "INSERT INTO usuarios (nombreU, password) VALUES (?, ?)";

    // Preparar y ejecutar la consulta para evitar inyecciones SQL
    $stmt = $Connect->prepare($query);
    $stmt->bind_param("ss", $userNick, $passUser);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Registro exitoso.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error en el registro: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
?>
