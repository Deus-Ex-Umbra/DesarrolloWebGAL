<?php
    $conexion = new mysqli("localhost", "root", "", "parcial1");
    if ($conexion->connect_error) die("conexion fallada" . $con->connect_error);
?>