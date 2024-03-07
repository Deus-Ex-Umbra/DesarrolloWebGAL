<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $numero = $_POST['numero'];
        header("Location: numeros.php?numero=" . $numero);
        exit;
    } 
?>