<?php
session_start();
session_destroy();

require 'plantillas/cabecera.php';

?>
<body class="container">

<h1>Bienvenido</h1>
<h3>Por favor ingrese los siguientes datos:</h3>

<form action="/Sistema-uno/recepcion.php" method="get">
    <div class="form-group col-sm-6">
        <input type="text" name="nombre" placeholder="Nombre" class="form-control" >
    </div> <br>
    <div class="form-group col-sm-6">
        <input type="text" name="apellido" placeholder="Apellido" class="form-control">
    </div> <br>
    <div class="form-group col-sm-6">
        <input type="email" name="email" placeholder="Email" class="form-control">
    </div> <br>
    <div class="form-group col-sm-6">
        <input type="text" name="comentario" placeholder="Comentario" class="form-control">
    </div> <br>
    <button type="submit" class="btn btn-primary btn-block">Guardar Datos</button>

</form>
 <br> <?php
echo $_REQUEST ["mensaje1"];
?>
<form action="/Sistema-uno/listado_comentarios.php" method="get">
    <article>
        <h4>Para ver los comentarios registrados: </h4>
        <button type="submit" class="btn btn-warning">Ver comentarios</button>
    </article>
</form>
</body>
</html>

