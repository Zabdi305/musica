<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../librerias/complementocss/complemento.css">
</head>

<body>
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post" class="container">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="pass">Contraseña:</label>
        <input type="password" id="pass" name="pass" required><br><br>

        <a class="link" href="./index.html" name="btn_ingresar">Iniciar Secion</a>
    </form>
</body>

</html>