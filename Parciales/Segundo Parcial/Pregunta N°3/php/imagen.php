<?php
    $con = new mysqli("localhost", "root", "", "bd_biblioteca1");
    $id = $_POST["id"];
    if ($con->connect_error) die("conexion fallada" . $con->connect_error);
    $sql = "SELECT id, imagen FROM libros WHERE id=$id";
    $result = $con->query($sql);
    $i = 1;
    if ($result->num_rows > 0) while ($row = $result->fetch_assoc()) {
            echo "". $row["imagen"] . "";
        }
    else echo "0 resultados";
?>