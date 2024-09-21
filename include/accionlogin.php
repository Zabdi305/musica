<?php
if(isset($_POST['btn_ingresar'])){
    $usuario = $conecta->real_escape_string($_POST['usuario']);
    $pass = $conecta->real_escape_string($_POST['pass']);

    $consulta = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$pass'";
    
    $ejecuta = $conecta->query($consulta);

    if($ejecuta->num_rows > 0){
        $row = $ejecuta->fetch_assoc();
        $usuario = $row['usuario'];
        $pass = $row['password'];
        
        $_SESSION['usuario'] = $usuario;

        header("Location: App.php");
    } else {

        echo "Usuario o contraseña incorrectos.";
    }
} else {
    echo "Por favor, ingrese los datos.";
}
?>