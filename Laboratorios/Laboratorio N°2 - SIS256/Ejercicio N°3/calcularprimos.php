<?php
    function esPrimo($num){
        $divisores = 0;
        for ($j=2; $j <= sqrt($num) + 1; $j++) if ($num % $j == 0) return false;
        return true;
    }
    function calcularPrimos($num){
        $primos = array();
        $contador = 0;
        $indice = 2;
        while ($contador < $num) {
            if (esPrimo($indice)) {
                $primos[] = $indice;
                $contador++;
            }
            $indice++;
        }
        return $primos;
    }
    $num = $_POST['numero'];
    $primos = array();
    $primos = calcularPrimos($num);
    echo "<div style='border: 3px solid green; background-color: yellow; max-width: 400px;'> Lista de Primos:";
    echo "<ul>";
    for ($i=0; $i < count($primos); $i++) {
        echo "<li>".$primos[$i]."</li>";
    }
    echo "</ul>";
    echo "</div>";
?>