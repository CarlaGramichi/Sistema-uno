<?php require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT p.id,p.titulo,p.extracto,p.cuerpo,p.fecha_creacion,
u.nombre as autor,
u.id as autor_id
FROM posts as p 
JOIN usuarios AS u ON u.id = p.usuario_id
WHERE p.id= {$_REQUEST['id']}
");

if ($consulta) {
    $post = $consulta->fetch(PDO::FETCH_ASSOC);
} else {
    var_dump($con->errorInfo());
    die();
}
//FROM posts as p
//JOIN usuarios as u ON u.id = p.usuario_id
?>
    <br xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-sm-8">
            <div class="card text-center ">
                <div class="card-header ">
                    <p class="card-text float-left">
                        <strong>Autor: </strong>
                        <em><a href="<?= ROOT ?>/perfil_usuario_post.php?id=<?= $post['autor_id'] ?>"
                               class="text-info"><?= $post['autor'] ?></a></em>
                    </p>

                </div>
                <div class="card-body ">
                    <img src="imagenes/imagen4.jpg" class="card-img-top" alt="..">
                    <h3 class="card-title"><?= $post['titulo'] ?></h3>
                    <h6 class="card-text"><?= $post['extracto'] ?></h6>
                    <p class="card-text text-justify "><em><?= $post['cuerpo'] ?></em></p>
                </div>
                <div class="card-footer text-muted">
                    <p class="card-text text-info">Fecha Creación:
                        <span><?= formatoFecha($post['fecha_creacion']) ?></span>
                    </p>
                </div>
            </div>
            <br>
            <?php if (isset($_SESSION['usuario'])): ?>
                <h4>No olvides de dejar tu comentario:</h4>
                <div class="row justify-content-center">
                    <form action="<?= ROOT ?>/recepcion.php?post_id=<?= $post['id'] ?>"
                          method="post" class="col-sm-6 mt-4">
                        <div class="form-group row">
                            <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>
                            <div class="form-group col-sm-10">
                <textarea name="comentario" placeholder="Comentario" cols="25" rows="6" class="form-control"
                    <?= !isset($_SESSION['usuario']) ? 'disabled' : '' ?>></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info col-sm-11"
                            <?= !isset($_SESSION['usuario']) ? 'disabled' : '' ?>>Comentá
                        </button>
                </div>
            <?php else: ?>
                <p><strong>No estás registrado. Si quieres comentar el post
                        <a href="recepcion_inicio.php" data-toggle="modal" data-target="#exampleModal"
                           class="text-info">
                            Inicia sesión </a> o
                        <a href="registro_usuario.php" class="text-info">Registrate aquí.</a>
                    </strong></p>
            <?php endif;
            $con = conectar();
            $consulta = $con->query("SELECT c.comentario,c.fecha_creacion, u.nombre as nombre,u.id 
FROM comentarios as c
JOIN usuarios u ON c.usuario_id = u.id
 WHERE post_id ={$_REQUEST['id']} ORDER BY c.fecha_creacion ASC");
            $comentarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
//            var_dump($comentarios);
            ?>
            <br> <h4>Comentarios: </h4>

            <?php foreach ($comentarios as $comentario): ?>
                <div class="card border-info mb-3" style="max-width: 60rem;">
                    <div class="card-header"><em> <?=$comentario['nombre'] ?>&emsp;
                    <span><?= formatoFecha($comentario['fecha_creacion']) ?></em></span>
                    </div>
                    <div class="card-body text-info">
                        <h5 class="card-title"></h5>

                        <p class="card-text text-justify"><?= $comentario['comentario'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-sm-4">
            <?php include 'aside.php' ?>
        </div>

        </form>
    </div>
    <br>
    <a href="<?= ROOT ?>" class="btn btn-info"><span
                class="fa fa-arrow-left"></span>&emsp;Volver</a>

<?php require 'plantillas/footer.php';











