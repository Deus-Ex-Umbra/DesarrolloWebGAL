<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        $resultado = $numero + 10;
        echo "El resultado de la suma es: " . $resultado;  
    }
?>
