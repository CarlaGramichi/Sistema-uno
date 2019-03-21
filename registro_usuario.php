<?php require 'plantillas/cabecera.php'; ?>

    <h4 class="mt-5">Por favor ingrese los siguientes datos:</h4>

    <div class="row justify-content-center">

        <form action="<?= ROOT ?>/recepcion_registro_usuario.php" method="get" class="col-sm-8 mt-2">

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>

                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>

                <div class="col-sm-5">
                    <input type="text" name="apellido" placeholder="Apellido" class="form-control">
                </div>

            </div>
            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="fa fa-user"></i></span>

                <div class="col-sm-5">
                    <input type="number" class="form-control" name="dni" placeholder="DNI">
                </div>

                <div class="col-sm-5">
                    <input type="date" name="fecha_nac" placeholder="Fecha de Nacimiento" class="form-control">
                </div>

            </div>
            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>

                <div class="form-group col-sm-10">
                    <input type="text" name="ocupacion" placeholder="Ocupación" class="form-control" required>
                </div>

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-envelope"></i></span>

                <div class="form-group col-sm-10">
                    <input type="email" name="nombre_usuario" placeholder="Email o Usuario" class="form-control" required>
                </div>

            </div>

            <div class="form-group row">

                <span style="font-size: 25px" class="col:sm-2"><i class="far fa-edit"></i></span>

                <div class="form-group col-sm-10">

                <imput type="password" name="contrasena" placeholder="Contraseña" cols="25" rows="6" class="form-control"
                          required></imput>
                </div>

            </div>
                <br>


            <button type="submit" class="btn btn-info btn-block">Guardar Datos</button>

        </form>

    </div>


<?php require 'plantillas/footer.php' ?>