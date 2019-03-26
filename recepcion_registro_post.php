<?php

require 'conexion.php';

$conn = conectar();
$_REQUEST['usuario_id'] = $_SESSION['usuario']['id'];

if (!$conn->query(insertar('posts', $_REQUEST))) {
    var_dump($conn->errorInfo());
} else {
    header("Location:" . ROOT . "/?mensaje=El post se cargó correctamente.");
}
?>