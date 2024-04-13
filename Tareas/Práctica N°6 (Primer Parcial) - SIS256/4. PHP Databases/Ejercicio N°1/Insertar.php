<?php
    include("conexion.php");
    session_start();
    for ($cf = 0; $cf < $_SESSION['n']; $cf++) {
        $nombre = $_POST["nombre$cf"];
        $apellido = $_POST["apellido$cf"];
        $cu = $_POST["cu$cf"];
        $sexo = $_POST["sexo$cf"];
        $carrera = $_POST["carrera$cf"];
        $sql = "INSERT INTO alumnos (nombres, apellidos, cu, sexo, codigocarrera) VALUES ('$nombre', '$apellido', '$cu', '$sexo', '$carrera')";
    }
    if ($conexion->query($sql))  echo "Estudiantes ingresado correctamente";
    else echo "Error: " . $sql . "<br>" . $conexion->error;
?>
<meta http-equiv="refresh" content="2; url=ListaAlumnos.php">