<?php 
include 'conecta.php';
include 'acciones.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1f1f2e, #2d2d4b);
            color: white;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
        }

        .form-container h1 {
            font-family: 'Verdana', sans-serif;
            color: #ff6f61;
            font-weight: bold;
        }

        .form-container label {
            color: #b3b3ff;
            font-weight: bold;
        }

        .form-control {
            background-color: #34344d;
            color: white;
            border: 1px solid #565676;
        }

        .form-control:focus {
            border-color: #ff6f61;
            box-shadow: 0 0 5px #ff6f61;
        }

        .btn-primary {
            background-color: #ff6f61;
            border-color: #ff6f61;
            color: white;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #e65b50;
        }

        .text-muted a {
            color: #ff6f61;
            text-decoration: none;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }

        img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        footer {
            background: #1f1f2e;
            color: #b3b3ff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center mb-4">
                <img src="img/cora.jpeg" alt="Avatar">
            </div>
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
                    <h1 class="text-center mb-4">Registro</h1>

                 
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="nombre" placeholder="Ingrese su nombre de usuario" required>
                    </div>

                 
                    <div class="form-group mt-3">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="password" placeholder="Ingrese su contraseña" required>
                    </div>

                   
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100" name="btnRegistra">Registrarse</button>
                    </div>

                    <div class="mt-3 text-center">
                        <p>¿Ya tienes una cuenta? <a href="./index.php" class="text-muted">Inicia sesión</a></p>
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