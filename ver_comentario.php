<?php
session_start();
require 'conexion.php';
require 'plantillas/cabecera.php';
$con = conectar();
$consulta = $con->query("SELECT id,nombre,apellido,email,comentario FROM comentarios  WHERE id = {$_REQUEST['id']}");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
//var_dump($coment);
?>
<body class="container">
<h1>Datos de Comentario:</h1>

<table class="table table-striped table-bordered" cellspacing="10">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Comentario</th>
        <th colspan="3"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($coment as $comenta): ?>
        <tr>
            <td><?= $comenta['id'] ?></td>
            <td><?= $comenta['nombre'] ?></td>
            <td><?= $comenta['apellido'] ?></td>
            <td><?= $comenta['email'] ?></td>
            <td><?= $comenta['comentario'] ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<a href="<?= ROOT ?>/listado_comentarios.php">Volver</a>
</body>
