<?php
function conectar()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $nombreBD = 'mi_primer_sistemita_completo';
    $puerto = '3006';

    try {
        $con = new PDO("mysql:host=$servidor;port=$puerto;dbname=$nombreBD", $usuario, $contrasena);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $con;
}