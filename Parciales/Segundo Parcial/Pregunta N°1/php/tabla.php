<?php
    $filas = $_POST['filas1'];
    $columnas = $_POST['columnas1'];
    echo "<table border=1>";
    for ($f = 1; $f <= $filas; $f++) {
        echo "<tr>";
        for ($c = 1; $c <= $columnas; $c++) {
            echo "<td>";
            if ($f == 2 && $c == 1) echo "valor";
            else echo "&nbsp;";
            echo "</td>";
        }
    }
    echo "</table>"
?>