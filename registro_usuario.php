<?php require 'plantillas/cabecera.php'; ?>

    <h4 class="mt-5">Por favor ingrese los siguientes datos:</h4>

    <div class="row justify-content-center">

        <form action="<?= ROOT ?>/recepcion_registro_usuario.php" method="post" class="col-sm-8 mt-2">

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="dni" placeholder="DNI">
                </div>
                <div class="col-sm-6">
                    <input type="date" name="fecha_nac" placeholder="Fecha de Nacimiento" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-12">
                    <input type="text" name="ocupacion" placeholder="Ocupación" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="nombre_usuario" placeholder="Nombre de Usuario" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-12">
                    <input type="password" name="contrasena" placeholder="Contraseña" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="form-group col-sm-12">
                        <textarea name="biografia" placeholder="Biografia" cols="90" rows="5"
                                  class="form-control"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-info btn-block">Guardar Datos</button>
        </form>
    </div>


<?php require 'plantillas/footer.php' ?>