<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT id,nombre,apellido,email,comentario,fecha_creacion 
FROM comentarios  WHERE id = {$_REQUEST['id']}");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<br>
<div class="card text-center text-info border-info">
    <div class="card-header">
        Comentario
    </div>
    <div class="card-body ">
        <h5 class="card-title">Datos</h5>
        <?php foreach ($coment as $comenta): ?>
            <p class="card-text ">ID: <em><?= $comenta['id'] ?></em></p>
            <p class="card-text ">Nombre: <em><?= $comenta['nombre'] ?></em></p>
            <p class="card-text">Apellido: <em><?= $comenta['apellido'] ?></em></p>
            <p class="card-text">Email: <em><?= $comenta['email'] ?></em></p>
            <p class="card-text">Comentario: <em><?= $comenta['comentario'] ?></em></p>
        <?php endforeach ?>

    </div>
    <div class="card-footer text-muted">
        <?php foreach ($coment as $comenta): ?>
            <p class="card-text">Fecha Creación: <span><?= $comenta['fecha_creacion'] ?></span></p>
        <?php endforeach; ?>
    </div>
</div>
<br>
<a href="<?= ROOT ?>/listado_comentarios.php" class="btn btn-info"><span
            class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php'; ?>
