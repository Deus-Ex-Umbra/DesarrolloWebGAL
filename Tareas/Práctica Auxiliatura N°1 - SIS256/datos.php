<?php
include("conexion.php");
$texto = $_POST['texto'];
$sql = "SELECT nombre FROM carreras WHERE nombre LIKE '%$texto%'";

$result = $con->query($sql);
$resultados = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultados[] = $row['nombre'];
    }
}
echo json_encode($resultados);
?>