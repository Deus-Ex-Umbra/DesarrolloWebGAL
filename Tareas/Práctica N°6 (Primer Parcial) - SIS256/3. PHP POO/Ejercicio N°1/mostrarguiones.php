<?php
    include("utiles.php");
    $aumentador = new Utiles($_POST['cadena']);
    $aumentador->aumentarGuiones($_POST['cantidad']);
?>