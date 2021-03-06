<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT id,nombre,comentario,fecha_creacion FROM comentarios ");
$comentarios = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>


<?php if (isset($_REQUEST['mensaje'])): ?>
    <div class="alert alert-success col-sm-6 font-weight-bold" role="alert">
        <span> <i class="fas fa-check"></i> </span>
        <?= $_REQUEST['mensaje'] ?>
    </div>
<?php endif ?>


<?php if (isset($_SESSION['usuario'])): ?>

    <h4 class="mt-5">Comentarios registrados:</h4>

    <table class="table table-striped table-bordered " cellspacing="10">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Comentario</th>
            <th>Fecha Creación</th>
            <th colspan="3"></th>

        </tr>
        </thead>

        <tbody>

        <?php foreach ($comentarios as $comentario): ?>
            <tr>
                <td><?= $comentario['id'] ?></td>
                <td><?= $comentario['nombre'] ?></td>
                <td><?= $comentario['comentario'] ?></td>
                <td><?= $comentario['fecha_creacion'] ?></td>

                <td class="text-center">
                    <form action="<?= ROOT ?>/ver_comentario.php?id=<?= $comentario['id'] ?>" method="post">
                        <button type="submit" class="btn btn-success btn-sm">Ver&emsp;<span class="fa fa-eye"></span>
                        </button>
                    </form>
                </td>

                <td class="text-center">
                    <form action="<?= ROOT ?>/editar_comentario.php?id=<?= $comentario['id'] ?>" method="post">
                        <button type="submit" class="btn btn-primary btn-sm">Editar&emsp;<span
                                    class="fa fa-edit"></span></button>
                    </form>
                </td>

                <td class="text-center">
                    <form action="<?= ROOT ?>/eliminar_comentario.php?id=<?= $comentario['id'] ?>" method="post">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar&emsp;<span
                                    class="fa fa-trash"></span></button>
                    </form>
                </td>

            </tr>

        <?php endforeach ?>

        </tbody>

    </table>

<?php else:?>

    <br><h5>Para ver los comentarios debes estar registrado. Inicia <a href="<?= ROOT ?>" class="text-info" data-toggle="modal"
                                       data-target="#exampleModal">Sesión acá</a> o <a
                href="<?= ROOT ?>/registro_usuario.php" class="text-info">Crea una cuenta acá.</a></h5>

<?php endif ?>

    <br><a href="<?= ROOT ?>" class="btn btn-info"><span class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php'; ?>