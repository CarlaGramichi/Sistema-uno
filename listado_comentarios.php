<?php
session_start();
require 'conexion.php';
$con = conectar();

$consulta = $con->query("SELECT nombre,comentario FROM comentarios ");

$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
require 'plantillas/cabecera.php';
?>

<body class="container">
<h1>Comentarios registrados:</h1>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Comentario</th>
    </tr>
    </thead>
    <?php foreach ($coment as $comenta): ?>
    <tr>
        <td><?= $comenta['nombre'] ?></td>
        <td><?= $comenta['comentario'] ?></td>
    </tr>
    <?php endforeach;