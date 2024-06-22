<?php
    $con = new mysqli("localhost", "root", "", "bd_academica");
    if ($con->connect_error) die("conexion fallada" . $con->connect_error);
    $materia = $_GET["materia"];
    $con->query("SELECT materia FROM usuarios_materias");
    if ($result->num_rows > 0) {
        echo "<select id='materia'>";
        while ($row = $result->fetch_assoc()) {
          
        }
        echo "<table>";
    } else {
        echo "0 resultados";
    }
?>