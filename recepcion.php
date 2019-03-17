<?php
session_start();
require 'conexion.php';
$conn = conectar();

$consulta = $conn ->prepare("SELECT * FROM comentarios");
$consulta->execute();
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
$consulta = $conn ->query("INSERT INTO comentarios(nombre,apellido,email,comentario) VALUES('{$_REQUEST['nombre']}','{$_REQUEST['apellido']}','{$_REQUEST['email']}','{$_REQUEST['comentario']}')");
if (!$consulta) {
    var_dump($conn->errorInfo());
} else {
    header("Location:/Sistema-uno/index.php/?mensaje1=Los datos se guardaron correctamente.");
}


//echo $_REQUEST["nombre"];

?>