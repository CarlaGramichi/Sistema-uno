<?php
require 'conexion.php';

$con = conectar();
$consulta = $con->query("SELECT *
FROM posts");

$posts = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(
    [
        'data' => $posts,
        'recordsFiltered'=>1000,

    ]);

?>