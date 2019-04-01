<?php

require 'plantillas/cabecera.php';
$con = conectar();
$consulta = $con->query("SELECT id,nombre,apellido,apellido,dni,fecha_nac,ocupacion,email,nombre_usuario,biografia,fecha_creacion FROM
usuarios WHERE id = {$_REQUEST['id']}");
$usuario = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<br>
<div class="card text-center text-info border-info">
    <div class="card-header">
        <i class="fas fa-user-circle" style="font-size: 50px"></i>
    </div>
    <div class="card-body ">
        <h3 class="card-title">Datos</h3>
        <p class="card-text "><strong>ID: </strong><em><?= $usuario['id'] ?></em></p>
        <p class="card-text "><strong>Nombre: </strong><em><?= $usuario['nombre'] ?></em></p>
        <p class="card-text "><strong>Apeliido: </strong><em><?= $usuario['apellido'] ?></em></p>
        <p class="card-text "><strong>DNI: </strong><em><?= $usuario['dni'] ?></em></p>
        <p class="card-text "><strong>Fecha de Nacimiento: </strong><em><?= $usuario['fecha_nac'] ?></em></p>
        <p class="card-text "><strong>Ocupación: </strong><em><?= $usuario['ocupacion'] ?></em></p>
        <p class="card-text "><strong>Email: </strong><em><?= $usuario['email'] ?></em></p>
        <p class="card-text "><strong>Nombre de Usuario: </strong><em><?= $usuario['nombre_usuario'] ?></em></p>
        <p class="card-text "><strong>Biografía: </strong><em><?= $usuario['biografia'] ?></em></p>
    </div>
    <div class="card-footer text-muted">
        <p class="card-text text-info">Fecha Creación: <span><?= $usuario['fecha_creacion'] ?></span></p>
    </div>
</div>
<br>
<a href="<?= ROOT ?>" class="btn btn-info"><span
            class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php'; ?>


