<?php
include 'conexion.php';

session_destroy();

header("Location:" . ROOT."/inicio.php");