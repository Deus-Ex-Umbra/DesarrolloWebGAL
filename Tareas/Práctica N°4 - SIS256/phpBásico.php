<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Práctica N°4 - SIS256" content="width=device-width, initial-scale=1.0">
    <title>Práctica N°4 - SIS356</title>
</head>
<body>
    <h1>Encontrar la Palabra más Larga</h1>
    <form method="post">
        <label for="cadena">Introduce una cadena de palabras separadas por espacios:</label><br>
        <input type="text" id="cadena" name="cadena"><br>
        <input type="submit" value="Buscar">
    </form>
    <?php
        if(isset($_POST['cadena'])){
            $cadena = $_POST['cadena'];
            $palabras = explode(" ", $cadena);
            $palabraLarga = "";
            foreach($palabras as $palabra){
                if(strlen($palabra) > strlen($palabraLarga)){
                    $palabraLarga = $palabra;
                }
            }
            echo "<p>La palabra más larga es: $palabraLarga</p>";
        }
    ?>
    <h2>Separar números en par e impar</h2>
    <?php
        $numeros = range(1, 20);
        $pares = [];
        $impares = [];
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
        echo "<p>Números pares: " . implode(", ", $pares) . "</p>";
        echo "<p>Números impares: " . implode(", ", $impares) . "</p>";
    ?>
</body>
</html>