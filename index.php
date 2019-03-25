<?php require 'plantillas/cabecera.php'; ?>

<?php if (isset($_REQUEST['mensaje'])): ?>
    <div class="alert alert-success col-sm-6 font-weight-bold" role="alert">
        <span> <i class="fas fa-check"></i> </span>
        <?= $_REQUEST['mensaje'] ?>
    </div>
<?php endif ?>

<?php if ($_SESSION['usuario']): ?>

    <h1 class="mt-5">Bienvenido</h1>

    <h4>Por favor ingrese los siguientes datos:</h4>

    <div class="row justify-content-center">
        <form action="<?= ROOT ?>/recepcion.php" method="get" class="col-sm-6 mt-4">

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>

                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                           value="<?= $_SESSION['usuario']['nombre'] ?>" readonly>
                </div>

                <div class="col-sm-5">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control"
                           value="<?= $_SESSION['usuario']['apellido'] ?>" readonly>
                </div>

            </div>

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>

                <div class="form-group col-sm-10">
                    <input type="email" name="email" placeholder="Email" class="form-control"
                           value="<?= $_SESSION['usuario']['email'] ?>" required readonly>
                </div>

            </div>

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>

                <div class="form-group col-sm-10">

                <textarea name="comentario" placeholder="Comentario" cols="25" rows="6" class="form-control"
                          required></textarea>
                </div>

            </div>

            <button type="submit" class="btn btn-info col-sm-11">Guardar Datos</button>

        </form>

    </div>
<?php else: ?>
    <br>
    <h5>No estas registrado. Inicia <a href="<?= ROOT ?>" class="text-info" data-toggle="modal"
        data-target="#exampleModal">Sesión acá</a> o <a
                href="<?= ROOT ?>/registro_usuario.php" class="text-info">Crea una cuenta acá.</a></h5>
    <fieldset disabled>

        <div class="row justify-content-center">
            <form action="<?= ROOT ?>/recepcion.php" method="get" class="col-sm-6 mt-4">

                <div class="form-group row">

                    <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                               value="<?= $_SESSION['usuario']['nombre'] ?>" readonly>
                    </div>

                    <div class="col-sm-5">
                        <input type="text" name="apellido" placeholder="Apellido" class="form-control"
                               value="<?= $_SESSION['usuario']['apellido'] ?>" readonly>
                    </div>

                </div>

                <div class="form-group row">
                    <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>
                    <div class="form-group col-sm-10">
                        <input type="email" name="email" placeholder="Email" class="form-control"
                               value="<?= $_SESSION['usuario']['email'] ?>" required readonly>
                    </div>

                </div>

                <div class="form-group row">

                    <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>

                    <div class="form-group col-sm-10">

                <textarea name="comentario" placeholder="Comentario" cols="25" rows="6" class="form-control"
                          required></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-info col-sm-11">Guardar Datos</button>

            </form>

        </div>
    </fieldset>


<?php endif ?>


<?php require 'plantillas/footer.php' ?>