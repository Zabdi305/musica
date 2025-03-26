<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #282847);
            color: white;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
        }

        .form-container h1 {
            font-family: 'Arial Black', sans-serif;
            color: #ffcc00;
        }

        .form-container label {
            color: #b3b3ff;
            font-weight: bold;
        }

        .form-control {
            background-color: #2c2c3e;
            color: white;
            border: 1px solid #444;
        }

        .form-control:focus {
            border-color: #ffcc00;
            box-shadow: 0 0 5px #ffcc00;
        }

        .btn-primary {
            background-color: #ffcc00;
            border-color: #ffcc00;
            color: black;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #e6b800;
        }

        .text-muted a {
            color: #ffcc00;
            text-decoration: none;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }

        footer {
            background: #1e1e2f;
            color: #b3b3ff;
        }

        img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="validar.php" method="post" class="form-container">
                    <h1 class="text-center mb-4">Login</h1>
                    <center>
                        <img src="img/uzi.jpeg" alt="Avatar">
                    </center>

                    <div class="form-group mt-4">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingrese su nombre" name="usuario" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" placeholder="Ingrese su contraseña" name="contraseña" required>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </div>
                    <div class="mt-3 text-center">
                        <p>¿No tienes una cuenta? <a href="./registro.php" class="text-muted">Registrarse</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 mt-5">
       
    </footer>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>