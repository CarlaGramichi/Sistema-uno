<?php
session_start();
require 'conexion.php';
$conn = conectar();
$consulta = $conn->query("INSERT INTO comentarios(nombre,apellido,email,comentario) VALUES('{$_REQUEST['nombre']}','{$_REQUEST['apellido']}','{$_REQUEST['email']}','{$_REQUEST['comentario']}')");
if (!$consulta) {
    var_dump($conn->errorInfo());
} else {
    header("Location:" . ROOT . "/?mensaje=Los datos se guardaron correctamente.&error[]=error1&error[]=error2&error[]=error3");
}

?>