<?php
    include("conexion.php");
    $sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE tipo='R'";
    $resultado = $conexion->query($sql);
    $i = 1;
    if ($resultado->num_rows > 0) {
        echo "<table style='height: 100%; width: 100%;'>";
        echo "<th style='height: 20px; width: 15%;'>Correo</th>";
        echo "<th style='height: 20px; width: 30%;'>Asunto</th>";
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='height: 20px; width: 15%;' onclick='javascript:cargarCorreo(" . $fila["id"] .  ")'>" . $fila['correo'] . "</td>";
            echo "<td style='height: 20px; width: 30%;' onclick='javascript:cargarCorreo(" . $fila["id"] .  ")'>" . $fila['asunto'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<div style='width: 100%; height: 90%;'>No hay mensajes disponibles</div>";
    }
?>