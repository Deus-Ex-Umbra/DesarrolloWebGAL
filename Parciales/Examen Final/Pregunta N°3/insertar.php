<?php
    include("listaalumnos.php");
    session_start();
    $_SESSION["insertar"] = new Alumno($_POST["cu"], $_POST["nombres"], $_POST["apellidos"]);
?>