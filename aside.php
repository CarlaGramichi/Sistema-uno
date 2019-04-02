<h3 class="mb-2">Ultimas entradas</h3>
<ul class="list-unstyled">
    <li>Lorem</li>
    <li>Ipsum</li>
    <li>Dolor</li>
    <li>Sit</li>
    <li>Amet</li>
</ul>

<h3 class="mb-2">Populares</h3>
<ul class="list-unstyled">
    <li>Lorem</li>
    <li>Ipsum</li>
    <li>Dolor</li>
    <li>Sit</li>
    <li>Amet</li>
</ul>

<h3 class="mb-2">Últimos comentarios</h3>
<ul class="list-unstyled">
    <?php foreach (ultimos_comentarios() as $comentario): ?>
        <li>
            <a href="">
                <?= substr($comentario['comentario'], 0, 30) ?>...
            </a>
        </li>
    <?php endforeach ?>
</ul>

<h3 class="mb-2">Tags</h3>
<ul class="list-unstyled">
    <div class="badge badge-info">Lorem</div>
    <div class="badge badge-info">Lorem</div>
    <div class="badge badge-info">Lorem</div>
    <div class="badge badge-info">Lorem</div>
    <div class="badge badge-info">Lorem</div>
    <div class="badge badge-info">Lorem</div>
</ul>