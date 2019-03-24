<?php
session_start();
require'conexion.php';
$con=conectar();
$consulta = $con->prepare("UPDATE comentarios SET comentario='{$_REQUEST['comentario']}' WHERE id = {$_REQUEST['id']} " );
$coment = $consulta->execute();

//var_dump($consulta->queryString);

if ($consulta){
    header("Location:". ROOT ."/listado_comentarios.php/?mensaje= Los datos se modificaron correctamente.");
}