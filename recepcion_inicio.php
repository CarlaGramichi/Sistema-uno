<?php
require 'plantillas/cabecera.php';

$conn = conectar();

$consulta = $conn->prepare("SELECT nombre FROM usuarios  WHERE nombre_usuario='{$_REQUEST['nombre_usuario']}' AND contrasena= '{$_REQUEST['contrasena']}'");
$consulta->execute();
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    header("Location:".ROOT."/?error1= Nombre y/o contraseña incorrectos.");
} else {
    header("Location:".ROOT."");
}
?>
