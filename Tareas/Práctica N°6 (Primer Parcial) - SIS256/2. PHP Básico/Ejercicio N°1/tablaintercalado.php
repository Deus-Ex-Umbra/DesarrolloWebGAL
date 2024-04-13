<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Tabla" content="width=device-width, initial-scale=1.0">
    <title>Tabla Intercalada</title>
    <link rel="stylesheet" href="tabla.css">
</head>
<body>
    <table class="tabla">
        <?php
            $filas = $_GET['filas'];
            $columnas = $_GET['columnas'];
            $colores = ['rojo', 'amarillo', 'verde'];
            for ($f = 0; $f < $filas; $f++) {
                echo "<tr>";
                $color = $colores[$f % 3];
                for ($c = 0; $c < $columnas; $c++) echo "<td class='$color'></td>";
            }
        ?>
    </table>
</body>
</html>
