<?php
  include'conecta.php';
  if(isset($_POST['btnRegistra'])){
    $Nombre = $conexion->real_escape_string($_POST['nombre']);
    $Password = $conexion->real_escape_string(md5($_POST['password']));
    // REGISTRAR 
    $Registro = "INSERT INTO usuarios(usuario,contraseña)VALUES('$Nombre','$Password')";
    $res = $conexion->query($Registro);
    if($res  > 0){
       echo "Registro correcto";
    }
  }
 
?>
