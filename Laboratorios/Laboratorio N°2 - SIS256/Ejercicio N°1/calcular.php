<?php
    $num = $_POST['numero'];
    while ($num > 0) {
        $arr_num[] = $num % 10;
        $num = (int)($num / 10);
    }
    $arr_num = array_reverse($arr_num);
    $suma = 0;
    foreach($arr_num as $n) {
        $suma += $n;
    }
    echo "La suma de los dígitos es: $suma";
?>