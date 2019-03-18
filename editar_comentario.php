<?php
session_start();
require 'conexion.php';

$con = conectar();
$consulta = $con->query("SELECT comentario FROM comentarios  WHERE id = {$_REQUEST['id']}");
$coment = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<body class="container">
<h1>Modificar Comentario:</h1>
<form action="/formularios/recepcion_modificacion.php/?id=<?= $_REQUEST['id']?>" method="post">
    <?php foreach ($coment as $comenta): ?>
        <div class="form-group col-sm-6">
            <textarea name="comentario" class="form-control" ><?=$comenta['comentario']?></textarea>
        </div>
    <?php endforeach; ?>
   <br><button type="submit" class="btn btn-primary">Guardar Comentario</button>
</form>
</body>


