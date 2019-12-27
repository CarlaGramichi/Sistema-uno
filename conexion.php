<?php
session_start();

define('ROOT', 'http://localhost/noticias_pdf');

include 'funciones.php';

function conectar()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $nombreBD = 'noticias_pdf';
    $puerto = '3306';

    try {
        $con = new PDO("mysql:host=$servidor;port=$puerto;dbname=$nombreBD", $usuario, $contrasena);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $con;
}


function ultimos_comentarios()
{
    $conn = conectar();

    $consulta = $conn->query("
        SELECT 
          c.comentario,
          c.id,
          u.nombre as autor
        FROM comentarios c
          JOIN usuarios u ON c.usuario_id = u.id
        ORDER BY c.fecha_creacion DESC
        LIMIT 5;");

    return $consulta ? $consulta->fetchAll(PDO::FETCH_ASSOC) : [];
}