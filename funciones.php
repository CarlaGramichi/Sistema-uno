<?php

function insertar($tabla,$datos){
    return sprintf("INSERT INTO %s(%s) VALUES(%s)",
        $tabla,
        implode(',', array_keys($datos)),
        "'" . implode("','", array_values($datos)) . "'"
    );
}