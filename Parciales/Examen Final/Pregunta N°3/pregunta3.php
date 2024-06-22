<?php
    include("listaalumnos.php");
    session_start();
    $lista = new ListaAlumnos();
    if (isset($_SESSION["eliminar"])) {
        $alumno = $_SESSION["eliminar"];
        $lista->eliminarAlumno($alumno);
    }
    if (isset($_SESSION["insertar"])) {
        $alumno = $_SESSION["insertar"];
        $lista->insertarAlumno($alumno);
    }
    $lista->mostrarAlumnos();
?>