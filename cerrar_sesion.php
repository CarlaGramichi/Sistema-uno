<?php
include 'conexion.php';

session_destroy();

header("Location:" . ROOT."/index.php");