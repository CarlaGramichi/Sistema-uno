<?php require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT id,titulo,extracto,cuerpo,fecha_creacion FROM posts");
$posts = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

    <h1 class="text-center mt-5">Bienvenido al Blog de CC</h1>
    <hr>
    <div class="row">
        <div class="col-sm-8">
            <?php foreach ($posts as $post): ?>
                <div class="card-deck mb-5">
                    <div class="card">
                        <img src="imagenes/imagen4.jpg" class="card-img-top" alt="..">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post['titulo'] ?></h5>
                            <h6 class="card-text"><?= $post['extracto'] ?></h6>
                            <small class="text-muted float-right"><?= formatoFecha($post['fecha_creacion']) ?></small>
                        </div>
                        <div class="card-footer">
                            <a href="<?= ROOT ?>/ver_post.php?id=<?= $post['id'] ?>" class="btn btn-info float-right ml-5">Leer mas...</a>

                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

        <div class="col-sm-4">
            <?php include 'aside.php' ?>
        </div>
    </div>

<?php require 'plantillas/footer.php'; ?>