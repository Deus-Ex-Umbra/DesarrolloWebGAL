<?php
    function operar($_n, $_m, $_o) {
        switch ($_o) {
            case 1:
                return $_n + $_m;
            case 2:
                return $_n - $_m;
            case 3:
                return $_n * $_m;
            default:
                if ($_m == 0) return "Infinito";
                return $_n / $_m;
        }
    }
    $colfil = $_POST['numero'];
    echo "<table>";
    for ($f = 0; $f <= $colfil; $f++) {
        echo "<tr>";
        for ($c = 0; $c <= $colfil; $c++) {
            $resultado = operar($f, $c, $_POST['operacion']);
            if (($c + $f) == 0) echo "<th style='border: 1px solid #f6be07; color: #f6be07;'></th>";
            else if ($f == 0) echo "<th style='border: 1px solid #f6be07; color: #f6be07;'>$c</th>";
            else if ($c == 0) echo "<th style='border: 1px solid #f6be07; color: #f6be07;'>$f</th>";
            else echo "<td style='border: 1px solid #f6be07; color: #f6be07;'>$resultado</td>";
        }
    }
    echo "</table>";
?>