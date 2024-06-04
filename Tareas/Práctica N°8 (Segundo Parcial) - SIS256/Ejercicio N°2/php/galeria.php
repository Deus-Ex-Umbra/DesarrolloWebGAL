<?php 
    include("../../Ejercicio N°1/php/conexion.php");
    $consulta = "SELECT id, imagen, titulo FROM libros";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $id = (string) $fila["id"];
            $imagen = $fila["imagen"];
            $titulo = $fila["titulo"];
            echo "<div class='libro'>";
            echo "<button id='" . $id . "' onclick='mostrarDetalles(" . $id . ")'>";
            echo "<img src='../../Ejercicio N°1/multimedia/" . $imagen . "' alt='" . $titulo . "'>";
            echo "</button>";
            echo "</div>";
        }
    } else {
        echo "No hay libros disponibles.";
    }

    $conexion->close();
?>

