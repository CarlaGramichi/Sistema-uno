<?php
require 'conexion.php';
$con = conectar();
$consulta = $con->prepare("DELETE FROM comentarios WHERE id = {$_REQUEST['id']}");
$resultado = $consulta->execute();

if ($resultado) {
    Header("Location: " . ROOT . "/listado_comentarios.php");
}