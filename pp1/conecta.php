
<?php 
$Servidor ="localhost";
$UsuarioBd ="root";
$Passwordb ="";
$Bd ="loginus";
$conexion =mysqli_connect($Servidor,$UsuarioBd,$Passwordb,$Bd);
if($conexion->connect_error){
    die("conexion sin exito".$Conecta->connect_error);

 }

?>