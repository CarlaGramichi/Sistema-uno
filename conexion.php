<?php
define('ROOT', 'http://localhost/car/comentarios');
function conectar()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $nombreBD = 'car_comentarios';
    $puerto = '3306';

    try {
        $con = new PDO("mysql:host=$servidor;port=$puerto;dbname=$nombreBD", $usuario, $contrasena);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $con;
}