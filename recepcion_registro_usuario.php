<?php
require 'plantillas/cabecera.php';
$conn = conectar();
$consulta = $conn->query("INSERT INTO usuarios(nombre,apellido,email,comentario) VALUES('{$_REQUEST['nombre']}','{$_REQUEST['apellido']}','{$_REQUEST['email']}','{$_REQUEST['comentario']}')");



?>