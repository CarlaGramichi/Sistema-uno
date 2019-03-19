<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT id,nombre,comentario FROM comentarios ");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<h1 class="mt-5">Comentarios registrados:</h1>

<table class="table table-striped table-bordered " cellspacing="10">
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
                <form action="<?= ROOT ?>/ver_comentario.php?id=<?= $comenta['id'] ?>" method="post">
                    <button type="submit" class="btn btn-success btn-sm">Ver&emsp;<span class="fa fa-eye"></span></button>
                </form>
            </td>

            <td class="text-center">
                <form action="<?= ROOT ?>/editar_comentario.php?id=<?= $comenta['id'] ?>" method="post">
                    <button type="submit" class="btn btn-primary btn-sm">Editar&emsp;<span class="fa fa-edit"></span></button>
                </form>
            </td>

            <td class="text-center">
                <form action="<?= ROOT ?>/eliminar_comentario.php?id=<?= $comenta['id'] ?>" method="post">
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar&emsp;<span class="fa fa-trash"></span></button>
                </form>
            </td>

        </tr>

    <?php endforeach ?>

    </tbody>

</table>

<h4><? echo $_REQUEST ["mensaje2"] ?></h4>

<a href="<?= ROOT ?>" class="btn btn-info"><span class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php'; ?>