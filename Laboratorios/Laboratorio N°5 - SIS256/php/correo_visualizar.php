<?php
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE id=$id";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows > 0) while($fila = $resultado->fetch_assoc()) {
            echo "<div style='height: auto%; width: auto%;'>Asunto:" . $fila["id"] . "'</div>";
            echo "<div style='height: auto%; width: auto%;'>Asunto:" . $fila["asunto"] . "'</div>";
            echo "<div style='height: auto%; width: auto%;'>Correo:" . $fila["correo"] . "'</div>";
            echo "<br>";
            echo "<div style='height: auto%; width: auto%;'>Mensaje:'</div>";
            echo "<br>";
            echo "<div style='height: auto%; width: auto%;'>" . $fila["mensaje"] . "'</div>";
        }
    else {
        echo "<div style='width: 100%; height: 90%;'>No está disponible este mensaje</div>";
    }
?>