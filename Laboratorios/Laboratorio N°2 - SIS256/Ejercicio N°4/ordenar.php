<?php
    function ordenarPalabras($arrayPalabras){
        $numeroPalabras = count($arrayPalabras);
        for ($i = 0; $i < $numeroPalabras - 1; $i++) {
            for ($j = $i + 1; $j < $numeroPalabras; $j++) {
                $palabra1 = strtolower($arrayPalabras[$i]);
                $palabra2 = strtolower($arrayPalabras[$j]);
                if ($palabra1 > $palabra2) {
                    $temporal = $arrayPalabras[$i];
                    $arrayPalabras[$i] = $arrayPalabras[$j];
                    $arrayPalabras[$j] = $temporal;
                }
            }
        }
        return $arrayPalabras;
    }
    session_start();
    $cantidad = $_SESSION['cantidad'];
    $palabras = array();
    for ($i=1; $i <= $cantidad; $i++) { 
        $palabras[] = $_POST["palabra$i"];
    }
    $palabrasOrdenadas = ordenarPalabras($palabras);
    echo "<div style='border: 3px solid green; background-color: yellow; max-width: 400px;'> Lista de Palabras Ordenadas:";
    echo "<ul>";
    for ($i=0; $i < count($palabrasOrdenadas); $i++) {
        echo "<li>".$palabrasOrdenadas[$i]."</li>";
    }
    echo "</ul>";
    echo "</div>";
?>