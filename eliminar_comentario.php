<?php

require 'conexion.php';

$con = conectar();

$consulta = $con->prepare("DELETE FROM comentarios WHERE id = {$_REQUEST['id']}");
$resultado = $consulta->execute();

if($resultado){
    Header('Location: /Sistema-uno/listado_comentarios.php');
}