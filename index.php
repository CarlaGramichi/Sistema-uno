<?php require 'plantillas/cabecera.php'; ?>

<?php if (isset($_REQUEST['mensaje'])): ?>
    <br><div class="alert alert-success col-sm-6 font-weight-bold" role="alert">
        <span> <i class="fas fa-check"></i> </span>
        <?= $_REQUEST['mensaje'] ?>
    </div>
<?php endif ?>

    <h1 class="mt-5">Bienvenido</h1>

    <h4>Por favor ingrese los siguientes datos:</h4>
    <div class="row justify-content-center">
        <form action="<?= ROOT ?>/recepcion.php" method="get" class="col-sm-6 mt-4">

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>

                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                           value="<?= isset($_SESSION['usuario']) ? $_SESSION['usuario']['nombre'] : '' ?>"
                        <?= !isset($_SESSION['usuario']) ? 'disabled' : 'readonly' ?>>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control"
                           value="<?= isset($_SESSION['usuario']) ? $_SESSION['usuario']['apellido'] : '' ?>"
                           <?= !isset($_SESSION['usuario']) ? 'disabled' : 'readonly' ?>>
                </div>
            </div>

            <div class="form-group row">
                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>
                <div class="form-group col-sm-10">
                    <input type="email" name="email" placeholder="Email" class="form-control"
                           value="<?= isset($_SESSION['usuario']) ? $_SESSION['usuario']['email'] : '' ?>"
                           <?= !isset($_SESSION['usuario']) ? 'disabled' : 'readonly'?>>
                </div>
            </div>

            <div class="form-group row">
                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>
                <div class="form-group col-sm-10">
                <textarea name="comentario" placeholder="Comentario" cols="25" rows="6" class="form-control"
                    <?= !isset($_SESSION['usuario']) ? 'disabled' : ''?>></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-info col-sm-11"
                <?= !isset($_SESSION['usuario']) ? 'disabled' : '' ?>>Guardar Datos</button>

        </form>

    </div>

<?php require 'plantillas/footer.php' ?>