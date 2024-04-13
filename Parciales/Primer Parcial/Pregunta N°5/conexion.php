<?php
$conexion = new mysqli("localhost", "root", "", "bd_biblioteca");
if ($conexion->connect_error) die("conexion fallada" . $conexion->connect_error);
?>