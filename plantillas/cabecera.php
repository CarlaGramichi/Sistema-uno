<?php
error_reporting(E_ALL);

require 'conexion.php';

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Comentarios</title>
</head>

<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CEFDFD;">
        <span class="navbar-brand mb-0 h1">CC</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= ROOT ?>/index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/listado_comentarios.php">Comentarios</a>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                    <?php if (isset($_SESSION['usuario'])):?>
                        <a href="<?= ROOT ?>/perfil_usuario.php" class="text-info text-uppercase">
                            <strong><?= $_SESSION['usuario']['apellido'] ?>, <?= $_SESSION['usuario']['nombre'] ?></strong></a>&emsp;
                        <a href="<?= ROOT ?>/cerrar_sesion.php">
                            <button type="button" class="nav-link btn btn-outline-info my-2 my-sm-0" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="email@...">
                                Salir &emsp;<i class="fas fa-sign-out-alt"></i>
                            </button>
                        </a>

                    <?php else: ?>
                </form>
                <button type="button" class="nav-link btn btn-outline-info" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="email@...">
                    Iniciar Sesión &emsp; <i class="fas fa-sign-in-alt"></i>
                </button>&emsp;
                <a href="<?=ROOT?>/registro_usuario.php" class="nav-link btn btn-outline-info">
                    Registro &emsp; <i class="fas fa-user-plus"></i>
                </a>
                <?php endif ?>
            </ul>
        </div>
    </nav>
</header>
<form action="<?= ROOT ?>/recepcion_inicio.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bienvenido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="form-group row">
                            <span style="font-size: 25px" class="col-sm-1"><i class="fa fa-user"></i></span>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" name="nombre_usuario"
                                       placeholder="Email o Usuario"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span style="font-size: 25px" class="col-sm-1"><i class="fas fa-key"></i></span>
                            <div class="col-sm-11">
                                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                       required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-info btn-block">Iniciar Sesión</button>
                    </form>
                </div>
                <div class="modal-footer  ">
                    <p>No tiene una cuenta!<a href="<?= ROOT ?>/registro_usuario.php" class="tooltip-test  text-info"
                                              title="Registarte">Registrate aquí</a></p>
                </div>
            </div>
        </div>

    </div>

    </div>
</form>
<div class="container">
