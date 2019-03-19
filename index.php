<?php
session_start();
session_destroy();

require 'conexion.php';
require 'plantillas/cabecera.php';

?>
<body class="container">

<h1>Bienvenido</h1>
<hr>
<h3>Por favor ingrese los siguientes datos:</h3>

<form action="<?= ROOT ?>/recepcion.php" method="get">
    <div class="form-group row">
        <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>
        <div class="form-group col-sm-6">
            <input type="text" name="apellido" placeholder="Apellido" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group row">
        <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>
        <div class="form-group col-sm-6">
            <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>
        <div class="form-group col-sm-6">
        <textarea name="comentario" placeholder="Comentario" cols="25" rows="6" class="form-control"
                  required></textarea>
        </div>
    </div>
    <?php if ($_REQUEST['mensaje1']): ?>
        <div class="alert alert-success col-sm-6 font-weight-bold" role="alert">
            <span> <i class="fas fa-check"></i> </span>
            <?= $_REQUEST['mensaje1'] ?>
        </div>
    <? endif ?>

    <br>
    <button type="submit" class="btn btn-info col-sm-6">Guardar Datos</button>

</form>


<form action="<?= ROOT ?>/listado_comentarios.php" method="get">
    <article>
        <h4>Para ver los comentarios registrados: </h4>
        <button type="submit" class="btn btn-primary">Ver comentarios</button>
    </article>
</form
</body>
</html>

