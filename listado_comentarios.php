<?php
session_start();
require 'conexion.php';
$con = conectar();

$consulta = $con->query("SELECT comentario FROM comentarios ");

$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
require 'plantillas/cabecera.php';
?>