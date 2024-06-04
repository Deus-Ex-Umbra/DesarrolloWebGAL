<?php
    $con = new mysqli("localhost", "root", "", "bd_biblioteca1");
    if ($con->connect_error) die("conexion fallada" . $con->connect_error);
    $sql = "SELECT l.id, l.titulo, l.autor, e.editorial, l.anio, l.imagen FROM libros AS l LEFT JOIN editoriales AS e ON l.ideditorial = e.id";
    $result = $con->query($sql);
    $i = 1;
    $ids = array();
    $titulos = array();
    $autores = array();
    $editoriales = array();
    $anios = array();
    $images = array();
    if ($result->num_rows > 0) while ($row = $result->fetch_assoc()) {
            echo "<button onclick='mostrarLibro(". $row["titulo"] . "," . $row["autor"] . "," . $row["editorial"] . "," . $row["anio"] . "," . $row["id"] . ")'" . "class='libros' style='width: 120px; height: 40px;'> <img src='../../Página Principal/images/". $row["imagen"] . "' style='width: 50px; height: 50px;'></img></div>";
        }
    else echo "0 resultados";
?>