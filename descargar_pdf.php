<?php


require 'vendor/autoload.php';
require 'conexion.php';
use Spipu\Html2Pdf\Html2Pdf;





$con = conectar();
$consulta = $con->query("SELECT * FROM posts WHERE id IN ({$_REQUEST['seleccionados']})");

$posts = $consulta->fetchAll(PDO::FETCH_ASSOC);

$cuerpo = '';

foreach ($posts as $post) {
    $cuerpo.="

    <h1>{$post['titulo']}</h1>
    <img src='0028651152.jpg'>
    <p>{$post['cuerpo']}</p>
";

}

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($cuerpo);
$html2pdf->output();
?>