<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="formulario" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Estudiantes</title>
</head>
<body>
    <form action="Insertar.php" method="post">
    <label for = 'nombre'>Nombre</label>
    <label for = 'apellido'>Apellido</label>
    <label for = 'cu'>CU</label>
    <label for = 'sexo'>Sexo</label>
    <label for = 'carrera'>Carrera</label><br>
    <?php
        include("conexion.php");
        session_start();
        $_SESSION['n'] = $_POST['nest'];
        for ($cf = 0; $cf < $_POST['nest']; $cf++) {
            $indice = $cf + 1;
            echo "$indice";
            echo "<input type = 'text' name = 'nombre$cf' required>";
            echo "<input type = 'text' name = 'apellido$cf' required>";
            echo "<input type = 'text' name = 'cu$cf' required>";
            echo "<label><input type='radio' name='sexo$cf' value='Masculino' required> Masculino</label>";
            echo "<label><input type='radio' name='sexo$cf' value='Femenino' required> Femenino</label>";
            echo "</select>";
            echo "<select name = 'carrera$cf' required>";
            $tablacarreras = "SELECT carrera, codigocarrera FROM CARRERAS";
            try {
            $carreras = $conexion->query($tablacarreras);
            if ($carreras->num_rows > 0) while ($carrera = $carreras->fetch_assoc()) {
    ?>
            <option value = <?php echo $carrera['codigocarrera']; ?> required> <?php echo $carrera['carrera']; ?> </option>
            <?php } 
        echo "</select><br>"; 
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
        ?>
        <input type="submit" value="Ingresar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>