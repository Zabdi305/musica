<?php 
    include '/include/querys.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registro de Usuario</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col text-end">
                <a href="index.php" type="button" class="btn btn-outline-primary mb-1">
                    <svg class="bi" width="18" height="18" fill="currentColor">
                    </svg>
                    <a href="../include/login.html">Inicio de Sesion</a>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3">
                <div id="alert-container"></div>
                <div class="row mt-3">
                    <h1 class="display-6 fs-5 text-center">Registro de usuario</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-sm-10 col-md-8 col-lg-8 mt-3">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="row mt-2">
                                <input type="UserNick" name="userNick" id="usernick" class="form-control" placeholder="Nombre de Usuario" required>
                                <div class="invalid-feedback">Por favor ingresa tu Nombre de usuario.</div>
                            </div>
                            <div class="row mt-2">
                                <input type="password" name="passUser" id="VerPassWord" class="form-control" placeholder="Password" required>
                                <div class="invalid-feedback">Por favor ingresa tu password.</div>
                            </div>

                            <div class="row mt-2">
                                <input type="submit" value="Registrar" name="btnRegistrar" id="submitBtn" class="btn btn-sm btn-primary" href="../principal.html">
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'modulo/footer.php'; ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>