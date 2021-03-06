<?php require 'plantillas/cabecera.php';?>


<h4 class="mt-5">Escribe tu post aquí:</h4>

    <div class="row justify-content-center">

        <form action="<?= ROOT ?>/recepcion_registro_post.php" method="post" class="col-sm-8 mt-2">

            <div class="form-group row">
                <div class="form-group col-sm-12">
                    <input type="text" name="titulo" placeholder="Título" class="form-control"
                           <?= !isset($_SESSION['usuario']) ? 'disabled' : 'required' ?>>
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-12">
                        <textarea name="extracto" placeholder="Extracto" cols="90" rows="2"
                                  class="form-control"
                            <?= !isset($_SESSION['usuario']) ? 'disabled' : 'required' ?>></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-12">
                        <textarea name="cuerpo" placeholder="Cuerpo" cols="90" rows="5"
                                  class="form-control"
                            <?= !isset($_SESSION['usuario']) ? 'disabled' : 'required' ?>></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-info btn-block"
                <?= !isset($_SESSION['usuario']) ? 'disabled' : '' ?>>Guardar Datos</button>
        </form>
    </div>


<?php require 'plantillas/footer.php';?>