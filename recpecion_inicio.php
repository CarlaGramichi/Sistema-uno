<?php
require 'plantillas/cabecera.php';

$conn = conectar();

$consulta = $conn->prepare("SELECT nombre,apellido,dni FROM usuarios  WHERE email='{$_REQUEST['email']}' AND contrasena= '{$_REQUEST['contrasena']}'");
$consulta->execute();
$usuarios = $consulta->fetch(PDO::FETCH_ASSOC);
if (!$usuarios) {
    header("Location:".ROOT."/ver_comentario.php");
} else {
    $_SESSION['usuario'] = $usuarios;
    header("Location:".ROOT."");
}
?>
