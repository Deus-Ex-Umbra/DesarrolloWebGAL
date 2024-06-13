<?php
// tengo un error con la conexion a la base de datos por eso uso el puerto 3309
$con = new mysqli("localhost", "root", "", "bd_pruebas",3309);
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>
