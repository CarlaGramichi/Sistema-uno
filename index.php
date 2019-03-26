<?php require 'plantillas/cabecera.php';

$con = conectar();
$consulta = $con->query("SELECT titulo,extracto,cuerpo,fecha_creacion FROM posts");
$posts = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach ($posts as $post): ?>
    <br><div class="card-deck">
        <div class="card">
            <img src="imagenes/imagen4.jpg" class="card-img-top" alt="..">
            <div class="card-body">
                <h5 class="card-title"><?= $post['titulo'] ?></h5>
                <h6 class="card-text"><?= $post['extracto'] ?></h6>
                <p class="card-text"><?= $post['cuerpo'] ?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?= $post['fecha_creacion'] ?></small>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php require 'plantillas/footer.php'; ?>