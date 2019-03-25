<?php

include 'conexion.php';

$variable_simple_1 = 1;
$variable_simple_2 = 2;
$variable_simple_3 = 3;
$variable_simple_4 = "c";

echo "Variables siemples<br>";
echo $variable_simple_1;
echo $variable_simple_2;
echo $variable_simple_3;
echo $variable_simple_4;
echo "<br>";

echo "Array siemple<br>";

$array_simple_1 = [
    "edad" => 28,
    "peso" => 85,
    "altura" => 1.45,
    "nombre" => "Alicia"
];

echo "El usuario {$array_simple_1['nombre']} está logeado. Tiene {$array_simple_1['edad']} años.";

echo "<br>Array asociativo<br>";

$array_asociativo_1['personas'][] = [
    "edad" => 28,
    "peso" => 85,
    "altura" => 1.45,
    "nombre" => "Alicia"
];
$array_asociativo_1['personas'][] = [
    "edad" => 3,
    "peso" => 11,
    "altura" => 1.22,
    "nombre" => "Miñí"
];
$array_asociativo_1['personas'][] = [
    "edad" => 6,
    "peso" => 32,
    "altura" => 44,
    "nombre" => "Brucer"
];
$array_asociativo_1['personas'][] = [
    "edad" => 1,
    "peso" => 0.3,
    "altura" => 9,
    "nombre" => "Dr. Sordiño"
];

foreach ($array_asociativo_1['personas'] as $llave => $persona) {
    echo "El usuario {$persona['nombre']} está logueado. Tiene {$persona['edad']} años.<br>";
}

echo "Arrays asociativos utilizando bases de datos.<br>";

$conn = conectar();

$consulta = $conn->prepare("SELECT * FROM  usuarios");
$consulta->execute();
$datos['usuarios'] = $consulta->fetchAll(PDO::FETCH_ASSOC);

$consulta = $conn->prepare("SELECT * FROM  comentarios");
$consulta->execute();
$datos['comentarios'] = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos['usuarios'] as $llave => $persona) {
    echo "El usuario {$persona['nombre']} está logeado. Nació el {$persona['fecha_nac']} años.<br>";
}

foreach ($datos['comentarios'] as $llave => $comentario) {
    $fecha = strtotime($comentario['fecha_creacion']);
    $fecha = date('d/m/Y H:i:s', $fecha);
    echo "El usuario {$comentario['nombre']} comentó: {$comentario['comentario']} el dia {$fecha}.<br>";
}