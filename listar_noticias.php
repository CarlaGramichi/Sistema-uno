<?php

require 'plantillas/cabecera.php';


$con = conectar();
$consulta = $con->query("SELECT titulo, extracto, cuerpo, fecha_creacion
FROM posts");

$posts = $consulta->fetchAll(PDO::FETCH_ASSOC);

//var_dump($posts);

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


<h4 class="mt-5">Listado de Posts</h4>

<button type="button" class="btn btn-info mt-2 mb-2" id="descarga">descargar PDF</button>

<table class="table table-striped table-bordered " cellspacing="10" id="posts">
    <thead>
    <tr>
        <th>Seleccionar</th>
        <th>Fecha de creación</th>
        <th>Título</th>
        <th>Extracto</th>
        <th>Cuerpo</th>

    </tr>
    </thead>


</table>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>


    $(document).ready(function () {

        $('#posts').DataTable({
            processing: true,
            serverSide: true,
            order: [1, 'ASC'],
            ajax: 'listar_noticias_pdf.php',


            columns: [
                {
                    data: 'id', name: 'id',
                    fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                        $(nTd).html(
                            `<div class="form-check">
                                    <input type="checkbox" value="${oData.id}">
                              </div>`
                        );
                    }
                },
                {data: 'fecha_creacion', name: 'fecha_creacion'},
                {data: 'titulo', name: 'titulo'},
                {data: 'extracto', name: 'extracto'},
                {data: 'cuerpo', name: 'cuerpo'}
            ]
        });

        $('#descarga').click(function () {
            let seleccionados= [];
            $('#posts').find('[type=checkbox]').each(function (index, check) {
                let seleccionado = $(check).is(':checked');
                if (seleccionado){
                    seleccionados.push($(check).val())
                }
            });
            window.open(`descargar_pdf.php?seleccionados=${seleccionados}`);


        })

    });
</script>



