<?php
    $conexion = new mysqli("localhost", "root", "", "bd_correo");
    if ($conexion->connect_error) die("conexion fallada" . $conexion->connect_error);
?>