<?php
session_start();
require 'conexion.php';
$con = conectar();

$consulta = $con->query("SELECT id,nombre,comentario FROM comentarios ");

$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
require 'plantillas/cabecera.php';
?>

<body class="container">
<h1>Comentarios registrados:</h1>

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Comentario</th>
        <th colspan="3"></th>

    </tr>
    </thead>

    <tbody>

    <?php foreach ($coment as $comenta): ?>
        <tr>
            <td><?= $comenta['id'] ?></td>
            <td><?= $comenta['nombre'] ?></td>
            <td><?= $comenta['comentario'] ?></td>

            <td class="text-center">
                <form action="<?=ROOT?>/ver_comentario.php" method="get">
                    <button type="submit" class="btn btn-primary">Ver</button>
                    <span class="glyphicon glyphicon-trash"></span>
                </form>
            </td>

            <td class="text-center">
                <form action="<?=ROOT?>/editar_comentario.php" method="get">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <span class="glyphicon glyphicon-trash"></span>
                </form>
            </td>

            <td class="text-center">
                <form action="<?=ROOT?>/eliminar_comentario.php?id=<?= $comenta['id'] ?>" method="post">
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    <span class="glyphicon glyphicon-trash"></span>
                </form>
            </td>

        </tr>

    <?php endforeach ?>

    </tbody>

</table>

<a href="<?=ROOT?>">Volver</a>

</body>