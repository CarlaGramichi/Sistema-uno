<?php

require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT comentario FROM comentarios  WHERE id = {$_REQUEST['id']}");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<body class="container">

<h1>Modificar Comentario:</h1>

<form action="recepcion_edicion.php/?id=<?= $_REQUEST['id']?>" method="post">

    <?php foreach ($coment as $comenta): ?>
        <div class="form-group col-sm-6">
         <h5>Comentario:</h5>
            <textarea name="comentario" class="form-control" cols="25" rows="6" > <?=$comenta['comentario']?></textarea>
        </div>
    <?php endforeach; ?>

    <button type="submit" class="btn btn-primary">Guardar Comentario</button>
</form>

<?php require 'plantillas/footer.php'; ?>


