<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT  id,nombre,apellido,dni,fecha_nac,ocupacion,email,nombre_usuario,biografia,fecha_creacion FROM usuarios  WHERE id =;
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);