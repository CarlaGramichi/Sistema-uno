<?php
require 'conexion.php';

$conn = conectar();

$consulta = $conn->prepare("
          SELECT 
             id,
             nombre,
             apellido,
             dni,
             fecha_nac,
             ocupacion,
             email,
             nombre_usuario,
             foto_perfil,
             biografia,
             fecha_creacion 
          FROM usuarios  
          WHERE (nombre_usuario='{$_REQUEST['nombre_usuario']}' OR email = '{$_REQUEST['nombre_usuario']}') 
          AND contrasena= '{$_REQUEST['contrasena']}'
");
$consulta->execute();
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    header("Location:".ROOT."/?error1= Nombre y/o contraseña incorrectos.");
} else {
    header("Location:".ROOT."");
}
?>
