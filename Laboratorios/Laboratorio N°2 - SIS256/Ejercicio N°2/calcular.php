<?php
    $tipotemp = $_POST['TipoTemperatura'];
    $temperatura = $_POST['temperatura'];
    $grad1 = 0;
    $grad2 = 0;
    $tipo1 = "";
    $tipo2 = "";
    switch ($tipotemp) {
        case 'Celsius':
            $tipo1 = "Farhenheit (°F)";
            $tipo2 = "Kelvin (K)";
            $grad1 = ($temperatura - 32)*(5/9);
            $grad2 = ($temperatura - 273.15);
            break;
        case 'Fahrenheit':
            $tipo1 = "Celsius (°C)";
            $tipo2 = "Kelvin (K)";
            $grad1 = ($temperatura * (9/5)) + 32;
            $grad2 = ($temperatura - 32)*(5/9) + 273.15;
            break;
        case 'Kelvin':
            $tipo1 = "Celsius (°C)";
            $tipo2 = "Farhenheit (°F)";
            $grad1 = $temperatura + 273.15;
            $grad2 = ($temperatura - 273.15)*(9/5) + 32;
            break;
    }
    echo "<table border='1' style='border-color: green; background-color: white;'>";
    echo "<tr><th>Temperatura</th><th>$tipo1</th><th>$tipo2</th></tr>";
    echo "<tr><td>$temperatura</td><td>$grad1</td><td>$grad2</td></tr>";
    echo "</table>";
?>