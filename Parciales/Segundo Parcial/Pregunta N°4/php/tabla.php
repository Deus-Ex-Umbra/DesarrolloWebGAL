<?php
    $con = new mysqli("localhost", "root", "", "bd_biblioteca1");
    if ($con->connect_error) die("conexion fallada" . $con->connect_error);
    $sql = "SELECT l.id, l.titulo, l.autor, e.editorial, l.anio, l.imagen FROM libros AS l LEFT JOIN editoriales AS e ON l.ideditorial = e.id";
    $result = $con->query($sql);
    $i = 1;
    $filas = $result->num_rows;
    echo "<table border=1>";
        echo "<tr>";
        echo "<th>Imagen";
        echo "<th>Titulo";
        echo "<th>Autor";
        echo "<th>Editorial";
        echo "<th>Anio";
    if ($result->num_rows > 0) 
    while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            $imagen = $row["imagen"];
            $titulo = $row["titulo"];
            $autor = $row["autor"];
            $editorial = $row["editorial"];
            $anio = $row["anio"];
            echo "<td><img src='../../Página Principal/images/". $imagen . "' style='width: 80px; height: 80px;'></img>";
            echo "<td>$titulo";
            echo "<td>$autor";
            echo "<td>$editorial";
            echo "<td>$anio";
        }
    else echo "0 resultados";
    echo "</table>"; 
?>