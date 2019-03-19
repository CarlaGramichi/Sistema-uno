<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT id,nombre,apellido,email,comentario FROM comentarios  WHERE id = {$_REQUEST['id']}");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<br>
<div class="card border-info mb-3" style="max-width: 40rem;">
    <div class="card-header">Comentario</div>
    <div class="card-body text-info">
        <h5 class="card-title">Datos</h5>
        <?php foreach ($coment as $comenta): ?>
            <p class="card-text">ID: <span><?= $comenta['id'] ?></span></p>
            <p class="card-text">Nombre: <span><?= $comenta['nombre'] ?></span></p>
            <p class="card-text">Apellido: <span><?= $comenta['apellido'] ?></span></p>
            <p class="card-text">Email: <span><?= $comenta['email'] ?></span></p>
            <p class="card-text">Comentario: <span><?= $comenta['comentario'] ?></span></p>
        <?php endforeach ?>
    </div>
</div>
<a href="<?= ROOT ?>/listado_comentarios.php" class="btn btn-info"><span class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php'; ?>
