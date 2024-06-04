<?php
    include("conexion.php");
    if ([$_GET["id"]]) {
        $id = $_GET["id"];
        $consulta = "SELECT imagen FROM libros WHERE id = " . $id;
        $resultado = $conexion->query($consulta);
        echo $resultado->fetch_assoc()["imagen"];
    }
?>