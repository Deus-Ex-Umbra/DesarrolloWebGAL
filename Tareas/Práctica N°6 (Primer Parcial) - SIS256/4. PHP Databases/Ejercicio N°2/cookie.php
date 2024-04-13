<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas</title>
</head>
<body>
<?php
    session_start();
    if(isset($_COOKIE['contador_visitas'])) {
        $contador_visitas = $_COOKIE['contador_visitas'] + 1;
    } else {
        $contador_visitas = 1;
    }
    setcookie('contador_visitas', $contador_visitas, time() + (86400 * 30), "/");

    if($contador_visitas > 1) {
        echo "Gracias por ya ser un visitante frecuente. Usted ha visitado este sitio " . $contador_visitas . " veces.";
    } else {
        echo "Bienvenido a nuestro sitio web por primera vez!";
    }
?>
</body>
</html>