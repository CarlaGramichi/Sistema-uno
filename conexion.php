<?php
function conectar()
{
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $contrasena = '';
    $nombreBD = 'mi_primer_sistemita_completo';
    try {
        $con = new PDO("mysql:host=$servidor;port=3006;dbname=$nombreBD", $usuario, $contrasena);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $con;
}