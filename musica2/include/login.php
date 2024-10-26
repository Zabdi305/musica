<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Iniciar Sesión</h3>
                        <form action="login.php" method="POST" novalidate>
                            <!-- Campo Usuario -->
                            <div class="mb-3">
                                <label for="UserName" class="form-label">Usuario</label>
                                <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Usuario" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa tu nombre de usuario.
                                </div>
                            </div>
                            <!-- Campo Contraseña -->
                            <div class="mb-3">
                                <label for="UserPass" class="form-label">Contraseña</label>
                                <input type="password" name="UserPass" id="VerPassWord" class="form-control" placeholder="Contraseña" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa tu contraseña.
                                </div>
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary w-100" href="../principaM.html">Iniciar sesión</a><br>
                                </li>
                                <li class="nav-item"></li>
                                <a class="nav-link btn btn-primary w-100" href="./registro.html">REGISTRARTE</a>
                                </li>
                            </ul>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="librerias/bootstrap.bundle.min.js"></script>
    <!-- Incluye los scripts de Bootstrap -->
</body>

</html>