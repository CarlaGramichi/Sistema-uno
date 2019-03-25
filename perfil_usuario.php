<?php

require 'plantillas/cabecera.php';
$con = conectar();
$consulta = $con->query("SELECT id,nombre,apellido,email,fecha_creacion FROM 
usuarios WHERE id = {$_SESSION['usuario']['id']}");
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);


var_dump($usuario);