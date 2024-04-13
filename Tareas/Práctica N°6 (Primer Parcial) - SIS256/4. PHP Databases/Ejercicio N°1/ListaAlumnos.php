<?php
    include("conexion.php");
    $sql = "SELECT nombres, apellidos, cu, sexo, codigocarrera FROM alumnos";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>CU</th>";
        echo "<th>Sexo</th>";
        echo "<th>Carrera</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombres'] . "</td>";
            echo "<td>" . $row['apellidos'] . "</td>";
            echo "<td>" . $row['cu'] . "</td>";
            echo "<td>" . $row['sexo'] . "</td>";
            $codigocarrera = $row['codigocarrera'];
            $carrera_query = $conexion->query("SELECT carrera FROM carreras WHERE codigocarrera = '$codigocarrera'");
            if ($carrera_query && $carrera_query->num_rows > 0) {
                $carrera_row = $carrera_query->fetch_assoc();
                echo "<td>" . $carrera_row['carrera'] . "</td>";
            } else {
                echo "<td>No se encontró la carrera</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }
    $conexion->close();
    echo "Será redirigido a insertar en 10 segundos";
?>
<meta http-equiv="refresh" content="10; url=Fintroduccion.html">