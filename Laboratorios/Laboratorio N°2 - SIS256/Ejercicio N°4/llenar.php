<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenado de Palabras</title>
</head>
<body>
    <h1>Llenado de Palabras</h1>
    <form action="ordenar.php" method="post">
        <?php
            session_start();
            $cantidad = $_POST['cantidad'];
            $_SESSION['cantidad'] = $cantidad;
            for ($i=1; $i <= $cantidad; $i++) { 
                echo "<label for='palabra$i'>Palabra N°".$i.": </label>";
                echo "<input type='text' name='palabra$i' id='palabra$i' required><br>";
            }
        ?>
        <input type="submit" value="Ordenar">
    </form>
</body>
</html>