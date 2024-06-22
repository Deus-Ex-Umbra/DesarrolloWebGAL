<?php
    $con = new mysqli("localhost", "root", "", "bd_academica");
    if ($con->connect_error) die("conexion fallada" . $con->connect_error);
    $materia = $_GET["materia"];
    $con->query("SELECT * FROM alumnos AS a LEFT JOIN usuarios_materias AS u ON a.materia = u.materia WHERE u.materia = $materia");
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<th>Id</th>";
        echo "<th>Materia</th>";
        echo "<th>Nombre Completo</th>";
        echo "<th>Celular</th>";
        echo "<th>Calificación</th>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"];
            echo "<td>" . $row["materia"];
            echo "<td>" . $row["nombres_apellidos"];
            echo "<td>" . $row["celular"];
            echo "<td>" . $row["calificacion"];
            echo "</tr>";
        }
        echo "<table>";
    } else {
        echo "0 resultados";
    }
?>