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
    <br>
    <div class="row">
        <div class="col-sm-8">
            <div class="card text-center ">
                <div class="card-header ">
                    <p class="card-text float-left">
                        <strong>Autor: </strong>
                        <em><a href="<?= ROOT ?>/perfil_usuario_post.php?id=<?= $post['autor_id'] ?>" class="text-info"><?= $post['autor'] ?></a></em>
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
        </div>
        <div class="col-sm-4">
            <?php include 'aside.php' ?>
        </div>
    </div>
    <br>
    <a href="<?= ROOT ?>" class="btn btn-info"><span
                class="fa fa-arrow-left"></span>&emsp;Volver</a>


<?php require 'plantillas/footer.php';











