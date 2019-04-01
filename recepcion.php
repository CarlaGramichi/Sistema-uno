<?php
session_start();
require 'conexion.php';
$conn = conectar();
$consulta = $conn->query("INSERT INTO comentarios(comentario,usuario_id,post_id) VALUES('{$_REQUEST['comentario']}',
'{$_SESSION['usuario']['id']}','{$_REQUEST['post_id']}')");

if ($consulta) {
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    die(var_dump($conn->errorInfo()));
}

//$_REQUEST['usuario_id'] = $_SESSION['usuario']['id'];
//$_REQUEST['comentario'];
//
//
//if (!$conn->query(insertar('comentarios', $_REQUEST))) {
//    var_dump($conn->errorInfo());
//} else {
//    header("Location:" . ROOT . "/?mensaje=El post se cargó correctamente.");
//}


?>