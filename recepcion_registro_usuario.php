<?php
require 'plantillas/cabecera.php';
$conn = conectar();
$consulta = $conn->query("INSERT INTO usuarios(nombre,apellido,dni,fecha_nac,ocupacion,email,nombre_usuario,contrasena,biografia) VALUES('{$_REQUEST['nombre']}','{$_REQUEST['apellido']}','{$_REQUEST['dni']}','{$_REQUEST['fecha_nac']}','{$_REQUEST['ocupacion']}','{$_REQUEST['email']}','{$_REQUEST['nombre_usuario']}','{$_REQUEST['contrasena']}','{$_REQUEST['biografia']}')");






?>