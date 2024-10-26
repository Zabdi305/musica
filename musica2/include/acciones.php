<?php
include 'conexion.php'; // Asegúrate de que este archivo incluya la conexión correctamente

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario de login
    $userName = $_POST['UserName'];
    $userPass = $_POST['UserPass'];

    // Consulta para verificar el usuario en la base de datos
    $query = "SELECT password FROM usuarios WHERE nombreU = ?";
    $stmt = $Connect->prepare($query);
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Vincular el resultado y verificar la contraseña
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        if (password_verify($userPass, $hashedPassword)) {
            echo "<div class='alert alert-success'>Inicio de sesión exitoso.</div>";
            // Redirigir al usuario a la página principal o dashboard
            header("Location: ../principaM.html");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Contraseña incorrecta.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Usuario no encontrado.</div>";
    }

    $stmt->close();
}
?>
